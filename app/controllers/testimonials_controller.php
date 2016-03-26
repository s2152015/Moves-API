<?php
class TestimonialsController extends AppController {

	var $name = 'Testimonials';
	var $helpers = array('Html', 'Form');
public $uploadsDir = 'uploads/testimonial';

	function index() {
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid testimonial', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('testimonial', $this->Testimonial->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Testimonial->create();
			if ($this->Testimonial->save($this->data)) {
				$this->Session->setFlash(__('The testimonial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid testimonial', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Testimonial->save($this->data)) {
				$this->Session->setFlash(__('The testimonial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Testimonial->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for testimonial', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Testimonial->delete($id)) {
			$this->Session->setFlash(__('Testimonial deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Testimonial was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Testimonial->recursive = 0;
		$this->set('testimonials', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid testimonial', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('testimonial', $this->Testimonial->read(null, $id));
	}

	function admin_add() {
		
                
                	if (!empty($this->data)) {


		$file = $this->data['Testimonial']['file'];
		unset($this->data['Testimonial']['file']);
		// check if file with same path exists
		$destination = WWW_ROOT . $this->uploadsDir . DS . $file['name'];
		if (file_exists($destination)) {
		$newFileName = String::uuid() . '-' . $file['name'];
		$destination = WWW_ROOT . $this->uploadsDir . DS . $newFileName;
		} else {
		$newFileName = $file['name'];
		}
		$this->data['Testimonial']['imgpath'] = '/' . $this->uploadsDir . '/' . $newFileName;;

			$this->Testimonial->create();
			if ($this->Testimonial->save($this->data)) {
			// move the file
       			 move_uploaded_file($file['tmp_name'], $destination);
				$this->Session->setFlash(__('The Testimonial has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Testimonial could not be saved. Please, try again.', true));
			}
		}
                
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid testimonial', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                    $file = $this->data['Testimonial']['file'];
		unset($this->data['Testimonial']['file']);
		// check if file with same path exists
		$destination = WWW_ROOT . $this->uploadsDir . DS . $file['name'];
		if (file_exists($destination)) {
		$newFileName = String::uuid() . '-' . $file['name'];
		$destination = WWW_ROOT . $this->uploadsDir . DS . $newFileName;
		} else {
		$newFileName = $file['name'];
		}
		$this->data['Testimonial']['imgpath'] = '/' . $this->uploadsDir . '/' . $newFileName;;

                
			if ($this->Testimonial->save($this->data)) {
                             move_uploaded_file($file['tmp_name'], $destination);
				$this->Session->setFlash(__('The testimonial has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Testimonial->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for testimonial', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Testimonial->delete($id)) {
			$this->Session->setFlash(__('Testimonial deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Testimonial was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
