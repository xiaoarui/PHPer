<?php

namespace Extend\Sql;


interface Model
{

    function connect($host, $dbname, $user, $pwd);

    function query($sql);

    function close();
}
