@extends('layouts.myapp')

@section('content')

    <div class="hero-wrap hero-wrap-2" style="background-image: url(myimages/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Главная</a></span> <span>Контакты</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Наши контакты</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Контактная информация</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Адрес:</span> Татищева 20а</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">8 999 666 77 88</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">TEAMOVERFLOW.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="/addTask" method="POST">
                {{ csrf_field() }}
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="ФИО">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <input type="text" class="form-control" name="phone" placeholder="Телефон">
                <input type="text" class="form-control" name="subject" placeholder="Заголовок сообщения">
                <textarea id="" cols="30" rows="7" class="form-control" name="message" placeholder="Сообщение"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Отправить сообщение" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6" id="map"></div>
            

        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Подпишитесь на нашу рассылку</h2>
              <p>Узнайте первыми о скидках и выгодных предложениях !</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                    <form action="/addNewsletter" class="subscribe-form" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" name="email" placeholder="Введите свой email">
                            <input type="submit" value="Подписаться" class="submit px-3">
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
