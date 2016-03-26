<?php
/* AgeInterval Test cases generated on: 2016-01-03 21:24:55 : 1451849095*/
App::import('Model', 'AgeInterval');

class AgeIntervalTestCase extends CakeTestCase {
	var $fixtures = array('app.age_interval');

	function startTest() {
		$this->AgeInterval =& ClassRegistry::init('AgeInterval');
	}

	function endTest() {
		unset($this->AgeInterval);
		ClassRegistry::flush();
	}

}
