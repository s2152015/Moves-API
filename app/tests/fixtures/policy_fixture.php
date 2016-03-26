<?php
/* Policy Fixture generated on: 2016-01-05 01:45:14 : 1451954714 */
class PolicyFixture extends CakeTestFixture {
	var $name = 'Policy';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'birthdate' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'passport' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'departure_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'duration' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'is_PA' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'exclude_include' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'passengers_number' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cost' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'plan_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'plan_id' => array('column' => 'plan_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'mobile' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'birthdate' => '2016-01-05',
			'passport' => 'Lorem ipsum dolor sit amet',
			'departure_date' => '2016-01-05',
			'duration' => 1,
			'is_PA' => 1,
			'exclude_include' => 1,
			'passengers_number' => 1,
			'cost' => 1,
			'plan_id' => 1
		),
	);
}
