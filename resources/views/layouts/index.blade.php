<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Продажа строительных лесов в Украине, Доставка по всей Украине, от 100грн./м2,  +38(093) 468 87 19, +38(068) 247 22 65">
    <meta name="keywords" content="Продажа строительных лесов">

    <title>Продажа строительных лесов в Украине | Biglesa</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">

        
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!-- //============== HEADER ==============// -->
<header id="header">
    <div class="header_top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand logo" href="{{route('home')}}">
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive_header">
                    <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="responsive_header">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('home')}}" class="justscroll">Главная</a></li>
                    <li><a href="{{route('lesa')}}" class="justscroll">Строительные леса</a></li>
                    <li><a href="{{route('tower')}}" class="justscroll">Вышки туры</a></li>
                    <li><a href="{{route('news')}}" class="justscroll">Новости</a></li>
                    <li><a href="#footer" class="justscroll">Доставка и оплата</a></li>
                    <li><a href="#contacts" class="justscroll">Контакты</a></li>
                </ul>  
            </div>
        </div>
    </div>
    <div class="main_header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1>Продажа строительных лесов от производителя</h1>
                </div>
                <div class="col-md-5">
                    <div class="phone">+38(093) 468 87 19</div>
                    <div class="phone">+38(068) 247 22 65</div>
                    <div class="ring">Звоните круглосуточно!</div>
                    <a href="#" class="button" id="go">Заказать бесплатный звонок</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="info">
                        <img src="{{asset('assets/images/stroitelnye-lesa.png')}}" alt="Строительные леса">
                        <div class="info_text">
                            <ul>
                                <li>Максимальная высота лесов: <span class="number">40м</span></li>
                                <li>Шаг яруса: <span class="number">2м</span></li>
                                <li>Шаг рам вдоль стены: <span class="number">3м</span></li>
                                <li>Ширина яруса (прохода): <span class="number">1м</span></li>
                                <li>Нормативная нагрузка на настил: <span class="number">200кг/м2</span></li>
                            </ul>
                            <div class="price">от 100 грн/м2</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <form class="form-1">
                        <h3>Оставьте заявку прямо сейчас!</h3>
                        <div class="minutes">всего за 5 минут!</div>
                        <input type="text" name="name" placeholder="Введите Ваше имя">
                        <input type="text" name="email" placeholder="Ваш телефон или E-mail">
                        <button class="form_button_1">Оставить заявку</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- //============= FOR SALE =============// -->
<section id="for_sale">
    <div class="container">
        <h2>Почему леса покупают именно у нас?</h2>
        <div class="row">
            <div class="for_sale_block_1">
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-1.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <p><span>Строительные леса и вышки туры от производителя по самой низкой цене в Украине</span></p>
                </div>
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-2.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <p><span>Склады находятся: г.Киев, г.Одесса, г.Харьков. Всегда в наличии более 30 000 М2 готовой продукции</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="for_sale_block_2">
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-3.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <p>Доставка в любой город Украины</p>
                </div>
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-4.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <p>Минимальные сроки поставки - от 1 суток!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="for_sale_block_3">
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-5.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <p>Оплата при получении. <br>
                    Наличный и безналичный расчет</p>
                </div>
                <div class="col-md-1">
                    <img src="{{asset('assets/images/icon-6.jpg')}}" alt="Иконка">
                </div>
                <div class="col-md-5">
                    <span><p>Вся продукция сертифицирована</p></span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //================ BEST ==============// -->
<section id="best">
    <div class="container">
        <h2>Чем наши строительные леса лучше</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('assets/images/best-1.png')}}" alt="Строительные леса">
                <div class="best_green_text">Мы даём лучшую цену в Украине, т.к являемся производителями</div>
            </div>
            <div class="col-md-4">
                <img src="{{asset('assets/images/best-2.png')}}" alt="Строительные леса">
                <div class="best_red_text">Для изготовления рам используем трубы диаметром 42мм!</div>
            </div>
            <div class="col-md-4">
                <img src="{{asset('assets/images/best-3.png')}}" alt="Покраска строительных лесов">
                <div class="best_green_text">Благодаря отличному качеству используемых материалов строительные леса прослужат долго</div>
            </div>
        </div>
        <div class="call">
            <h2>Рассчитаем стоимость и ответим на ваши вопросы</h2>
            <div class="phone">+38(093) 468 87 19</div>
            <div class="phone">+38(068) 247 22 65</div>
            <div class="ring">Звоните круглосуточно!</div>
        </div>
    </div>
</section>
<!-- //=========== CALCULATION ============// -->
<section id="calculation">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h2>Получите расчет стоимости комплекта строительный лесов</h2>
                <div class="row">
                    <form class="form-2">
                        <div class="col-sm-8 col-md-6 col-md-offset-2">
                            <div class="calculation_name">Длина лесов, м</div>
                            <div class="calculation_name">Высота лесов, м</div>
                            <div class="calculation_name">Количество ярусов с настилами</div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-2-1">
                                <div class="number">
                                    <i class="fa fa-minus-circle minus" aria-hidden="true"></i>
                                    <input type="text" name="long" value="0">
                                    <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
                                </div>
                                <div class="number">
                                    <i class="fa fa-minus-circle minus" aria-hidden="true"></i>
                                    <input type="text" name="height" value="0">
                                    <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
                                </div>
                                <div class="number">
                                    <i class="fa fa-minus-circle minus" aria-hidden="true"></i>
                                    <input type="text" name="amount" value="0">
                                    <i class="fa fa-plus-circle plus" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-2-2">
                            <div class="col-md-5 col-md-offset-1">
                                <input type="text" name="name" placeholder="Введите Ваше имя">
                            </div>
                            <div class="col-md-5">
                                <input type="text" name="email" placeholder="Ваш телефон или E-mail">
                            </div>
                            <button class="form_button_2">Получить расчет сейчас!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //============== OBJECT ==============// -->
