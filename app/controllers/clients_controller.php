<?php
class ClientsController extends AppController {

	var $name = 'Clients';
	var $helpers = array('Html', 'Form');
public $uploadsDir = 'uploads';
	function admin_index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}

function index() {
		$this->Client->recursive = 0;
		$this->set('clients', $this->paginate());
	}
function export_xls() {
		$this->Client->recursive = 1;
		$data = $this->Client->find('all');
		
		$this->set('rows',$data);
		$this->render('export_xls','export_xls');

	}
	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Client.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('client', $this->Client->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {


		$file = $this->data['Client']['file'];
		unset($this->data['Client']['file']);
		// check if file with same path exists
		$destination = WWW_ROOT . $this->uploadsDir . DS . $file['name'];
		if (file_exists($destination)) {
		$newFileName = String::uuid() . '-' . $file['name'];
		$destination = WWW_ROOT . $this->uploadsDir . DS . $newFileName;
		} else {
		$newFileName = $file['name'];
		}
		$this->data['Client']['imgpath'] = '/' . $this->uploadsDir . '/' . $newFileName;;

			$this->Client->create();
			if ($this->Client->save($this->data)) {
			// move the file
       			 move_uploaded_file($file['tmp_name'], $destination);
				$this->Session->setFlash(__('The Client has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Client could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Client', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
                    		$file = $this->data['Client']['file'];
		unset($this->data['Client']['file']);
		// check if file with same path exists
		$destination = WWW_ROOT . $this->uploadsDir . DS . $file['name'];
		if (file_exists($destination)) {
		$newFileName = String::uuid() . '-' . $file['name'];
		$destination = WWW_ROOT . $this->uploadsDir . DS . $newFileName;
		} else {
		$newFileName = $file['name'];
		}
		$this->data['Client']['imgpath'] = '/' . $this->uploadsDir . '/' . $newFileName;;

                
			if ($this->Client->save($this->data)) {
                             move_uploaded_file($file['tmp_name'], $destination);
				$this->Session->setFlash(__('The Client has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Client could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Client->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Client', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Client->delete($id)) {
			$this->Session->setFlash(__('Client deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
          public function getlastclients($no_clients = 12) {

        $this->Client->recursive = -1;
        $data = $this->Client->find("all", 
                array( 
                    'limit' => $no_clients));
        return $data;
    }

}
?>
