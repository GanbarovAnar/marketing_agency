<!DOCTYPE html>
<html lang="en">
<head>
    <title>Маркетинговое агенство</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="mycss/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="mycss/animate.css">

    <link rel="stylesheet" href="mycss/owl.carousel.min.css">
    <link rel="stylesheet" href="mycss/owl.theme.default.min.css">
    <link rel="stylesheet" href="mycss/magnific-popup.css">

    <link rel="stylesheet" href="mycss/aos.css">

    <link rel="stylesheet" href="mycss/ionicons.min.css">

    <link rel="stylesheet" href="mycss/bootstrap-datepicker.css">
    <link rel="stylesheet" href="mycss/jquery.timepicker.css">


    <link rel="stylesheet" href="mycss/flaticon.css">
    <link rel="stylesheet" href="mycss/icomoon.css">
    <link rel="stylesheet" href="mycss/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">TeamOverflow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('index') }}" class="nav-link">Главная</a></li>
{{--                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>--}}
{{--                <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="work.html">Work</a></li>--}}
{{--                <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>--}}
                <li class="nav-item"><a href="{{route('pricing')}}" class="nav-link">Цены</a></li>
{{--                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>--}}
                <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Контакты</a></li>
                <li class="nav-item cta"><a href="" class="nav-link" data-toggle="modal" data-target="#modalRequest"><span>Заявка</span></a></li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                    </li>
                @else
                    <li class="nav-item"><a href="{{route('requests')}}" class="nav-link">Заявки (адм)</a></li>
                    <li class="nav-item"><a href="{{route('scanned_requests')}}" class="nav-link">Просмотренные</a></li>
                    <li class="nav-item"><a href="{{route('emails')}}" class="nav-link">Подписчики</a></li>
                    <li class="nav-item"><a href="{{route('ourservices')}}" class="nav-link">Цены (адм)</a></li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest


            </ul>
        </div>
    </div>

</nav>
<!-- END nav -->


@include('common.errors')


<div style="margin: 100px"></div>
@yield('content')
<div style="margin: 100px"></div>
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">TEAMOVERFLOW</h2>
                    <p>Работаем с 2004 года. Сотни довольных клиентов каждый день.</p>
                </div>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Информация на сайте</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{route('contact')}}" class="py-2 d-block">Контакты</a></li>
                        <li><a href="{{route('pricing')}}" class="py-2 d-block">Цены</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4 pr-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">События</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(myimages/image_1.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Прошедшие события</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(myimages/image_2.jpg);"></a>
                        <div class="text">
                            <h3 class="heading"><a href="#">Ближайшие события</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Контактная информация</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Астрахань, Татищева 20а</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+7 999 666 77 88</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

<!-- Modal -->
<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalRequestLabel">Создать заявку</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/addTask" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="ФИО">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                        <input type="text" class="form-control" name="phone" placeholder="Телефон">
                        <input type="text" class="form-control" name="subject" placeholder="Заголовок">
                        <textarea class="form-control" cols="30" rows="10" name="message" placeholder="Сообщение"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Отправить" class="btn btn-primary">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script src="myjs/jquery.min.js"></script>
<script src="myjs/jquery-migrate-3.0.1.min.js"></script>
<script src="myjs/popper.min.js"></script>
<script src="myjs/bootstrap.min.js"></script>
<script src="myjs/jquery.easing.1.3.js"></script>
<script src="myjs/jquery.waypoints.min.js"></script>
<script src="myjs/jquery.stellar.min.js"></script>
<script src="myjs/owl.carousel.min.js"></script>
<script src="myjs/jquery.magnific-popup.min.js"></script>
<script src="myjs/aos.js"></script>
<script src="myjs/jquery.animateNumber.min.js"></script>
<script src="myjs/bootstrap-datepicker.js"></script>
<script src="myjs/jquery.timepicker.min.js"></script>
<script src="myjs/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="myjs/google-map.js"></script>
<script src="myjs/main.js"></script>

</body>
</html>
