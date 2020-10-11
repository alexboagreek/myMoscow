<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASS = '';
const DB_NAME = 'myproject';

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

mysqli_close($link);

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Cтраница заказов myMoscow tours</title>
    </head>
    <body>
        <div class ="">
                <div class="header back">
                    <div class="header-in wrapper">
                        <div class="header-logo">
                            <a href="#" class="logo-link"><img class = "logo-img" src="../1/icons/spasskaya-tower.png" alt="">
                            <a href="#" class="logo-link"><img class = "logo-img" src="../1/icons/MyMoscow.png" alt="">
                        </div>
                        <div class ="nav">
                            <a href="../index.php" class="nav-link">Главная</a>
                            <a href="../tours.php" class="nav-link">Наши услуги</a>
                            <a href="#" class="nav-link">О компании</a> 
                            <a href="contacts.php" class="nav-link">Контакты</a>
                            <a href="#" class="nav-link">Отзывы</a>
                        </div>
                    </div>
                                 
                    <div class="intro">
                        <h1 class="h-intro">Необычная Москва</h1>
                        <p class="p-intro">MyMoscow - агенство интересных маршрутов</p>
                        <p class = "connect-item">-ТУРЫ-</p>
                    </div>
                </div>
            </div>
            <section> <!-- секция 1-->
                <div class ="promo">
                    <h2 class="middle-h">ВЫБЕРИТЕ ТУР</h2>
                </div>
                <div class ="boss company new company-main-block">
                    <div class="tours-item"></div>
                    <div class="company-description">
                    
                        <h3 class = "margin-top section-heading company-heading">Экскурсия-квест в комплексе Москва-сити</h3>
                    
                        <p class = "company-text">
                            Сначала вам предложат погулять по “острову из стекла и бетона”, 
                            полюбоваться на стеклянные здания снизу, узнать историю комплекса и особенности каждой из башен. Затем на лифте, который движется со скоростью 7м/с,
                            вы попадёте на смотровую площадку на высоту 230 метров. В Москве ей нет аналогов. 
                            С такой высоты как на ладони видны объекты Москва-Сити на самых разных этапах строительства.
                            Воспользовавшись этой ситуацией экскурсовод расскажет о том, из чего состоит небоскреб,
                            как обеспечивается его устойчивость, безопасность. 
                            Вопросы: как поднимается бетон, какой длины сваи, и как доставляется вода на высоту более 300 метров,
                            также не останутся без ответа.
                        </p>
                        <p class = "company-text">
                            Затем неожиданно поступит сообщение о том, что где-то в Москва-Сити заложено взрывное устройство.
                            На поиски источника опасности будут направлены экскурсанты, которые уже прекрасно знают комплекс
                            и должны справиться с этой нелегкой задачей.
                        </p>
                    
                        <p class = "company-text">2 ЧАСА - 2300 РУБ.</p>
                        <div class ="bottun-info">
                            <a href="#" class="company-button">ЗАБРОНИРОВАТЬ</a>
                        </div>
                    </div>
                </div>
            </section>
            <section> <!-- секция 2-->
                <div class ="boss company new company-main-block ">
                    <div class ="company-description">
        
                        <h3 class = "section-heading company-heading">Легенды Сталинских высоток</h3>
                            <p class = "company-text">
                                Семь сталинских высоток — это визитная карточка Москвы, 
                                одни из самых красивых и уникальных зданий Европы. Но говорят, 
                                что целью авторов проекта во главе с самим Сталиным было не только 
                                продемонстрировать миру силу и могущество Советской державы, но и заложить 
                                в архитектуру столицы некую сакральную идею — пояс астероидов или восьмиконечную 
                                масонскую звезду. Центром её стал бы легендарный Дворец Советов, построенный на месте Старого
                                Храма Христа. Фундаменты всех девяти высоток заложены в один день. Почти все они строились 
                                вдоль Садового кольца, как бы обрамляя исторический центр столицы. В 1950 г. Сталин отдал 
                                приказ — каждую из башен должен венчать шпиль со звездой. И эти шпили, как и сами звезды, 
                                тоже имели свой магический смысл.  
                            </p>
                        <div class ="bottun-info">
                            <p class = "company-text">3 ЧАСА - 2900 РУБ.</p>
                            <a href="#" class="company-button">ЗАБРОНИРОВАТЬ</a>
                        </div>
                        
                    </div>
                    <div class="section2"></div> 
                </div>
            </section>
            <section><!-- секция 3-->
                <div class ="boss company new company-main-block ">
                    
                <div class="tours-item3"></div>
                <div class ="company-description">
                        
                    <h3 class = "section-heading company-heading">По следам Мастера и Маргариты</h3>
                    <p class = "company-text"> 
                        "Однажды весною, в час небывало жаркого заката, в Москве, на Патриарших прудах... ". 
                        Так начинается один из самых значительных и известных романов XX века. Москва является
                        в нём одним из действующих героев, ведь Воланд прибывает не только ради изучения "недавно 
                        найденных рукописей чернокнижника в государственной библиотеке", но и чтобы посмотреть, как
                        изменился город. Мы увидим большинство мест, в которых происходят описанные в романе события: 
                        от "Нехорошей квартиры" (Большая Садовая, 302-бис, пятый этаж, кв. № 50), где жил сам М.А.Булгаков
                        и куда он "поселил" Воланда со свитой через Патриаршие пруды и один из возможных особняков Маргариты
                        мы пройдём к Моссолиту — литературному институту им. М.Горького и пройдёмся по переулку, где Мастер 
                        встретился с Маргаритой, а сам Михаил Афанасьевич со своей женой. Возможен вариант 4-5 часовой экскурсии,
                        где мы также проследим за полётом Маргариты на метле, узнаем о том, как Н.В.Гоголь "укрыл своей чугунной
                        шинелью" М.А.Булгакова и закончим маршрут у подвала Мастера.   
                    </p>

                    <p class = "company-text">2 ЧАСА - 2300 РУБ.</p>
                    
                    <div class ="bottun-info">
                        <a href="#" class="company-button">ЗАБРОНИРОВАТЬ</a>
                    </div>
                </div>
            </section>
            <section> <!-- секция 4 -->
                <div class ="boss company new company-main-block">
                    <div class ="company-description">
                        
                        <h3 class = "section-heading company-heading">Экскурсия-квест в комплексе Москва-сити</h3>
                        <p class = "company-text">
                            Сначала вам предложат погулять по “острову из стекла и бетона”, полюбоваться
                            на стеклянные здания снизу, узнать историю комплекса и особенности каждой из башен.
                            Затем на лифте, который движется со скоростью 7м/с, вы попадёте на смотровую площадку
                            на высоту 230 метров. В Москве ей нет аналогов. С такой высоты как на ладони видны объекты
                            Москва-Сити на самых разных этапах строительства. Воспользовавшись этой ситуацией экскурсовод расскажет о том,
                            из чего состоит небоскреб, как обеспечивается его устойчивость, безопасность. Вопросы: как поднимается бетон, 
                            какой длины сваи, и как доставляется вода на высоту более 300 метров, также не останутся без ответа.

                            Затем неожиданно поступит сообщение о том, что где-то в Москва-Сити заложено взрывное устройство. 
                            На поиски источника опасности будут направлены экскурсанты, которые уже прекрасно знают комплекс 
                            и должны справиться с этой нелегкой задачей. 
                        </p>
                        <p class = "company-text">1,5 ЧАСА - 1900 РУБ.</p>
                        
                        <div class ="bottun-info">
                            <a href="#" class="company-button">ЗАБРОНИРОВАТЬ</a>
                        </div>
                        
                    </div>
                
                    <div class = "img-tours"></div>
                </div>
            </section>
        </div>

        <footer class="footer footer-margin">
            
            <div class = " footer wrapper">
                <div class = "footer-section">
                    <div class = "header-logo">
                        <a href ="#" class = "logo-link"><img class ="logo-image logo-image-footer logo-img" src="../1/icons/spasskaya-tower.png" alt=""></a>
                        <a href ="#" class = "logo-link"><img class = "logo-title logo-title-footer logo-img"src ="../1/icons/MyMoscow.png" alt=""></a>
                    </div>   
                    <p class= "footer-section-text">
                        Мы приглашаем тебя на самые разные разные экскурсии по Москве.
                        Автобусные и пешеходные, на целый день или на несколько часов, 
                        на свежем воздухе или с заходом в здания - у нас в ассортименте более 20 авторских экскурсий по Москве, выбирай и узнавай Москву вместе с нами!
                    </p>
                </div>
                <div class ="footer-section">
                    <h4 class = "">Контакты</h4>
                    <div class = "contacts">
                        <div class = "contacts-item">
                            <img class = "contacts-icon" src="../1/icons/placeholder.png" alt="">
                            <p class = "contacts-text">Москва, Большая Спасская 12</p>
                        </div>
                        <div class = "contacts-item">
                            <img class = "contacts-icon" src="../1/icons/mail.png" alt="">
                            <p class = "contacts-text">moscow@Imoscow.ru</p>
                        </div>
                        <div class = "contacts-item">
                            <img class = "contacts-icon" src="../1/icons/telephone.png" alt="">
                            <p class = "contacts-text">8(495) 626-46-00</p>
                        </div>
                    </div>
                </div>
                <div class ="footer-section">
                    <h4 class = "">Последние новости</h4>
                    <div class = "news">
                        <div class = "news-item">
                            <p class = "footer-section-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Eius facere, aliquid et laboriosam consequatur voluptatibus harum.
                                Quam aliquam hic, nesciunt possimus facere in. Blanditiis dolor explicabo commodi, ex eveniet voluptate!
                            </p>
                            <p class  ="news-date">08.07.2020</p>
                        </div>
                        <div class = "news-item">
                            <p class ="footer-section-text">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Facere est alias totam laudantium officiis suscipit deleniti! 
                                Saepe a quas soluta facilis fugiat quam amet voluptas dolores culpa voluptatem? Quas, nisi.
                            </p>
                            <p class ="news-date">07.09.2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>   
        <div class ="copyright-footer">
            <div class = "copyright-footer-item">
                <p>© 2020 Copyright. Все права защищены</p>
            </div>
            <div class ="copyright-footer-item">
                <p>Designed by Nordic IT School</p>
            </div>
            <div class ="copyright-footer-item">
                <img class="size" src="../1/social/instagram.png" alt="">
                <img class="size" src="../1/social/facebook.png" alt="">
                <img class="size" src="../1/social/vk.png" alt="">
            </div>
        </div>   
        <script src='jquery-3.5.1.min.js'></script>
        <script src='slider.js'></script>
    </body>
</html>