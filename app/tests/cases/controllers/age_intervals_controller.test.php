<?php
/* AgeIntervals Test cases generated on: 2016-01-03 21:32:38 : 1451849558*/
App::import('Controller', 'AgeIntervals');

class TestAgeIntervalsController extends AgeIntervalsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AgeIntervalsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.age_interval', 'app.pricing_matrix', 'app.plan', 'app.policy', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->AgeIntervals =& new TestAgeIntervalsController();
		$this->AgeIntervals->constructClasses();
	}

	function endTest() {
		unset($this->AgeIntervals);
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
