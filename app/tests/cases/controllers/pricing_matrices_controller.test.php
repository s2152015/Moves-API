<?php
/* PricingMatrices Test cases generated on: 2016-01-03 21:35:08 : 1451849708*/
App::import('Controller', 'PricingMatrices');

class TestPricingMatricesController extends PricingMatricesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PricingMatricesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.pricing_matrix', 'app.plan', 'app.policy', 'app.age_interval', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->PricingMatrices =& new TestPricingMatricesController();
		$this->PricingMatrices->constructClasses();
	}

	function endTest() {
		unset($this->PricingMatrices);
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
