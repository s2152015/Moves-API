<?php
/* Galleries Test cases generated on: 2015-12-28 19:42:38 : 1451328158*/
App::import('Controller', 'Galleries');

class TestGalleriesController extends GalleriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GalleriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.gallery', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->Galleries =& new TestGalleriesController();
		$this->Galleries->constructClasses();
	}

	function endTest() {
		unset($this->Galleries);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
