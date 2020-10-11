<?php 

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'myproject';

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

mysqli_set_charset($link, 'utf8');

?>
