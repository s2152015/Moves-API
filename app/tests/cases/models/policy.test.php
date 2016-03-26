<?php
/* Policy Test cases generated on: 2016-01-05 01:45:16 : 1451954716*/
App::import('Model', 'Policy');

class PolicyTestCase extends CakeTestCase {
	var $fixtures = array('app.policy', 'app.plan', 'app.pricing_matrix', 'app.age_interval');

	function startTest() {
		$this->Policy =& ClassRegistry::init('Policy');
	}

	function endTest() {
		unset($this->Policy);
		ClassRegistry::flush();
	}

}
