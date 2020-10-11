<?php
// создаем подключение к БД

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'myproject';

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

$connect = new \Core\Connect();

$arr =[];

$result = mysqli_query($connect->getConnection(), "SELECT * FROM core_shops");
while ($info = mysqli_fetch_assoc($result)){
    //создали массив для каждого магаза
    $arr_item = [];
    $arr_item['title'] = $info['title'];
    $arr_item['latitude'] = $info['latitude'];
    $arr_item['longitude'] = $info['longitude'];

    $arr[] =  $arr_item;
}

echo json_encode($arr);

?>