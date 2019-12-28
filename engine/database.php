<?php
/** Файл с функциями для работы с базой данных */

/**Организуем подключение*/
$connection = mysqli_connect(
    $config['db']['host'],
    $config['db']['users'],
    $config['db']['password'],
    $config['db']['database']
);

/**Функция для возврата одной строки*/
function getItem(string $sql) {
    // получение одной строки
    global $connection;
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

}

/**Функция для возврата массива*/
function getItemArray(string $sql) {
    // получение нескольких строк или массива
    global $connection;
    $result = mysqli_query($connection, $sql);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

/**Функция для выполнения запроса*/
function execute(){
    // просто выполнение запроса
}