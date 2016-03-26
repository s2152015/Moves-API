<?php
/* Gallery Test cases generated on: 2015-12-28 19:32:26 : 1451327546*/
App::import('Model', 'Gallery');

class GalleryTestCase extends CakeTestCase {
	var $fixtures = array('app.gallery');

	function startTest() {
		$this->Gallery =& ClassRegistry::init('Gallery');
	}

	function endTest() {
		unset($this->Gallery);
		ClassRegistry::flush();
	}

}
