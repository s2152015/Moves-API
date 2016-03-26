<?php
/* AgeInterval Fixture generated on: 2016-01-03 21:24:55 : 1451849095 */
class AgeIntervalFixture extends CakeTestFixture {
	var $name = 'AgeInterval';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'from' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'to' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'from' => 1,
			'to' => 1
		),
	);
}
