<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Продажа строительных лесов в Украине | Biglesa</title>

    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/vyshki-tury.css')}}" rel="stylesheet">
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
</header>
<!-- //============== MAIN ==============// -->
<section id="tura">
    <div class="container">
        <h2>Строительные леса</h2>
        <div class="row">

        @if($forestry)
            @foreach($forestry as $forest)
             <div class="col-sm-6 col-md-4">
                <div class="image_block">
                    <img src="{{asset('assets/images/forestry_img/')}}/{{$forest->img}}" alt="">
                </div>
                <div class="name">{{$forest->title}}</div>
                <div class="price">{{$forest->price}}</div>
                <ul>
                    <li><a href="#">{{$forest->availability}}</a></li>
                </ul>
                <a href="#" class="button" id="go">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Купить
                </a>
            </div>
            @endforeach
        @endif

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
</body>
</html>