<?php
/* PricingMatrix Fixture generated on: 2016-01-03 21:27:40 : 1451849260 */
class PricingMatrixFixture extends CakeTestFixture {
	var $name = 'PricingMatrix';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'is_PA' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'PA_value' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'exclude/include' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'plan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'age_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'plan_id' => array('column' => 'plan_id', 'unique' => 0), 'age_id' => array('column' => 'age_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'duration' => 1,
			'is_PA' => 1,
			'PA_value' => 1,
			'cost' => 1,
			'exclude/include' => 1,
			'plan_id' => 1,
			'age_id' => 1
		),
	);
}
