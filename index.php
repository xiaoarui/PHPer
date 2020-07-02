<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/1
 * Time: 16:08
 */

define('BASE_DIR', __DIR__);

include BASE_DIR . '/app/Helper/Common.php';
include BASE_DIR . '/app/Object/Loader.php';
spl_autoload_register("\\App\\Object\\Loader::autoLoader");


\App\Controller\Home\Index::test();
//\App\Object\Database::getInstance();

//$ress = require BASE_DIR.'/Config/data.php';





