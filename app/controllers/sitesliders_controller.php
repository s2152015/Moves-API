<?php
class SiteslidersController extends AppController {

	var $name = 'Sitesliders';

 public function beforeFilter() {
        parent::beforeFilter();
$this->Security->validatePost = false;

    }
	function admin_index() {
		$this->Siteslider->recursive = 0;
$this->paginate=array('order'=>'Siteslider.id DESC');
		$this->set('sitesliders', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid siteslider', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('siteslider', $this->Siteslider->read(null, $id));
	}
        function view() {
		
		return $this->Siteslider->find("all",array('order'=>'Siteslider.id DESC' ,'limit'=>'4'));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Siteslider->create();
                        $destination = WWW_ROOT . 'uploads/sitesliders_photos' . DS ;
                        $file = $this->data['Siteslider']['imageurl'];
                        $result=$this->Upload->upload($file , $destination, null,null);
                        $this->data['Siteslider']['path'] = '/uploads/sitesliders_photos/' .$this->Upload->result;
			if ($this->Siteslider->save($this->data)) {
				$this->Session->setFlash(__('The siteslider has been saved', true));
				$this->redirect(array('action' => 'admin_index'));
			} else {
				$this->Session->setFlash(__('The siteslider could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid siteslider', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$destination = 'uploads/sitesliders_photos';
			 $result = $this->Upload->simpleupload($this->data['SiteslidersImage'][0], $destination);
			//print_r($result);exit;
			if (!empty($result)) {                 
			$this->data['Siteslider']['path'] = $result['path'];
			} 
			if ($this->Siteslider->save($this->data)) {
				$this->Session->setFlash(__('The siteslider has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The siteslider could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Siteslider->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for siteslider', true));
			$this->redirect(array('action'=>'index'));
		}
                //$siteslider_data=$this->Siteslider->read(null, $id);
		if ($this->Siteslider->delete($id)) {
                        //$myFile = $siteslider_data['Siteslider']['path'];
                        //echo $myFile;exit;
                        //unlink($myFile);
                    
			$this->Session->setFlash(__('Siteslider deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Siteslider was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
           public function getlastslider($no_sliders = null) {

        if ($no_sliders == null) {
            $no_sliders = 5;
        }
        $this->Siteslider->recursive = -1;
        $data = $this->Siteslider->find("all", 
                array( 
                    'limit' => $no_sliders,
                    'fields'=>array('Siteslider.path','Siteslider.imglink')));
        return $data;
    }
}
?>
