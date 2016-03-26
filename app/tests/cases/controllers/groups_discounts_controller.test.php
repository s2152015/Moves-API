<?php
/* GroupsDiscounts Test cases generated on: 2016-01-03 21:33:15 : 1451849595*/
App::import('Controller', 'GroupsDiscounts');

class TestGroupsDiscountsController extends GroupsDiscountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class GroupsDiscountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.groups_discount', 'app.block', 'app.region', 'app.link', 'app.menu', 'app.setting', 'app.node', 'app.user', 'app.role', 'app.comment', 'app.meta', 'app.taxonomy', 'app.term', 'app.vocabulary', 'app.type', 'app.types_vocabulary', 'app.nodes_taxonomy');

	function startTest() {
		$this->GroupsDiscounts =& new TestGroupsDiscountsController();
		$this->GroupsDiscounts->constructClasses();
	}

	function endTest() {
		unset($this->GroupsDiscounts);
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