<section id="object">
    <div class="container">
        <h2>Наши леса на объектах</h2>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-1.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">Одесская область</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-2.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Запорожье</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-3.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Суммы</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-4.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Днепропетровск</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-5.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Одесса</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-6.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Харьков</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-7.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Киев</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="object_image">
                    <img src="{{asset('assets/images/portfolio-8.jpg')}}" alt="Строительные леса на объектах">
                </div>
                <div class="city">г. Львов</div>
            </div>
        </div>
        <div class="info">и еще более 684 объектов по Украине</div>
    </div>
</section>
<!-- //=============== EMAIL ==============// -->
<section id="email">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Оставьте заявку сейчас и мы доставим леса <span>в течение 24 часов!</span></h2>
                <div class="call">Позвоните нам, чтобы получить подробную информацию:</div>
                <div class="phone">+38(093) 468 87 19</div>
                <div class="phone">+38(068) 247 22 65</div>
                <div class="ring">Звоните круглосуточно!</div>
                <a href="#" class="button" id="go">Заказать бесплатный звонок!</a>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <form class="form-3">
                    <h3>Получите расчёт стоимости комплекта лесов</h3>
                    <div class="minutes">всего за 5 минут!</div>
                    <input type="text" name="name" placeholder="Введите Ваше имя">
                    <input type="text" name="phone" placeholder="Ваш телефон">
                    <input type="text" name="email" placeholder="Ваш E-mail">
                    <button class="form_button_3">Оставить заявку сейчас!</button>
                </form>
            </div>
        </div>
        <div class="email">
            <i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i>
            Почта для заявок: 
            <a href="#">biglesa.com.ua@gmail.com</a>
        </div>
    </div>
</section>
<!-- //============== FOOTER ==============// -->
<footer id="footer">
    <div class="container">
        <div class="deliver">
            <h2>Доставка и оплата</h2>
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="method">Способы доставки:</div>
                    Самовывоз <br>
                    Доставка курьером <br>
                    Доставка почтой <br>
                    Транспортная компания <br>
                    Нова Пошта <br>
                    Почтоматы Приватбанка</div>
                <div class="col-sm-6 col-md-3">
                    <div class="method">Способы оплаты:</div>
                    Наличными <br>
                    Безналичный расчет <br>
                    Наложенный платеж
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="method">Регионы доставки:</div>
                    Николаевская область,
                    Одесская область,
                    Полтавская область,
                    Ровненская область,
                    Сумская область,
                    Тернопольская область,
                    Харьковская область,
                    Херсонская область,
                    Хмельницкая область,
                    Черкасская область,
                    Черниговская область,
                    Черновицкая область,
                    Крым,
                    Винницкая область,
                    Волынская область,
                    Днепропетровская область,
                    Донецкая область,
                    Донецк,
                    Мариуполь,
                    Макеевка,
                    Горловка,
                    Краматорск,
                    Славянск,
                    Бахмут,
                    Енакиево,
                    Константиновка,
                    Житомирская область,
                    Закарпатская область,
                    Запорожская область,
                    Ивано-Франковская область,
                    Киев,
                    Киевская область,
                    Кировоградская область,
                    Луганская область,
                    Львовская область
                </div>
            </div>
        </div>
        <div class="contacts" id="contacts">
            <h2>Контакты</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="city">Склад в г. Киев</div>
                    <div class="street">Украина, Киев, ул.Маршала Гречко 9б</div>
                    <div class="phone">+38(093)468-87-19<br>‎+38(068)247-22-65
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="city">Склад в г. Одесса</div>
                    <div class="street">Украина, Одесская область, Одессаул. Вильямса, 80а</div>
                    <div class="phone">+38(093)468-87-19</div>
                </div>
                <div class="col-sm-4">
                    <div class="city">Склад г. Харьков</div>
                    <div class="street">Украина, Харьковская область, Харьков, пр-т Московский 259</div>
                    <div class="phone">+38(068)247-22-65</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2538.3145042362885!2d30.4024705!3d50.4911041!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cd111aa6a765%3A0x6dfe8e8522f618f2!2zOUIsINCy0YPQu9C40YbRjyDQnNCw0YDRiNCw0LvQsCDQk9GA0LXRh9C60LAsIDnQkSwg0JrQuNGX0LI!5e0!3m2!1sru!2sua!4v1506416423823" width="100%" height="500" frameborder="0" style="border: 1px solid #431C0F" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- //=========== MODAL WINDOW ===========// -->
<form id="modal_form" class="form-main"> <!-- Сaмo oкнo --> 
    <span id="modal_close">
        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
    </span> <!-- Кнoпкa зaкрыть --> 
    <h3>Оставьте заявку прямо сейчас!</h3>
    <div class="minutes">всего за 5 минут!</div>
    <input type="text" name="name" placeholder="Введите Ваше имя">
    <input type="text" name="email" placeholder="Ваш телефон или E-mail">
    <button class="form_button_modal_window">Оставить заявку</button>
</form>
<div id="overlay"></div><!-- Пoдлoжкa -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107573938-1"></script>
    <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-‎107573938-1');
</script>
</body>
</html>