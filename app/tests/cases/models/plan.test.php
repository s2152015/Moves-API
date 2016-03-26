<?php
/* Plan Test cases generated on: 2016-01-03 21:16:10 : 1451848570*/
App::import('Model', 'Plan');

class PlanTestCase extends CakeTestCase {
	var $fixtures = array('app.plan', 'app.policy', 'app.pricing_matrix');

	function startTest() {
		$this->Plan =& ClassRegistry::init('Plan');
	}

	function endTest() {
		unset($this->Plan);
		ClassRegistry::flush();
	}

}
