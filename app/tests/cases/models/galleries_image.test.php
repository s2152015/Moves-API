<?php
/* GalleriesImage Test cases generated on: 2015-12-27 23:19:26 : 1451254766*/
App::import('Model', 'GalleriesImage');

class GalleriesImageTestCase extends CakeTestCase {
	var $fixtures = array('app.galleries_image', 'app.gallery', 'app.galleries_images');

	function startTest() {
		$this->GalleriesImage =& ClassRegistry::init('GalleriesImage');
	}

	function endTest() {
		unset($this->GalleriesImage);
		ClassRegistry::flush();
	}

}
