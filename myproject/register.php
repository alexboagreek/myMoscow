
<?php 

// include_once
//require_once // подключение файла единожды к БД



// логика 
require_once($_SERVER['DOCUMENT_ROOT'] . 'config/db_config.php');

//данных формы проверка 
// запрос в добавления данных в БД

//$query = "INSERT INTO `orders`(`name`, `phone`, `email`, `text`, `created_at`) 
     //VALUES ('{$_POST['name']}', '{$_POST['phone']}', '{$_POST['email']}', '{$_POST['text']}', CURRENT_TIMESTAMP());";

//$result = mysqli_query($link,$query);
// добавляем строку в БД в таблицу users


$query = "
    INSERT INTO `users` ( `user_name`, `user_phone`, `user_email`) 
    VALUES ('{$_POST['name']}', '{$_POST['phone']}', '{$_POST['email']}');
";
$result = mysqli_query($link,$query);
 //// получеам ID полльзователя

 $userID = mysqli_insert_id($link);
//// добавляем строку  в таблицу question


$query  = "
    INSERT INTO `questions` ( `user_id`, `question`) 
    VALUES ('$userID', '{$_POST['text']}');
";
$resultInsertQuestion = mysqli_query($link, $query)

$info = '';

if ($result && $resultInsertQuestion){
    $info = 'Отлично! Запрос отправлен';
}else {
    $info = 'Что то пошло нетак!!!!Попробуй еще раз';

}

print_r($result);

/// страница вывода
  
include($_SERVER['DOCUMENT_ROOT'].'inc/head.php'); //подключение хедера
include($_SERVER['DOCUMENT_ROOT'].'inc/top.php');  /// подключение основной части 

echo "
<main class = 'content-position'>
    $info
</main>"; 


// конструкция ловли ошибок обрабока исключений
try {

}catch (){
}

    if (!$link){
        echo 'Что то пошло не так';  /// убивание скрипта
        die();
    }


include($_SERVER['DOCUMENT_ROOT'].'inc/footer.php'); //подключение футтера
?>