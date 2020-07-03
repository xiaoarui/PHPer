<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/3
 * Time: 10:53
 */

namespace Extend\Sql;


class Mysqli implements Model
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
        $db = mysqli_connect($host, $user, $pwd, $dbname);
        self::$conn = $db;
        // TODO: Implement connect() method.
    }

    function query($sql)
    {
        $db = self::$conn->query($sql);
        return $db->fetch_all();
    }

    function close()
    {
        mysqli_close(self::$conn);
        // TODO: Implement close() method.
    }

}