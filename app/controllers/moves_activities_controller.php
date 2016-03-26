<?php
class MovesActivitiesController extends AppController {

	var $name = 'MovesActivities';
	var $components    = array('Cookie');
 
 
   function getDailyActivity($access_token)
   {
     	$url = 'https://api.moves-app.com/api/1.1/user/summary/daily/201603?access_token='.$access_token;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
	    $result =json_decode($server_output, true);
		$this->set('movesActivities', $result);
		return $result;
       
   }
   function updateMovesActivities($access_token)
   {
   	$activities = $this->getDailyActivity($access_token);
	$movesUsers = $this->MovesActivity->MovesUser->find('first',array('conditions' => array('access_token' => $access_token)));
	$user_id = $movesUsers['MovesUser']['id'];
	if(!empty($activities)){
		$this->MovesActivity->query('TRUNCATE  moves_activities;');
		foreach ($activities as $moves) {
		if(!empty($moves['summary'])){
	     foreach ($moves['summary'] as $summary) {
		   	$data=array('MovesActivity'=>array('activity_name'=>$summary['activity'],'moves_user_id'=>$user_id,'created'=>$moves['date'],
		   	                                   'duration'=>$summary['duration'],'distance'=>$summary['distance'],
		   	                                   'steps'=> $summary['steps'],'groups'=>$summary['group']));
			
		   	$this->MovesActivity->create();
			$this->MovesActivity->save($data);

		 }
		}
	  }		
	 }
   }
    /*
	* web service url:http://mydomain.com/moves_activities/getDailyActivityWeekly/G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u/20160315
    * date:yyyymmdd 
    * */
   function getDailyActivityByDate($accestoken,$date)
   {
   	  // $this->layout="";
   	   $this->MovesActivity->recursive = 0;
       $movesActivity = $this->MovesActivity->find('all',array('conditions' => array('MovesUser.access_token' => $accestoken,'MovesActivity.created'=>$date),
	                                                             'fields' => array('MovesActivity.duration', 'MovesActivity.steps','MovesActivity.distance','MovesActivity.created')));
	   $result = json_encode($movesActivity);
	   $this->set('movesActivities', $result);
	   return $movesActivity;
   }
   /*
    * web service url:http://mydomain.com/moves_activities/getDailyActivityWeekly/G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u/201603
    * date:yyyymm 
    * */
   function getDailyActivityMonthly($accestoken,$date)
   {
       // $this->layout="";
		$date =$date.'01';
	   	$time=strtotime($date);
		$month=date("m",$time);
		$year=date("Y",$time);
   	    $this->MovesActivity->recursive = 0;
        $movesActivities = $this->MovesActivity->find('all',array('conditions' => array('MovesUser.access_token' => $accestoken,'MONTH(MovesActivity.created)'=>$month,'Year(MovesActivity.created)'=>$year),
                                                               'fields' => array('MovesActivity.duration', 'MovesActivity.steps','MovesActivity.distance','MovesActivity.created')));
	    $result = json_encode($movesActivities);
		$this->set('movesActivities', $result);
		return $movesActivities;
   
   }
  /*
   * web service url:http://mydomain.com/moves_activities/getDailyActivityWeekly/G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u/2016-W09
   * date:2016-W09
   * 
   * */
   function getDailyActivityWeekly($accestoken,$date){
    	//$this->layout="";
   	    $cdate = explode('-', $date);
		$year =0;
		$week=0;
		if(isset($cdate[1])){
		  $year =$cdate[0];
		  $weekdate = explode('W', $cdate[1]);
		  $week = $weekdate[1];	
		}
   	    $this->MovesActivity->recursive = 0;
        $movesActivities = $this->MovesActivity->find('all',array('conditions' => array('MovesUser.access_token' => $accestoken,'WEEK(MovesActivity.created)'=>$week,'Year(MovesActivity.created)'=>$year),
                                                                   'fields' => array('MovesActivity.duration', 'MovesActivity.steps','MovesActivity.distance','MovesActivity.created')));
	    $result = json_encode($movesActivities);
		$this->set('movesActivities', $result);
		return $movesActivities;
   
   }
    function getActivitiesByUser(){
    	$movesUsers = $this->MovesActivity->MovesUser->find('list',array('fields' => array('MovesUser.access_token','MovesUser.userid')));
		$this->set(compact('movesUsers'));
	   if(!empty($this->data)){
	   	$movesActivities =array();
	   	$type = $this->data['MovesActivity']['types'];
		$accestoken = $this->data['MovesActivity']['movesUsers'];
		$date = $this->data['MovesActivity']['date'];
	    if($type =="daily"){
	    	$movesActivities = $this->getDailyActivityByDate($accestoken, $date);
	    }elseif($type =="weekly"){
	     $movesActivities = $this->getDailyActivityWeekly($accestoken, $date);	
	    }elseif($type =="monthly"){
	     $movesActivities = $this->getDailyActivityMonthly($accestoken, $date);	
	    }
	    $this->set('movesActivities', $movesActivities);
	   }	
   }
	function admin_index() {
		$this->MovesActivity->recursive = 0;
		$this->set('movesActivities', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid moves activity', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('movesActivity', $this->MovesActivity->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MovesActivity->create();
			if ($this->MovesActivity->save($this->data)) {
				$this->Session->setFlash(__('The moves activity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moves activity could not be saved. Please, try again.', true));
			}
		}
		$movesUsers = $this->MovesActivity->MovesUser->find('list');
		$this->set(compact('movesUsers'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid moves activity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MovesActivity->save($this->data)) {
				$this->Session->setFlash(__('The moves activity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moves activity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MovesActivity->read(null, $id);
		}
		$movesUsers = $this->MovesActivity->MovesUser->find('list');
		$this->set(compact('movesUsers'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for moves activity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MovesActivity->delete($id)) {
			$this->Session->setFlash(__('Moves activity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Moves activity was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
