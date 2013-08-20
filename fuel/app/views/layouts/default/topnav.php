<?php

$topnav = array(
	array(
		'href'    => '/',
		'value'   => 'Dashboard',
		'icon'    => 'icon-home',
		'aliases' => array(''),
	),
	array(
		'href'    => 'customers',
		'value'   => 'Customers',
		'icon'    => 'icon-user',
		'aliases' => array('customers/*'),
	),
	array(
		'href'    => 'products',
		'value'   => 'Products',
		'icon'    => 'icon-barcode',
		'aliases' => array('products/*'),
	),
	array(
		'href'    => 'settings',
		'value'   => 'Settings',
		'icon'    => 'icon-gear',
		'aliases' => array('settings/*'),
	),
);

echo View_Helper::nav($topnav);
