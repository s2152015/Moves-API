<?php
/* OveragePercents Test cases generated on: 2016-01-03 21:33:58 : 1451849638*/
App::import('Controller', 'OveragePercents');

class TestOveragePercentsController extends OveragePercentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OveragePercentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.overage_percent', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->OveragePercents =& new TestOveragePercentsController();
		$this->OveragePercents->constructClasses();
	}

	function endTest() {
		unset($this->OveragePercents);
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
