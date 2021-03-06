<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
	<title>Бригадный подряд</title>
	<meta charset="UTF-8">
	<!-- Media -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Skype toolbar none -->
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

	<!-- Meta for search -->
	<meta name="robots" content="index, follow">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="Libils Team">
	<meta name="copyright" content="Libils Team">

	<!-- Open Graph Meta -->
	<meta property="og:title" content="Бригадный подряд">
	<meta property="og:locale" content="ru_RU">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="Бригадный подряд">
	<meta property="og:url" content="http://bp116.ru">
	<meta property="og:type" content="website">

	<!-- Css -->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- <link rel="shortcut icon" href="img/favicon/fav.ico" type="image/x-icon"> -->
</head>
<body>

	<div class="wrapper animated">
		<div class="intro">
			<div class="container">
				<div class="top__header animated opacity-zero">
					<div class="logo"><img src="image/header/logo.png" alt="logo"></div>
					<div class="phone__header">
						<span class="phone__header__img"><img src="image/header/phone.png" alt="phone"></span>
						<p class="phone__header__number">+7(937)615-43-01</p>
					</div>
				</div>
				<div class="intro__content animated opacity-zero">
					<p class="color__default intro__sub__text">Планируете сделать ремонт в своей новой квартире?</p>
					<h2>СДЕЛАЕМ ВАМ КАЧЕСТВЕННЫЙ  <br> 		РЕМОНТ  КВАРТИРЫ БЕЗ ПЕРЕПЛАТ И ТОЧНО В СРОК</h2>
					<p class="intro__sub__text"><img src="image/header/Vector.png" alt="Vector"> <span class="color__default"> Профессионалы</span> своего дела</p>
					<div class="qualities">
						<div class="qualitie">
							<div class="img__qualitie"><img src="image/header/car.png" alt="car"></div>
							<div class="about__qualitie">
								<p>Бесплатный выезд <br> бригадира и смета <br> на следующий день </p>
							</div>
						</div>
						<div class="qualitie">
							<div class="img__qualitie"><img src="image/header/writer.png" alt="writer"></div>
							<div class="about__qualitie">
								<p>Подписываем <br> двухсторонний договор</p>
							</div>
						</div>
						<div class="qualitie">
							<div class="img__qualitie"><img src="image/header/wallet.png" alt="wallet"></div>
							<div class="about__qualitie">
								<p>Адекватная стоимость <br> работ, без предоплат</p>
							</div>
						</div>
					</div>
					<div class="btn__calcPrice">
						<a href="#calcBuild" class="btn__calc__intro color__black"><img src="image/header/calc.png" alt="calc"> Калькулятор стоимости ремонта </a>
						<div class="arrow__img__intro">
							<img src="image/header/arrow__left.png" alt="arrow__left">
						</div>
						<div class="answere__question">
							<p>Ответьте на 6 <br> вопросов и получите <br> подарок!</p>
						</div>
						<div class="surprise__intro">
							<img src="image/header/surpise.png" alt="surpise">
						</div>
					</div>
				</div>
				<div class="end__calc" id="#EndCalcTh"> 
					<h2>Спасибо, мы уже рассчитываем стоимость вашего ремонта.</h2>
					<p>В ТЕЧЕНИЕ СЕГОДНЯШНЕГО ДНЯ С ВАМИ СВЯЖЕТСЯ НАШ ОПЕРАТОР, ЧТОБЫ СООБЩИТЬ ТОЧНУЮ СТОИМОСТЬ ВАШЕГО РЕМОНТА</p>
				</div>
			</div>
		</div>
		<div class="payment" id="calcBuild">
			<div class="container">
				<div class="headline">
					<h2 class="color__black animated opacity-zero">Рассчитайте предварительную стоимость и сроки ремонта Вашего помещения</h2>
					<p class="color__default animated opacity-zero">
						Ответьте на 6 вопросов и получите гарантированный подарок
					</p>	
				</div>
				<div class="progress__indicator animated opacity-zero">
					<div class="progress__indicator__line">
						<div class="line__wait__level"></div>
					</div>
				</div>
				<div class="progress__bar animated opacity-zero">

					<div class="bar__stop"  data-id="1">
						<div class="circle_bar" style="box-shadow: 0px 0px 7px #FED562;background: #FED562;"></div>
					</div>
					<div class="bar__stop" data-id="2">
						<div class="circle_bar"></div>
					</div>
					<div class="bar__stop" data-id="3">
						<div class="circle_bar"></div>
					</div>
					<div class="bar__stop" data-id="4">
						<div class="circle_bar"></div>
					</div>
					<div class="bar__stop" data-id="5">
						<div class="circle_bar"></div>
					</div>
					<div class="bar__stop" data-id="6">
						<div class="circle_bar"></div>
					</div>
				</div>
				<div class="stage animated opacity-zero">
					<p class="color__black"><span class="counter__question__before__surprise">01</span> <sup>/06</sup></p>
					<p class="color__black questoin__now__of__type">Выберите тип Вашего объекта</p>
				</div>
				<div class="levels animated opacity-zero">
					<div class="next__level">
						<div class="level">

							<div class="type__obj" data-id="1" style="display: flex;">
								<div class="type">
									<img src="image/payment/Used.png" alt="Used">
									<p class="color__black">Вторичка</p>
								</div>
								<div class="type">
									<img src="image/payment/newBuild.png" alt="newBuild">
									<p class="color__black">Новостройка</p>
								</div>
								<div class="type">
									<img src="image/payment/flat.png" alt="flat">
									<p class="color__black">Коттедж</p>
								</div>

							</div>

							<div class="type__obj" data-id="2">

								<div class="type__innerDf" data-id="2">
									<div class="type">
										<p class="color__black">до 30м<sup>2</sup></p>
									</div>
									<div class="type">
										<p class="color__black"> 30-50м<sup>2</sup></p>
									</div>
									<div class="type">
										<p class="color__black"> 50-90м<sup>2</sup></p>
									</div>
								</div>

								<div class="type__innerDf" data-id="2">
									<div class="type">
										<p class="color__black"> 90-150м<sup>2</sup></p>
									</div>
									<div class="type">
										<p class="color__black"> 150-250м<sup>2</sup></p>
									</div>
									<div class="type">
										<p class="color__black">более 250м<sup>2</sup></p>
									</div>
								</div>

								<p class="question__now__for__this__type">Какая площадь помещения?</p>
							</div>

							<div class="type__obj" data-id="3">
								<div class="type__innerDf" data-id="3">
									<div class="type">
										<p class="color__black">В течении 3-х дней </p>
									</div>
									<div class="type">
										<p class="color__black">осенью <?php echo date("Y"); ?></p>
									</div>
									<div class="type">
										<p class="color__black">В течении недели</p>
									</div>
								</div>
								<div class="type__innerDf" data-id="3">
									<div class="type">
										<p class="color__black">Зимой <?php
										$nextYear = date("Y");
										echo $nextYear++; ?></p>
									</div>
									<div class="type">
										<p class="color__black">В течении месяца </p>
									</div>
									<div class="type">
										<p class="color__black">Весной <?php
										$nextYear = date("Y");
										echo $nextYear++; ?></p>
									</div>
								</div>
								<p class="question__now__for__this__type">Когда вы бы хотели начать ремонт?</p>
							</div>

							<div class="type__obj" data-id="4">
								<div class="type__innerDf" data-id="4">
									<div class="type">
										<p class="color__black">до 80000 руб.</p>
									</div>
									<div class="type">
										<p class="color__black">до 500000 руб.</p>
									</div>
									<div class="type">
										<p class="color__black">до 150000 руб.</p>
									</div>
								</div>
								
								<div class="type__innerDf" data-id="4">
									<div class="type">
										<p class="color__black">до 800000 руб.</p>
									</div>
									<div class="type">
										<p class="color__black">до 300000 руб.</p>
									</div>
									<div class="type">
										<p class="color__black">Более</p>
									</div>
								</div>
								
								<p class="question__now__for__this__type">На какой бюджет расчитывайте?</p>

							</div>

							<div class="type__obj" data-id="5">
								<div class="type">
									<img src="image/payment/Cap_re.png" alt="Cap_re">
									<p class="color__black">Капитальный ремонт </p>
								</div>
								<div class="type">
									<img src="image/payment/cos_re.png" alt="cos_re">
									<p class="color__black">Косметический ремонт</p>
								</div>
								<div class="type">
									<img src="image/payment/dis_re.png" alt="dis_re">
									<p class="color__black">Дизанерский проект</p>
								</div>
								
								<p class="question__now__for__this__type">Какой класс ремонта вас интересует?</p>

							</div>

							<div class="type__obj" data-id="6">
								<div class="type">
									<p class="color__black"></p>
									<form action="" >
										<input type="text" placeholder="Телефон*" class="phone__payment__send" required>
									</form>
								</div>
								
								<p class="question__now__for__this__type ">На какой номер вам сообщить результаты расчета?</p>

							</div>

							<div class="type__your__welcome" style="display: none;">
								<p class="color__black">Спасибо!</p>
								<p class="question__now__for__this__type ">Спасибо за прохождение теста!</p>

							</div>
						</div>
					</div>
					<div class="surprise__wait animated opacity-zero">
						<div class="inner__surprise">
							<small class="color__black">До подарка осталось:</small>
							<p class="question__counter__onSurprise color__black" >6 вопросов</p>
							<img src="image/payment/surprise.png" alt="surprise">
						</div>
					</div>
				</div>
				<div class="btn__next__payment animated opacity-zero">
					<button class="btn__next__level" data-level-current = "1">Далее</button>
				</div>
			</div>
		</div>
		<div class="principles">
			<div class="container">
				<h2 style="text-align: center;" class="animated opacity-zero">4 отличительных принципа нашей работы</h2>
				<div class="img__principles animated opacity-zero">
					<img src="image/principles/principles.png" alt="principles">
				</div>
				<div class="about__principles animated opacity-zero">
					<div class="headline__in__about__principles">
						<p class="color__black">Бережём Ваше время, деньги и нервы,<br> выполняя весь комплекс работ</p>
					</div>
					<div class="qualities__and__worker">
						<div class="qualities__about__principles">
							<div class="qualitie__about__principle animated opacity-zero">
								<div class="img__block__this__principle">
									<img src="image/principles/key.png" alt="key">
								</div>
								<div class="txt__about__principle">
									<div class="headline__this__principle">
										<p class="color__black">Комплексное оказание услуг </p>
									</div>
									<div class="par__this__principle">
										<p class="color__black">Делаем все под ключ и берем на себя проблемы, возникающие в ходе работы</p>
									</div>
								</div>
							</div>

							<div class="qualitie__about__principle animated opacity-zero">
								<div class="img__block__this__principle">
									<img src="image/principles/tassel.png" alt="tassel">
								</div>
								<div class="txt__about__principle">
									<div class="headline__this__principle">
										<p class="color__black">Помощь с материалом</p>
									</div>
									<div class="par__this__principle">
										<p class="color__black">При необходимости покупаем и доставляем на объект нужный материал</p>
									</div>
								</div>
							</div>
							
							<div class="qualitie__about__principle animated opacity-zero">
								<div class="img__block__this__principle">
									<img src="image/principles/phone.png" alt="phone">
								</div>
								<div class="txt__about__principle">
									<div class="headline__this__principle">
										<p class="color__black">Постоянная отчётность</p>
									</div>
									<div class="par__this__principle">
										<p class="color__black">Всю отчётность о ходе ремонта присылаем по желаемой соц. сети</p>
									</div>
								</div>
							</div>

							<div class="qualitie__about__principle animated opacity-zero">
								<div class="img__block__this__principle">
									<img src="image/principles/broom.png" alt="broom">
								</div>
								<div class="txt__about__principle">
									<div class="headline__this__principle">
										<p class="color__black">Бесплатная уборка</p>
									</div>
									<div class="par__this__principle">
										<p class="color__black">Проведем бесплатную уборку и вывезем мусор по окончании ремонта</p>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="photo__worker animated opacity-zero">
							<div class="img__worker">
								<img src="image/principles/photo__worker.png" alt="photo__worker">
								<div class="about__this__worker__whoIs">
									<p class="color__black">Главный прораб БП <br> Стаж работы—11 лет</p>
								</div>
							</div>
						</div> -->
					</div>
					<div class="btns__callback__worker animated opacity-zeror">
						<a href="tel:+79376154301" class="phone__workers"><img src="image/principles/phone__worker.png" alt="phone__worker">+7 (937) 615-43-01</a>
						<a href="tel:+79376154301" class="call__brig color__black">Услышать бригадира</a>
					</div>
				</div>
			</div>
		</div>
		<div class="flats">
			<div class="container">
				<div class="headline">
					<h2 class="color__black animated opacity-zero">С 2008 года сдали более 2 000+ квартир с ремонтом различного типа и сложности</h2>
				</div>
				<div class="inner__flats">

					<div class="flat" data-id="2" style="display:none;">
						<div class="img__current__flat">
							<img src="image/flats/flat 2/flat_1.png" alt="flat">
							
						</div>
						<div class="still__current__img__flat">
							<img src="image/flats/flat 2/flat_2.png" alt="flat2">
							<img src="image/flats/flat 2/flat_3.png" alt="flat3">
							<img src="image/flats/flat 2/flat_4.png" alt="flat4">
						</div>
					</div>

					<div class="flat" data-id="3" style="display:none;">
						<div class="img__current__flat">
							<img src="image/flats/flat 3/flat_1.png" alt="flat">
							
						</div>
						<div class="still__current__img__flat">
							<img src="image/flats/flat 3/flat_2.png" alt="flat2">
							<img src="image/flats/flat 3/flat_3.png" alt="flat3">
							<img src="image/flats/flat 3/flat_4.png" alt="flat4">
						</div>
					</div>

					<div class="flat" data-id="4" style="display:none;">
						<div class="img__current__flat">
							<img src="image/flats/flat 4/flat_1.png" alt="flat">
							
						</div>
						<div class="still__current__img__flat">
							<img src="image/flats/flat 4/flat_2.png" alt="flat2">
						</div>
					</div>

					<div class="flat" data-id="5" style="display:none;">
						<div class="img__current__flat">
							<img src="image/flats/flat 5/flat_1.png" alt="flat">
							
						</div>
						<div class="still__current__img__flat">
							<img src="image/flats/flat 5/flat_2.png" alt="flat2">
						</div>
					</div>

					<div class="flat animated opacity-zero" data-id="1">
						<div class="img__current__flat">
							<img src="image/flats/flat 1/flat_1.jpg" alt="flat">
							
						</div>
						<div class="still__current__img__flat">
							<img src="image/flats/flat 1/flat_2.jpg" alt="flat2">
							<img src="image/flats/flat 1/flat_3.jpg" alt="flat3">
							<img src="image/flats/flat 1/flat_4.jpg" alt="flat4">
						</div>
					</div>

				</div>
				<div class="level__current__flat animated opacity-zero">
					<span class="prev__flat__arrow"><</span>
					<span class="current__level__txt" data-id="1"><span class="cr_lv_txt">01</span> <sup>/05</sup></span>
					<span class="next__level__arrow">></span>
				</div>
			</div>
		</div>
		
		<div class="testimonials">
			<div class="container">
				<div class="inner__testimonials">
					<div class="testimonial">
						<iframe src="https://vk.com/video_ext.php?oid=-16209554&id=456239069&hash=8cebcc46206a047d" width="340" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="testimonial">
						 <iframe src="https://vk.com/video_ext.php?oid=-16209554&id=456239065&hash=a1e6596cdfa177fc" width="340" height="360" frameborder="0" allowfullscreen></iframe>
					</div>

					<div class="testimonial">
						<iframe src="https://vk.com/video_ext.php?oid=-16209554&id=456239053&hash=d7a58cbc9f2bd8b1" width="340" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="testimonial">
						 <iframe src="https://vk.com/video_ext.php?oid=-16209554&id=456239051&hash=d7b562ee36cd6af6" width="340" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="testimonial">
						<iframe src="https://vk.com/video_ext.php?oid=-16209554&id=456239045&hash=2ee15e6028a9ac77" width="340" height="360" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="six__stage">
			<div class="container">
				<div class="headline">
					<h2 class="animated opacity-zero">6 шагов как будет происходить работа над вашим проектом</h2>
				</div>
				<div class="six__stage__qualites">
					<div class="six__stage__quality animated opacity-zero">
						<div class="six__stage__quality__img">
							<i class="fas fa-phone"></i>
						</div>
						<div class="about__this__six__stage__quality">
							<p class="about__this__six__stage__quality__name">Получите консультацию</p>
							<p class="about__this__six__stage__quality__txt">Задаем несколько вопросов и выявляем какой ремонт Вам нужен, а также на что обратить свое внимание в первую очередь</p>
						</div>
						<div class="btn__call__six__stage__quality">
							<a href="#">Оставить заявку</a>
						</div>
					</div>
					<div class="six__stage__quality animated opacity-zero">
						<div class="six__stage__quality__img">
							<i class="fas fa-pencil-alt"></i>
						</div>
						<div class="about__this__six__stage__quality">
							<p class="about__this__six__stage__quality__name">Выезжаем на объект для замера</p>
							<p class="about__this__six__stage__quality__txt">Сделаем замеры, поможем  выбрать материал. <br> Расскажем , как не переплачивать </p>
						</div>
					</div>
					<div class="six__stage__quality animated opacity-zero">
						<div class="six__stage__quality__img">
							<i class="far fa-file"></i>
						</div>
						<div class="about__this__six__stage__quality">
							<p class="about__this__six__stage__quality__name">Заключаем договор</p>
							<p class="about__this__six__stage__quality__txt">Подписываем с Вами Договор и согласованную смету </p>
						</div>
					</div>
					<div class="six__stage__quality animated opacity-zero">
						<div class="six__stage__quality__img">
							<i class="fas fa-wallet"></i>
						</div>
						<div class="about__this__six__stage__quality">
							<p class="about__this__six__stage__quality__name">Гарантия на ремонт</p>
							<p class="about__this__six__stage__quality__txt">На все работы даем гарантию 1 год. <br>  В случае дефектов бесплатно устраняем их. </p>
						</div>
					</div>
					<div class="six__stage__quality animated opacity-zero">
						<div class="six__stage__quality__img">
							<i class="fas fa-tools"></i>
						</div>
						<div class="about__this__six__stage__quality">
							<p class="about__this__six__stage__quality__name">Осуществляем ремонтные работы Вашего помещения </p>
							<p class="about__this__six__stage__quality__txt">Закупаем все необходимые материалы и доставляем на объект , после приступаем к ремонтным работам. <br>
								Работаем по планам и присылаем фотоотчеты. <br> После ремонта делаем уборку </p>
							</div>
						</div>
						<div class="six__stage__quality animated opacity-zero">
							<div class="six__stage__quality__img">
								<i class="fas fa-list"></i>
							</div>
							<div class="about__this__six__stage__quality">
								<p class="about__this__six__stage__quality__name">Этап сдачи - приема выполненных работ. <br>Оплата работ в соответствии со сметой </p>
								<p class="about__this__six__stage__quality__txt">Каждый наш объект проходит 3-х уровневую систему контроля качества: <br> прораб-инженер , по контролю качества, директор по строительству.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="container">
					<!-- <div class="headline animated opacity-zero">
						<img src="image/footer/h1.png" alt="h1">	
					</div> -->
					<div class="inner__footer animated opacity-zero">
						<!-- <h2>Михаил Романов</h2>
						<h3>Главный прораб БП г. Казань</h3>
						<p>По всем интересующим вопросам Вы можете обратиться ко мне и я обязательно с Вами свяжусь.</p> -->
						<a href="https://wa.me/79274114999" class="inp__footer" type="button">+7(937)615-43-01</a>
						<button class="inp__footer" type="button">What`s App</button>
					</div>
				</div>
			</footer>
			<div class="copyrightLT animated opacity-zero">
				<p>Site created <a href="https://vk.com/libils_team" title="Группа в Вк">Libils Team</a> 2019©</p>
			</div>
		</div>
		



		<!-- Optional JS and Jquery -->
		<script src="https://kit.fontawesome.com/de8f891afd.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
		<script src="js/mask.js" type="text/javascript"></script>
		<script src="js/main.js" type="text/javascript"></script>
	</body>
	</html>