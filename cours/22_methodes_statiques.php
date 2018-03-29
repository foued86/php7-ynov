<?php

class PDOFactory
{
	protected static $user = 'root';
	protected static $password = 'ynov';
	
	public static function createPDO()
	{
		$dsn = 'mysql:dbname=php;host=127.0.0.1';

		return new PDO($dsn, self::$user, self::$password);
	}
	
	public static function createPDODatabase($database)
	{
		$dsn = 'mysql:dbname='.$database.';host=127.0.0.1';
		
		return new PDO($dsn, self::$user, self::$password);
	}
}

$pdo = PDOFactory::createPDO();
$pdoFruits = PDOFactory::createPDODatabase('politic');
