<?php

/**Получение массива с настройками*/
$config = array_merge(
   include 'app.php',
   include 'db.php'
);

define('ROOT', dirname(__DIR__));