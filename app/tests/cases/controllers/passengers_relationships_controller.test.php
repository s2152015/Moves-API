<?php
/* PassengersRelationships Test cases generated on: 2016-01-07 01:32:59 : 1452126779*/
App::import('Controller', 'PassengersRelationships');

class TestPassengersRelationshipsController extends PassengersRelationshipsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PassengersRelationshipsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.passengers_relationship', 'app.policy', 'app.plan', 'app.pricing_matrix', 'app.age_interval', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->PassengersRelationships =& new TestPassengersRelationshipsController();
		$this->PassengersRelationships->constructClasses();
	}

	function endTest() {
		unset($this->PassengersRelationships);
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
