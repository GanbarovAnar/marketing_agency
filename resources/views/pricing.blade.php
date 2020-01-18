@extends('layouts.myapp')

@section('content')

    <div class="hero-wrap hero-wrap-2" style="background-image: url(myimages/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="row no-gutters d-flex slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('index')}}">Главная</a></span> <span>Цены</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Цены</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Наши лучшие цены</h2>
            <span class="subheading">Прайс-лист</span>
          </div>
        </div>
    		<div class="row">

                @foreach ($ourservices as $ourservice)
                    <div class="col-md-3 ftco-animate">
                        <div class="block-7">
                            <div class="text-center">
                                <h2 class="heading">Startup</h2>
                                <span class="price"><sup>₽</sup> <span class="number">{{$ourservice->price}}</span></span>
                                <span class="excerpt d-block">{{$ourservice->description}}</span>
                                <a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Приобрести</a>

                            </div>
                        </div>
                    </div>
                @endforeach



	      </div>
	      <div class="row  mt-5 justify-conten-center">
        	<div class="col-md-8 ftco-animate">
        		<p>
                    Мы делаем ваш бизнес заметнее <br>
                    Комплексное решение развития вашего бизнеса <br> <br>

                    Применяем комплексный маркетинг для продвижения вашей рекламной кампании на рынке. Предлагаем своим клиентам комплексные решения, позволяющие быть быстрее, точнее и коммерчески эффективнее конкурентов. Эффективное продвижение бизнеса включает профессиональное решение большого количества задач. Только четкая стратегия, строгий контроль на каждом этапе и слаженная командная работа обеспечивают гарантированный результат
                    <br>- потребительский маркетинг
                    <br>- промышленный маркетинг
                    <br>- политический маркетинг
                </p>
        	</div>
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
