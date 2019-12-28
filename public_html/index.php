<?php

require '../config/main.php'; //подключение файла

include '../engine/database.php'; //подключаем файл


   $user = getItem('select * from `users`'); //делаем запрос на возврат одной строки
   ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Страница пользователя</h1>
<ul>
    <?php foreach ($user as $key => $value) :?>
    <li><?= $key ?> : <?= $value ?></li>
    <?php endforeach;?>
</ul>
</body>
</html>


<?php



/*  $connection = mysqli_connect(
    '127.0.0.1',
    'root',
    'root',
    'geek_project'
);*/




//var_dump($connection);

/*$sql = "select * from `users`";

$result = mysqli_query($connection, $sql);

//var_dump($result);

$users = [];
while ($row = mysqli_fetch_row($result)) {
    $users[] = $row;

}

var_dump($users);*/

?>