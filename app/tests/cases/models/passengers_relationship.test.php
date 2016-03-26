<?php
/* PassengersRelationship Test cases generated on: 2016-01-07 01:32:21 : 1452126741*/
App::import('Model', 'PassengersRelationship');

class PassengersRelationshipTestCase extends CakeTestCase {
	var $fixtures = array('app.passengers_relationship', 'app.policy', 'app.plan', 'app.pricing_matrix', 'app.age_interval');

	function startTest() {
		$this->PassengersRelationship =& ClassRegistry::init('PassengersRelationship');
	}

	function endTest() {
		unset($this->PassengersRelationship);
		ClassRegistry::flush();
	}

}
