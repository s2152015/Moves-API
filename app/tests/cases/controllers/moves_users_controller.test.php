<?php
/* MovesUsers Test cases generated on: 2016-03-25 14:19:07 : 1458908347*/
App::import('Controller', 'MovesUsers');

class TestMovesUsersController extends MovesUsersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MovesUsersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.moves_user', 'app.moves_activity', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->MovesUsers =& new TestMovesUsersController();
		$this->MovesUsers->constructClasses();
	}

	function endTest() {
		unset($this->MovesUsers);
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
