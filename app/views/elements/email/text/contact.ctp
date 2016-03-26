<?php
	$url = Router::url(array(
		'controller' => 'contacts',
		'action' => 'view',
		$contact['Contact']['alias'],
	), true);
	echo sprintf(__('You have received a new message at: %s', true), $url) . "\n \n";
	//echo sprintf(__('IP Address: %s', true), $_SERVER['REMOTE_ADDR']) . "\n";
	echo sprintf(__('Company: %s', true), $message['data']['Message']['company']) . "\n";
	echo sprintf(__('Name: %s', true), $message['data']['Message']['name']) . "\n";
	echo sprintf(__('Email: %s', true), $message['data']['Message']['email']) . "\n";
	echo sprintf(__('Subject: %s', true), $message['data']['Message']['title']) . "\n";
	echo sprintf(__('Address: %s', true), $message['data']['Message']['address']) . "\n";
	echo sprintf(__('Country: %s', true), $message['country_name']) . "\n";
	echo sprintf(__('City: %s', true), $message['city_name']) . "\n";
	echo sprintf(__('Phone: %s', true), $message['data']['Message']['phone']) . "\n";
	echo sprintf(__('Fax: %s', true), $message['data']['Message']['fax']) . "\n";
	echo sprintf(__('Code: %s', true), $message['data']['Message']['code']) . "\n";
	echo sprintf(__('Message: %s', true), $message['data']['Message']['body']) . "\n";
	
?>