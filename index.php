<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/7/1
 * Time: 16:08
 */
require __DIR__. '/app/Controller/Admin/Index.php';
require __DIR__. '/app/Controller/Home/Index.php';

$res = new \App\Controller\Home\Index();
$res1 = new \App\Controller\Admin\Index();


print_r($res::test());
