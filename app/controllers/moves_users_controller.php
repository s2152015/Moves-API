<?php
class MovesUsersController extends AppController {

	var $name = 'MovesUsers';
	var $components    = array('Cookie');
	  /*
    * return 
    * Array ( [access_token] => G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u [token_type] => bearer [expires_in] => 15551999 [refresh_token] => Ic6P5iQvhh0KDJ3RQDIfpihUBv363x1uNDhS3kXsssHTm8z4k_AFXmwXE6TU758j [user_id] => 7882254734904342 ) 
    * 
    */
    function getAccessToken($code)
   {
   	  //https://api.moves-app.com/oauth/v1/access_token?grant_type=authorization_code&code=omhP5Np8zuU0WmcgFn7pvSq2Cg4NC1jCLdcThCF2VUcvMISG36MiFk7cfc2Jcr76&client_id=mYGL3F9T0AdvFi9lVWOLs1RsROGSP61r&client_secret= 	dDUm6Y10a0RzQAI_QR4iwaEB_mN_0DJLOwKd8dos7Cx_qBpunFj9LBryghjn9U3z&redirect_uri=http://localhost/workspace/doctorsmobile
  	   //print_r($_GET['code']);
		$url = 'https://api.moves-app.com/oauth/v1/access_token';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS,"grant_type=authorization_code&code=".$code."&client_id=mYGL3F9T0AdvFi9lVWOLs1RsROGSP61r&client_secret=dDUm6Y10a0RzQAI_QR4iwaEB_mN_0DJLOwKd8dos7Cx_qBpunFj9LBryghjn9U3z&redirect_uri=http://localhost/workspace/doctorsmobile");
		// receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$server_output = curl_exec ($ch);
		curl_close ($ch);
	    $result =json_decode($server_output, true);
		 if(!empty($result) && isset($result['access_token'])){
		 	$this->_save_user($result);
		 }
		return $result;
	
   }
	
	function _save_user($result)
	{
		//$result= array( 'access_token' => 'G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u' ,'token_type'=> 'bearer', 'expires_in' => 15551999, 'refresh_token' => 'Ic6P5iQvhh0KDJ3RQDIfpihUBv363x1uNDhS3kXsssHTm8z4k_AFXmwXE6TU758j', 'user_id' => '7882254734904342' );
		 $user = $this->MovesUser->find('first', array('conditions' => array('userid' => $result['user_id'])));
			if(empty($user)){
			  $this->MovesUser->create();
			  $data = array('MovesUser'=>Array ('userid' => $result['user_id'],'access_token' => $result['access_token'] ) ); 
			  $this->MovesUser->save($data);
			}else{
				$data = array('MovesUser'=>Array ('id'=>$user['MovesUser']['id'],'access_token' => $result['access_token'] ) ); 
			    $this->MovesUser->save($data);	
           }
            $this->Session->write('accestoken',$result['access_token']);
	}

	function admin_index() {
		$this->MovesUser->recursive = 0;
		$this->set('movesUsers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid moves user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('movesUser', $this->MovesUser->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->MovesUser->create();
			if ($this->MovesUser->save($this->data)) {
				$this->Session->setFlash(__('The moves user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moves user could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid moves user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->MovesUser->save($this->data)) {
				$this->Session->setFlash(__('The moves user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The moves user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->MovesUser->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for moves user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->MovesUser->delete($id)) {
			$this->Session->setFlash(__('Moves user deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Moves user was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
