<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/2
 * Time: 9:18
 */

namespace App\Object;

class Loader
{
    /**自动载入
     * @param $class
     */
    static function autoLoader($class)
    {
        require BASE_DIR . '/' . str_replace('\\', '/', $class). '.php';
    }
}