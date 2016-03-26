<?php
/* PeriodPlans Test cases generated on: 2016-01-14 01:18:36 : 1452730716*/
App::import('Controller', 'PeriodPlans');

class TestPeriodPlansController extends PeriodPlansController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeriodPlansControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.period_plan', 'app.plan', 'app.policy', 'app.pricing_matrix', 'app.age_interval', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->PeriodPlans =& new TestPeriodPlansController();
		$this->PeriodPlans->constructClasses();
	}

	function endTest() {
		unset($this->PeriodPlans);
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
