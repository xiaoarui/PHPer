<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/2
 * Time: 11:11
 */

namespace Extend\Sql\Pdo;


class Connet
{
    private static $instance;
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pwd;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;

    }

    private function __construct()
    {
        $arr = require BASE_DIR . '/Config/data.php';
        $this->host = $arr['host'];
        $this->port = $arr['port'];
        $this->dbname = $arr['dbname'];
        $this->user = $arr['user'];
        $this->pwd = $arr['password'];

        $this->connect();
    }

    private function connect()
    {
        $dsn = 'mysql:host=' . $this->host . ';' . 'dbname=' . $this->dbname;
        $db = new \PDO($dsn, $this->user, $this->pwd);
        //dd($db->prepare('select * from ecs_users'));
        return $db;
    }
}