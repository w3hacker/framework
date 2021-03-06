<?php

return [

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',

	'connections' => [

		'sqlite' => [
			'driver' => 'sqlite',
			'database' => 'database.sqlite',
			'prefix' => '',
		],

		'mysql' => [
			'driver' => 'mysql',
			'host' => 'localhost',
			'port' => '3306',
			'database' => 'test',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix' => '',
			'strict' => false,
			'engine' => null,
		],

		'pgsql' => [
			'driver' => 'pgsql',
			'host' => 'localhost',
			'port' => '5432',
			'database' => 'forge',
			'username' => 'forge',
			'password' => '',
			'charset' => 'utf8',
			'prefix' => '',
			'schema' => 'public',
		],

	],

];