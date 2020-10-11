<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style.css">
        <title>Страница контактов myMoscow contacts</title>
    </head>
    <body>
        <div class="top">
            <div class ="">
                <div class="header img_style">
                    <div class="header-in wrapper">
                        <div class="header-logo">
                            <a href="#" class="logo-link"><img class = "logo-img" src="../1/icons/spasskaya-tower.png" alt="">
                            <a href="#" class="logo-link"><img class = "logo-img" src="../1/icons/MyMoscow.png" alt="">
                        </div>
                        <nav class ="nav">
                            <a href="../index.php" class="nav-link">Главная</a>
                            <a href="tours.php" class="nav-link">Наши услуги</a>
                            <a href="#" class="nav-link">О компании</a> 
                            <a href="contacts.php" class="nav-link">Контакты</a>
                            <a href="#" class="nav-link">Отзывы</a>
                        </nav>
                    </div>
                                  
                    <div class="intro">
                        <h1 class="h-intro">Необычная Москва</h1>
                        <p class="p-intro">MyMoscow - агенство интересных маршрутов</p>
                        <div class="">
                            <p class="connect-item">-КОНТАКТЫ-<p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section> <!-- Секция описания контактов --> 
            <div class ="tours wrapper">
                <h3 class="middle-h">КОНТАКТЫ</h3>
                <div class ="text-item">
                    <div>
                        <p>Мы - команда тех, кто любит историю и любит Москву.<p>
                    </div>
                    <div>
                        <p>
                            Москва – это не только место по «заколачиванию денег» и «взращиванию карьеры», 
                            а еще и бесконечно красивые памятники природы, заказники, парки, заповедники.
                            Активный отдых в Москве и Подмосковье – это отличная возможность вырваться из душного мегаполиса куда-нибудь 
                            в «дебри», навстречу приключениям. К счастью, не все Подмосковье еще «облагорожено» асфальтными дорожками и высоченными коттеджными заборами. Еще встречаются места, настолько глухие и далекие, что, очутившись там, кажется, что ты – первый человек, ступивший на эту землю.</p>
                        </p>
                    <div>
                
                    <div>
                        <p>
                            Там, где не проедет автомобилист и даже велосипедист, найдет лазейку и откроет для 
                            себя все красоты 100% бездорожья турист, проводящий свой активный отдых в Подмосковье.
                        </p>
                    <div>
                </div>
            </div>
        </section>
        <section> <!-- секция контактов с начальством -->
            <div class ="boss wrapper">
                <div class =" wrapper boss boss-item">
                    <div class ="boss-photo-left"></div>
                    <div class ="boss-text">
                        <div>
                            <p class = "name-boss">Александр Рыбаков</p>
                            <p class = "jobber">директор</p>
                        </div>
                        <div>
                            <p class= "boss-spy">По всем вопросам пишите на почту</p>
                            <a class = "link-boss" href="#">rubakov@mymoscow.ru</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class ="boss boss-item">
                        <div class ="boss-photo-right"></div>
                        <div class ="boss-text">
                            <p class = "name-boss">Елена Белкина</p>
                            <p class = "jobber">руководитель корпоративного отдела</p>
                            <p class ="boss-spy">По вопросам корпоративных экскурсий</p>
                            <a class ="link-boss" href="#">belkina@mymoscow.ru</a>
                        </div>
                    </div>
                </div>
            </div>   
        </section>
        <section>
            <div class = "container wrapper">
                <div class ="boss">
                    <div class ="">
                        <div class="contacts-item">
                            <img class ="logo-img" src ="../1/icons/placeholder.png"><p class ="logo-link" href="">Москва, <br>Большая Спасская 12</br></p>
                        </div>
                        <div class ="contacts-item">
                            <img class ="logo-img" src ="../1/icons/mail.png"><p class ="logo-link" href="#">E-mail:<br>info@mymoscow.ru</br></p>
                        </div>
                        <div class ="contacts-item">
                            <img class ="logo-img" src ="../1/icons/telephone.png"><p class ="logo-link">Телефон:<br>+7(495) 626-46-00</br></p>
                        </div>
                    </div>
                </div>
        
                <div class ="form">
                    <form method="GET" action="form.php" autocomplete="off">
                        <p class = "form-text">Напишите нам:</p>
                        <div class="form-item">
                            <input type="text" name="userName" placeholder="ФИО" required>
                        </div>
                        <div class="form-item">
                            <input type="email" placeholder="Email" > 
                        </div>
                        <div class="form-item">
                            <textarea type="text" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <div class="form-item color-sub">
                            <input type="submit" value="отправить">
                        </div>
                    </form>
                </div>
            </div>
        </section>
       <section><!-- подключение карты ЯНДЕСК-->
            <!DOCTYPE html>
                <html xmlns="http://www.w3.org/1999/xhtml">
                    <head>
                        <title>ЯНДЕКС КАРТА</title>
                        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                        <script src="https://api-maps.yandex.ru/2.1/?apikey=e04df92a-3d1a-4c41-b830-d3aa7ccb0db8&lang=ru_RU" type="text/javascript">
                        </script>
                        <script type="text/javascript">
                            ymaps.ready(init); // запуск функции 
                            function init(){
                                let myMap = new ymaps.Map("map", {
                                    center: [55.7761, 37.6481],
                                    zoom: 15,
                                    controls: ['zoomControl'],
                                    behaviors: ['drag']
                                });

                                // Создание метки 
                                let myPlacemark = new ymaps.Placemark(
                                    [55.7761, 37.6481],{
                                    hintContent: '<div class = "map_hint">ул. Большая Спасская 12</div>',
                                    balloonContent: [
                                        '<div class = "map_balloon">',
                                        '<img class = "nordic_logo" src = "../img/nordic.png" alt = "Логотип IT"/>',
                                        'Самые мощные курсы по WEB-разработке',
                                        '</div>'
                                    ].join('')
                                });

                                // Добавление метки на карту
                                myMap.geoObjects.add(myPlacemark);   
                            }  
                    
                        </script>
                    </head>
                
                    <body>
                        <div class = "" id="map" style="max-width: 1600px; min-height: 300px"></div>
                    </body>
                </htmi>
            </html>
        </section>

        <footer class="footer">
            
            <div class = "wrapper footer">
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
                            <p class = "contacts-text">Москва,Большая Спасская 12</p>
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
            <div class = "wrapper copyright-footer-item">
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