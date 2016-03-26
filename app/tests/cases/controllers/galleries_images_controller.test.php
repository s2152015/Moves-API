<?php
/* GalleriesImages Test cases generated on: 2015-12-27 23:20:02 : 1451254802*/
App::import('Controller', 'GalleriesImages');

class TestGalleriesImagesController extends GalleriesImagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GalleriesImagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.galleries_image', 'app.gallery', 'app.galleries_images', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->GalleriesImages =& new TestGalleriesImagesController();
		$this->GalleriesImages->constructClasses();
	}

	function endTest() {
		unset($this->GalleriesImages);
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
