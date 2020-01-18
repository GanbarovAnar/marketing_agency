@extends('layouts.myapp')

@section('content')

    <div class="hero-wrap">
      <div class="overlay"></div>
      <div class="container-fluid">
        <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

          <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
          	<h1 class="mb-4"> Маркетинг для
              <strong class="typewrite" data-period="4000" data-type='[ "Вашей компании", "Вашего бизнеса" ]'>
                <span class="wrap"></span>
              </strong>
            </h1>
            <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">У нас работают лучшие из лучший.</p>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Заявка</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Портфолио</a></p>
          </div>
          <div class="one-half align-self-md-end align-self-sm-center">
          	<div class="slider-carousel owl-carousel">
          		<div class="item">
			          <img src="myimages/dashboard_full_1.png" class="img-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img src="myimages/dashboard_full_2.png" class="img-fluid img"alt="">
		          </div>
		          <div class="item">
			          <img src="myimages/dashboard_full_3.png" class="img-fluid img"alt="">
		          </div>
	          </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-section-2">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8">
    				<h3 class="heading-white">Мы предоставляем услуги высокого качества</h3>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Наш сервис делает вас счастливыми</h2>
            <span class="subheading">Эксперты по оптимизации поисковых систем и социальных сетей</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-research"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Исследования рынка</h3>
                <p>Наши специалисты имеют огромный опыт исследования рынка</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-creativity"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Бизнес стратегия</h3>
                <p>Специализируемся на комплексном развитии бизнеса клиента</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon"><span class="flaticon-market"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Отчеты</h3>
                <p>Отчитываемся за итоговые показатели эффективности</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img ftco-animate" style="background-image: url(myimages/about.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="services-wrap">
      				<div class="heading-section mb-5 ftco-animate">
		            <h2 class="mb-2">Наш сервис делает вас счастливыми</h2>
		            <span class="subheading">Эксперты по оптимизации поисковых систем и социальных сетей</span>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-pencil"></span>
      					</div>
      					<div class="text">
	      					<h3>Логотип Брендинг</h3>
	      					<p>Создадим вам отличный логотип и бренд.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-web"></span>
      					</div>
      					<div class="text">
	      					<h3>Разработка</h3>
	      					<p>В нашей команде работают лучшие разработчики России. Мы сделаем все на высоком уровне.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-pie-chart"></span>
      					</div>
      					<div class="text">
	      					<h3>Онлайн маркетинг</h3>
	      					<p>Покажем лучшие результаты в онлайн маркетинге.</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(myimages/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-11">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="6780">0</strong>
		                <span>Счастливых клиенты</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Запущенных проектов</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>Завершенных проектов</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>Чашек кофе потрачено</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-work">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Наши портфолио</h2>
            <span class="subheading">Мы рады поделиться нашими завершенными проектами</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-1.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 01</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-2.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 02</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-3.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 03</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-4.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 01</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-5.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 02</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(myimages/work-6.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 03</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>






		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Результаты нашей работы</h2>
            <span class="subheading">Что говорят наши клиенты</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(myimages/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                      <p class="mb-5">Маркетинговое агентство TeamOverflow является партнером компании Биплан с 2013 года. За время многолетнего сотрудники TeamOverflow показали себя с лучшей стороны, проявляя активность в подготовке совместных проектов и ответственно соблюдая условия партнерства. Специалисты агентства подтверждают свои профессиональные знания и навыки в области интернет-маркетинга качеством работы и заинтересованностью в успехе. Рекомендую маркетинговое агентство TeamOverflow, как добропорядочного партнера.</p>
                      <p class="name">Владимир Кетчуп</p>
                    <span class="position">Владелец интернет магазина</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(myimages/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                      <p class="mb-5">После работы с этой компанией, моя жизнь изменилась в лучшую сторону. Я достиг нирваны.</p>
                      <p class="name">Владимир Алексеев</p>

                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(myimages/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                      <p class="mb-5">Маркетинговое агентство TeamOverflow является нашим партнером. В рамках сотрудничества и реализации совместных проектов специалисты Биплана показали себя с лучшей стороны, проявляя активность и обращая внимание на детали. Сотрудники агентства имеют большой опыт и оперативно решают профильные вопросы.</p>
                      <p class="name">Антонио Валенси</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(myimages/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Маркетинговое агентство TeamOverflow c 2017 года входит в наш Клуб партнёров AGIMA. За время работы мы помогли клиентам реализовать цели, вырасти в оборотах и прибыли, а также выйти на качественно новый уровень. Налаженная коммуникация способствует оперативной обработке входящих заявок и согласованию вопросов по проектам. Специалисты агентства ответственно подходят к работе и аргументируют свои решения в рамках сотрудничества. Мы готовы рекомендовать Биплан, который входит в Клуб партнёров AGIMA, как надежного партнера.</p>
                    <p class="name">Иванов Иванов</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(myimages/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Маркетинговое агентство TeamOverflow является нашим партнером. В рамках сотрудничества и реализации совместных проектов специалисты Биплана показали себя с лучшей стороны, проявляя активность и обращая внимание на детали. Сотрудники агентства имеют большой опыт и оперативно решают профильные вопросы.</p>
                    <p class="name">Антонио Валенси</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-quote">
        <div class="container">
            <div class="row">
                <div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
                    <div class="heading-section heading-section-white mb-5 ftco-animate">
                        <h2 class="mb-2">Причины выбора нас </h2>
                    </div>
                    <div class="ftco-animate">
                        <p>TeamOverflow является первым маркетинговым агентством, строящим партнерские взаимоотношения на основе единых ценностей. Мы возвращаем веру в интернет-маркетинг, увеличивая продажи и развивая бизнес своих партнеров с 2001 года. Основные преимущества:</p>
                        <ul class="un-styled my-5">
                            <li><span class="icon-check"></span>Наши цены не кусаются</li>
                            <li><span class="icon-check"></span>У нас довольные клиенты</li>
                            <li><span class="icon-check"></span>Служба поддержки клиентов 24/7</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 py-5 pl-md-5">
                    <div class="heading-section mb-5 ftco-animate">
                        <h2 class="mb-2">Отправить заявку</h2>
                    </div>
                    <form action="/addTask" class="ftco-animate" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="ФИО">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Телефон">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Заголовок">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea id="" cols="30" rows="7" name="message" class="form-control" placeholder="Сообщение"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Отправить" class="btn btn-primary py-3 px-5">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>






    <section class="ftco-section-parallax" style="margin-top: 50px;">
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
