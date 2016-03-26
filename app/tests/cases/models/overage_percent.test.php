<?php
/* OveragePercent Test cases generated on: 2016-01-03 21:26:24 : 1451849184*/
App::import('Model', 'OveragePercent');

class OveragePercentTestCase extends CakeTestCase {
	var $fixtures = array('app.overage_percent');

	function startTest() {
		$this->OveragePercent =& ClassRegistry::init('OveragePercent');
	}

	function endTest() {
		unset($this->OveragePercent);
		ClassRegistry::flush();
	}

}
