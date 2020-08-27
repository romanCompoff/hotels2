<?php

namespace Dva\Hotels\Core;

class DB
{
	protected static $instance;
	
	public static function getConnect()
	{
		if(self::$instance === NULL){
			self::$instance = self::connect();
		}
		return self::$instance;
	}
	
	protected static function connect()
	{
		$dsn = sprintf('%s:host=%s;dbname=%s', 'mysql', 'localhost', 'host1812801_evrop');
		return new \PDO($dsn, 'root', 'root');
		// return new \PDO($dsn, 'host1812801_evropeec', '2h8I5902');
	}

}

