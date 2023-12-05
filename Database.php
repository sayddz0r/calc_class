<?php
require_once("Database.php");

class Database
{
    private static $connection;

    public static function connect()
    {
        if (empty(self::$connection)) {
            self::$connection = mysqli_connect("localhost", "root", "", "calc_data");// Соединение с бд
        }
    }

    protected static function query($sqlString)
    {
        return mysqli_query(self::$connection, $sqlString);
    }

    protected static function fetch($query)
    {
        return mysqli_fetch_all($query, MYSQLI_ASSOC);
    }
}


