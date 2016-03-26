<?php
/* Policies Test cases generated on: 2016-01-05 01:45:54 : 1451954754*/
App::import('Controller', 'Policies');

class TestPoliciesController extends PoliciesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PoliciesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.policy', 'app.plan', 'app.pricing_matrix', 'app.age_interval', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->Policies =& new TestPoliciesController();
		$this->Policies->constructClasses();
	}

	function endTest() {
		unset($this->Policies);
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
