<!--<?php

// создаем подключение к БД

//const DB_HOST = 'localhost';
//const DB_USER = 'root';
//const DB_PASS = '';
//const DB_NAME = 'myproject';

//$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS, DB_NAME);

//mysqli_close($link);

//?>-->

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <title>Главная страница проекта MyMoscow</title>
    </head>
    <body>

        <div class="top">
            <div class ="wrapper">
                <div class="header">
                    <div class="header-in">
                        <div class="header-logo">
                            <a href="#" class="logo-link"><img class = "logo-img" src="1/icons/spasskaya-tower.png" alt="">
                            <a href="#" class="logo-link"><img class = "logo-img" src="1/icons/MyMoscow.png" alt="">
                        </div>
                        <nav class ="nav">
                            <a href="index.php" class="nav-link">Главная</a>
                            <a href="pages/tours.php" class="nav-link">Наши услуги</a>
                            <a href="#" class="nav-link">О компании</a> 
                            <a href="pages/contacts.php" class="nav-link">Контакты</a>
                            <a href="#" class="nav-link">Отзывы</a>
                        </nav>
                        <!--<div class="burger">
                            <a href="#" class = "menu-btn">
                                <span></span>
                            </a>
                        </div>
                        -->
                    </div>
                                 
                    <div class="intro">
                        <h1 class="h-intro">Необычная Москва</h1>
                        <p class="p-intro">MyMoscow - агенство интересных маршрутов</p>
                        <div class="connect">
                            <p class="p-con">ПОДРОБНЕЕ О НАС<p>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="slider">
                <div class ="slider-line">
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                    <div class="slider-line-item"></div>
                </div>
                <div class ="slider-right-button">></div>
                <div class ="slider-left-button"><</div>
            </div>
            
        </div>
        <section class="wrapper">
            <div class="promo">
                <h2 class ="text">что мы предлагаем?</h2>
                <p class="word">Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!</p>
            </div>
            <div class="blocks">
                <section class="blocks-item">
                    <div class ="block-flex">
                        <div class ="logo-flex">
                        </div>
                    </div>
                    <div class ="block-flex">
                        <h2 class ="font">Необычные маршруты</h2>
                        <p class="font-item">Мы обязательно порадуем тебя необычными маршрутами Москвы, которые прокладывают наши опытные гиды.Ты увидишь и узнанешь о Москве то, что никогда не знал!</p>
                    </div> 
                </section>
                <section class="blocks-item">
                    <div class="block-flex">
                        <div class ="logo2-flex"></div>
                    </div>
                    <div class="block-flex">
                        <h2 class="font">Классные сувениры</h2>
                        <p class="font-item">Отличная новость! У нас появился магазин сувениров!И самое примечательное, что все эти сувениры мы делаем сами!Заходи к нам в гости! </p>
                    </div>  
                </section>
                <section class="blocks-item">
                    <div class="block-flex">
                        <div class ="logo3-flex"></div>
                    </div>
                    <div class="block-flex">
                        <h2 class ="font">Интересные экскурсии</h2>
                        <p class="font-item">За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь все основные достопримечательности: Кремль, Храм Христа Спасителя, так и пройдешься по пешеходным улицам Москвы, узнаешь их историю и сделаешь самые классные фотографии.</p>
                    </div>
                </section>
                <section class="blocks-item">
                    <div class ="block-flex">
                        <div class ="logo4-flex">
                        </div>
                    </div>
                    <div class="block-flex">
                        <h2 class ="font">Фотосессии в Москве</h2>
                        <p class="font-item" >Команда MyMoscow рада провести креативные фотосессии в любом уголке Москвы. Неважно, свадьба и Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.</p>
                    </div>
                </section>
                <section class="blocks-item">
                    <div class ="block-flex">
                        <div class ="logo5-flex">
                        </div>
                    </div>
                    <div class ="block-flex">
                        <h2 class ="font">Новые знакомства</h2>
                        <p class="font-item" >MyMoscow - это целый клуб, где после московских прогулок ты сможешь продолжить общение с теми, кому интересна Москва, знакомиться с новыми людьми и делиться впечатлениями.</p>
                    </div>
                </section>
                <section class="blocks-item">
                    <div class ="block-flex">
                        <div class ="logo6-flex">
                        </div>
                    </div>
                    <div class="block-flex">
                        <h2 class ="font">Яркие впечатления</h2>
                        <p class="font-item" >Самое важное - это яркие эмоции,которые остануться с тобой на долгое время!Поэтому в нашей команде мы ждем именно тебя!></p>
                    </div>
                </section>
            </div>
        </section>
        <section id="about">
            <div class ="company new company-main-block">
                <div class="info-item"></div>
                <div class="company-description">
                    
                    <h2 class ="section-heading company-heading">КТО МЫ ТАКИЕ</h2>
                    <p class = "company-text">Мы - команда тех, кто любит историю и любит Москву.</p>

                    <p class = "company-text">
                        Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», а еще и бесконечно красивые памятники природы,
                        заказники, парки, заповедники. Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса 
                        куда-нибудь в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными 
                        коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.
                    </p> 
                    <p class="company-text">
                        Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для себя все красоты 100% бездорожья турист,
                        проводящий свой активный отдых в Подмосковье.
                    </p>
                    <a href="#" class="company-button">ПОДРОБНЕЕ О НАС</a> 
                </div>
            </div>
        </section>
        <section> <!-- Секция Москва в фото -->
            <div class="middle">
                <h3 class ="middle-h">МОСКВА В ФОТОГРАФИЯХ</h3>
                <div class="middle-stick"></div>
                <p class="sub-text">Проще всего рассказать обо всем в фотографиях.Смотрите наши фотоотчеты и присылайте свои фотографии</p>
            </div>
            <div class = "moscow-photos">
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
                <div class="moscow-photo"></div>
            <div>
        </section>
        <section> <!--Секция Отзывы-->
            <div class="reviews wrapper">
                <div class = "middle wrapper">
                    <h3 class="middle-h">ОТЗЫВЫ</h3>
                    <div class ="middle-stick"></div>
                </div>
                <div class = "rev">
                    <div class = "rev-item">
                        <p class = "rev-text">  
                            Были с дочкой и подругой на ночной экскурсии. Все таки как много зависит от экскурсовода! Мы все четыре часа ходили
                            за Станиславом Симоновым, как кролики. Боялись пропустить хоть одно слово. При этом моей дочке - которая побывала 
                            во многих местах и с детства искушенная на интересные события - была сильно увлечена.
                        </p>
                        <div class ="review-info">
                            <img class = "review-photo" src = '1/testimonials/test2.jpg' alt ="">
                            <p class = "review-name">Екатерина Васильева</p>
                        </div>
                    </div> 
                
                    <div class = "rev-item">
                        <p class ="rev-text">
                            Ездили на экскурсию с семиклассниками и родителями. Всем очень понравилось! 
                            Экскурсовод Михаил Борисович очень интересно, необычно и с юмором рассказывал о Москве 16 века. 
                            Гибко подстраивал эксукурсию под интересы и потребности слушателей, ловко «управлял» подачей автобуса, не давая нам замёрзнуть.) Огромное спасибо!
                        </p>
                        <div class ="review-info">
                            <img class = "review-photo" src = '1/testimonials/test1.jpg' alt =""> 
                            <p class ="review-name">Анна Крушевская</p>
                        </div>
                    </div>
                </div>
                <div class="slides wrapper">
                    <input type="radio" name="r" id="r1"checked>
                    <input type="radio" name="r" id="r2">
                    <input type="radio" name="r" id="r3">
                    <input type="radio" name="r" id="r4">
                </div>
            </div>
        </section>
        <section> <!-- секция формы обратной связи-->
            <div class="form-title">
                <h3 class="middle-h">НАПИШИТЕ НАМ</h3>
                <div class ="middle-stick"></div>
            </div>
            <form method="GET" action="form.php" autocomplete="off">
                <div class = "position wrapper">
                    <div>
                        <div class="form-item">
                            <input type="text" name="userName" minlength="10" maxlength="12" placeholder="ФИО" required>
                        </div>
                        <div class="form-item">
                            <input type="email" placeholder="E-mail" > 
                        </div>
                        <div class="form-item">
                            <input type="number" placeholder="Телефон">
                        </div>
                        <div class="form-item">
                            <input type="submit" value="отправить вопрос">
                        </div>
                    </div>
                    <div>
                        <div class ="form-item">
                            <textarea name="text" placeholder="Ваше сообщение"></textarea>
                        </div>
                    </div>
                </div>
            </form> 
        </section>
        
        <footer class ="footer">
            
            <div class = "footer wrapper">
                <div class = "footer-section">
                    <div class = "header-logo">
                        <a href ="#" class = "logo-link"><img class ="logo-image logo-image-footer logo-img" src="1/icons/spasskaya-tower.png" alt=""></a>
                        <a href ="#" class = "logo-link"><img class = "logo-title logo-title-footer logo-img"src ="1/icons/MyMoscow.png" alt=""></a>
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
                            <img class = "contacts-icon" src="1/icons/placeholder.png" alt="">
                            <p class = "contacts-text">Москва, Большая Спасская 12</p>
                        </div>
                        <div class = "contacts-item">
                            <img class = "contacts-icon" src="1/icons/mail.png" alt="">
                            <p class = "contacts-text">moscow@Imoscow.ru</p>
                        </div>
                        <div class = "contacts-item">
                            <img class = "contacts-icon" src="1/icons/telephone.png" alt="">
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
        <section>  <!-- секция мини фуутера-->
            <div class ="copyright-footer">
                <div class = "copyright-footer-item">
                    <p>© 2020 Copyright. Все права защищены</p>
                </div>
                <div class ="copyright-footer-item">
                    <p>Designed by Nordic IT School</p>
                </div>
                <div class ="copyright-footer-item">
                    <img class="size" src="1/social/instagram.png" alt="">
                    <img class="size" src="1/social/facebook.png" alt="">
                    <img class="size" src="1/social/vk.png" alt="">
                </div>
            </div>
        <section>    
        <script src='jquery-3.5.1.min.js'></script>
        <script src='script.js'></script>
        <script src='burger.js'></script>
        <script src='snow.js'></script>
    </body>
</html>