<?php
/**
 * Configuration
 */
	Configure::write('Tinymce.actions', array(
	     'Nodes/admin_add' => array(
			array(
				'elements' => 'NodeBody',
			),
		),
            'Blocks/admin_add' => array(
			array(
				'elements' => 'BlockBody',
			),
		),
             'Blocks/admin_edit' => array(
			array(
				'elements' => 'BlockBody',
			),
		),
              'Hospitals/admin_add' => array(
			array(
				'elements' => 'HospitalDescription',
			),
		),
              'Hospitals/admin_edit' => array(
			array(
				'elements' => 'HospitalDescription',
			),
		),
             
		'Nodes/admin_edit' => array(
			array(
				'elements' => 'NodeBody',
			),
		),
	
	));

/**
 * Hook helper
 */
	foreach (Configure::read('Tinymce.actions') AS $action => $settings) {
		$actionE = explode('/', $action);
		Croogo::hookHelper($actionE['0'], 'Tinymce.Tinymce');
	}
	Croogo::hookHelper('Attachments', 'Tinymce.Tinymce');

