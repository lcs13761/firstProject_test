<?php

namespace config;

class Connect
{
private const OPTIONS = [
    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
    \PDO::ATTR_CASE => \PDO::CASE_NATURAL
];

/**@var \PDO */
private static $intance;

/**
 * @return \PDO
 */
public static function getInstance(): ?\PDO 
{
    if(empty(self::$intance)){
        try {
            self::$intance = new \PDO("mysql:host=" . CONF_DB_HOST, CONF_DB_USER,
            CONF_DB_PASSWORD, self::OPTIONS);
            self::$intance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
            self::$intance->query("CREATE DATABASE IF NOT EXISTS ". CONF_DB_NAME);
            self::$intance->query("use ". CONF_DB_NAME);

        }catch (\PDOException $exception){
            die("<h1>Erro ao conectar....<h1>" .$exception);

        }
}
    return self::$intance;
}
final private function __construct()
{
   
}

/**
 * Connect clone.
 */
final private function __clone()
{
}
}
