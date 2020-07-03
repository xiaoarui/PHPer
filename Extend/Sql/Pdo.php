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
    private $conn;
    public function __construct()
    {
        $arr = require BASE_DIR . '/Config/data.php';
        $this->connect($arr['host'], $arr['dbname'], $arr['user'], $arr['password']);
    }

    function connect($host, $dbname, $user, $pwd)
    {

        $dsn = 'mysql:host=' . $host . ';' . 'dbname=' . $dbname;
        $db = new \PDO($dsn, $user, $pwd);
        $this->conn = $db;
        // TODO: Implement connect() method.
    }

    function query($sql)
    {
        $db = $this->conn->prepare($sql);
        $db->execute();
        return $db->fetchAll();
    }

    function close()
    {
        $this->conn = null;
        // TODO: Implement close() method.
    }
}