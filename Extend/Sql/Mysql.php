<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/3
 * Time: 11:00
 */

namespace Extend\Sql;


class Mysql implements Model
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
        $link = mysql_connect('localhost', 'mysql_user', 'mysql_password');
        dd($link);exit;
        $db = mysql_connect($host, $user, $pwd);
        if (!$db) {
            die('Could not connect: ' . mysql_error());
        }

        //self::$conn = $db;
        // TODO: Implement connect() method.
    }

    function query($sql)
    {
        $db = self::$conn->query($sql);
        return $db->fetch_all();
    }

    function close()
    {
        self::$conn = null;
        // TODO: Implement close() method.
    }

}