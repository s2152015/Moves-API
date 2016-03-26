<?php
/* GroupsDiscount Test cases generated on: 2016-01-03 21:25:43 : 1451849143*/
App::import('Model', 'GroupsDiscount');

class GroupsDiscountTestCase extends CakeTestCase {
	var $fixtures = array('app.groups_discount');

	function startTest() {
		$this->GroupsDiscount =& ClassRegistry::init('GroupsDiscount');
	}

	function endTest() {
		unset($this->GroupsDiscount);
		ClassRegistry::flush();
	}

}
