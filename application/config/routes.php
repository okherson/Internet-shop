<?php

return [
	'' => [
		'controller' => 'main',
		'action' => 'index', 
	],
	
	'account/login' => [
		'controller' => 'account',
		'action' => 'login', 
	],

	'account/register' => [
		'controller' => 'account',
		'action' => 'register', 
	],
	
	'account/logout' => [
		'controller' => 'account',
		'action' => 'logout', 
	],

	'main/item' => [
		'controller' => 'main',
		'action' => 'item',
	],
	
	'store/basket' => [
		'controller' => 'store',
		'action' => 'basket',
	],
	
	'manager/client' => [
		'controller' => 'manager',
		'action' => 'client',
	],
	'manager/item' => [
		'controller' => 'manager',
		'action' => 'item',
	],

	'manager/sales' => [
		'controller' => 'manager',
		'action' => 'sales',
	],
];