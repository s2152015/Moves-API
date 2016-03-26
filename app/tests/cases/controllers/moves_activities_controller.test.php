<?php
/* MovesActivities Test cases generated on: 2016-03-25 14:18:26 : 1458908306*/
App::import('Controller', 'MovesActivities');

class TestMovesActivitiesController extends MovesActivitiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MovesActivitiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.moves_activity', 'app.moves_user', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->MovesActivities =& new TestMovesActivitiesController();
		$this->MovesActivities->constructClasses();
	}

	function endTest() {
		unset($this->MovesActivities);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

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
