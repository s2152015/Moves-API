<?php
/* PassengersRelationship Fixture generated on: 2016-01-07 01:32:21 : 1452126741 */
class PassengersRelationshipFixture extends CakeTestFixture {
	var $name = 'PassengersRelationship';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'relationship' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'birthdate' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'cost' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => 10),
		'policy_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'relationship' => 'Lorem ipsum dolor sit amet',
			'birthdate' => '2016-01-07',
			'cost' => 1,
			'policy_id' => 1
		),
	);
}
