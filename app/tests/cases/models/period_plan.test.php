<?php
/* PeriodPlan Test cases generated on: 2016-01-14 01:17:40 : 1452730660*/
App::import('Model', 'PeriodPlan');

class PeriodPlanTestCase extends CakeTestCase {
	var $fixtures = array('app.period_plan', 'app.plan', 'app.policy', 'app.pricing_matrix', 'app.age_interval');

	function startTest() {
		$this->PeriodPlan =& ClassRegistry::init('PeriodPlan');
	}

	function endTest() {
		unset($this->PeriodPlan);
		ClassRegistry::flush();
	}

}
