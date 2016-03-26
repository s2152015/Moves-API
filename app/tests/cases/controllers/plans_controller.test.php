<?php
/* Plans Test cases generated on: 2016-01-03 21:34:16 : 1451849656*/
App::import('Controller', 'Plans');

class TestPlansController extends PlansController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PlansControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.plan', 'app.policy', 'app.pricing_matrix', 'app.age_interval', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->Plans =& new TestPlansController();
		$this->Plans->constructClasses();
	}

	function endTest() {
		unset($this->Plans);
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
