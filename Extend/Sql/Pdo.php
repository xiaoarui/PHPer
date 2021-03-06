<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/2
 * Time: 11:03
 */

namespace Extend\Sql;

class Pdo implements Model
{
    private static $conn;
    public function __construct()
    {
        if(!self::$conn){
            $arr = require BASE_DIR . '/Config/data.php';
            $this->connect($arr['host'], $arr['dbname'], $arr['user'], $arr['password']);
        }

    }

    function connect($host, $dbname, $user, $pwd)
    {

        $dsn = 'mysql:host=' . $host . ';' . 'dbname=' . $dbname;
        $db = new \PDO($dsn, $user, $pwd);
        self::$conn = $db;
        // TODO: Implement connect() method.
    }

    function query($sql)
    {
        $db = self::$conn->prepare($sql);
        $db->execute();
        return $db->fetchAll();
    }

    function close()
    {
        self::$conn = null;
        // TODO: Implement close() method.
    }
}