<?php
/* GalleriesImage Fixture generated on: 2015-12-27 23:19:26 : 1451254766 */
class GalleriesImageFixture extends CakeTestFixture {
	var $name = 'GalleriesImage';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'img_original' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'img_thumb' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gallery_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'img_original' => 'Lorem ipsum dolor sit amet',
			'img_thumb' => 'Lorem ipsum dolor sit amet',
			'gallery_id' => 1,
			'created' => '2015-12-27 23:19:26',
			'updated' => '2015-12-27 23:19:26'
		),
	);
}
