<?php

require_once($_SERVER['DOCUMENT_ROOT'] . 'config/db_config.php');


// проверяем на пустоту массив GET
// && AND
// || OR
// '{$_GET['search']}'
if (!empty($_GET)) {
    // $query = "
    //     SELECT *  
    //     FROM `users` 
    //     WHERE `user_name` 
    //     LIKE '%{$_GET['search']}%'
    //     OR `user_email`
    //     LIKE '%{$_GET['search']}%'
    //     OR `user_phone`
    //     LIKE '%{$_GET['search']}%'
    // ";
    // LEFT
    // RIGHT 
    // INNER JOIN

    $query = "SELECT    `users`.`user_name` AS `userName`,
                        `users`.`user_email` AS `userEmail`,
                        `users`.`id` AS `userID`,
                        `users`.`user_phone` AS `userPhone`,
                        `users`.`created_at` AS `userCreated`,
                        `questions`.*
                FROM    `users`
                RIGHT JOIN `questions`
                ON      `users`.`id` = `questions`.`user_id`
                WHERE   `user_name` LIKE    '%{$_GET['search']}%'
                OR      `user_email`LIKE    '%{$_GET['search']}%'
                OR      `user_phone` LIKE '%{$_GET['search']}%'    
            ";

    $result = mysqli_query($link, $query);
    
    print_r($result);
}



// страница вывода
include_once($_SERVER['DOCUMENT_ROOT'] . 'inc/head.php');
include_once($_SERVER['DOCUMENT_ROOT'] . 'inc/top.php');

?>




<main class='content-position padding40'>
    <h1>Поиск по клиентам</h1>
    <form action="userSearch.php" method="GET">
        <input type="text" name="search">
        <input type="submit" value="найти">
    </form>
    <?php if(!empty($_GET)): ?>
    <h2>Результаты поиска</h2>
    <div class="result">
        <div class="result-row">
            <div class="result-row-item">№</div>
            <div class="result-row-item">ФИО</div>
            <div class="result-row-item">Телефон</div>
            <div class="result-row-item">E-mail</div>
            <div class="result-row-item">Дата регистрации</div>
            <div class="result-row-item">Сообщение</div>
        </div>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="result-row">
            <div class="result-row-item"><?=$row['userID']?></div>
            <div class="result-row-item"><?=$row['userName']?></div>
            <div class="result-row-item"><?=$row['userPhone']?></div>
            <div class="result-row-item"><?=$row['userEmail']?></div>
            <div class="result-row-item"><?=$row['userCreated']?></div>
            <div class="result-row-item"><?=$row['question']?></div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>
</main>


<?php
include_once($_SERVER['DOCUMENT_ROOT'] . 'inc/footer.php');
include_once($_SERVER['DOCUMENT_ROOT'] . 'inc/scripts.php');
?>