<? include('block-header.php'); ?>

		<div class="header-main padding-bottom">
			<ul id="header-bg" >
				<li class="uk-active"><img src="images/bg/00.jpg" alt=""></li>
			</ul>
			<? include('block-nav.php'); ?>
			<div class="header-main-bottom uk-hidden-small">
				<div class="uk-container uk-container-center">

					<h1>Филиалы</h1>

					<ul class="uk-breadcrumb">
					    <li><a href="">Главная</a></li>
					    <li><a href="">Филиалы</a></li>
					    <li class="uk-active"><span>Клиника здоровья семьи и репродукции</span></li>
					</ul>

				</div>
			</div>
		</div>

	</header>
	<!-- MAIN CONTENT -->
	<main  class="uk-margin-large-top ">
		<div class="uk-container uk-container-center">

			<div class="block block-filial  block-pulltop uk-margin-large-bottom ">
				<div class="filial filial_detail">
					<div class="filial-map ">
						<script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru_RU" type="text/javascript"></script>
						<script type="text/javascript">ymaps.ready(init);

										function init() {
											var myMap = new ymaps.Map('map', {
													center: [56.317626, 44.000021],
													zoom: 13
												}),
												collection = new ymaps.GeoObjectCollection(),
												bounds = myMap.getBounds();


											var myPlacemark1 = new ymaps.Placemark([56.317635, 44.000010], {}, {
												iconLayout: 'default#image',
												iconImageHref: '/images/map-marker.png',
												iconImageSize: [50, 50],
												iconImageOffset: [-25, -25]
											});

											myMap.geoObjects.add(myPlacemark1);
										};</script>
						<div class="" style="height: 100%; width: 100%;" id="map"></div>

					</div>
					<div class="filial-info panel panel_lavender">

						<div class="filial-title uk-h1">Клиника здоровья семьи <br />
и репродукции</div>
						<div class="filial-desc">
							<p>Н. Новгород, ул. Ошарская, 38а</p>
							<div class="filial-phone uk-h2">+7 (831) 435 10 10</div>
							<p>Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</p>

						</div>
						<div class="filial-button">
							<a href="#form-order" class="uk-button uk-button-turquoise button-icon-pen" data-uk-modal>Записаться на прием</a>
						</div>
					</div>
				</div>
			</div>


			<div class="block block-services uk-margin-large-bottom">
				<div class="uk-h1">Услуги </div>
				<div class="services services-list panel panel_linen">
					<ul class="uk-nav uk-column-large-1-3 uk-visible-large">
						<li class="service-section"><a href="">УЗИ диагностика экспертного уровня</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li class="service-section"><a href="">Дерматоскопия</a></li>
						<li class="service-section"><a href="">Ренгенологическая диагностика</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li class="service-section"><a href="">Лабораторная диагностика</a></li>
						<li class="service-section"><a href="">Трихоскопия диагностика</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>
						<li><a href="">УЗИ мягких тканей</a></li>

					</ul>

					<div class="accordion-services uk-accordion uk-hidden-large" data-uk-accordion="{showfirst:false,collapse: false}">
						<h3 class="uk-accordion-title">УЗИ диагностика</h3>
						<div class="uk-accordion-content">
							<div class="">
								<ul class="uk-list services-list">
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
								</ul>
							</div>
						</div>
						<h3 class="uk-accordion-title">УЗИ диагностика</h3>
						<div class="uk-accordion-content">
							<div class="">
								<ul class="uk-list services-list">
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
								</ul>
							</div>
						</div>
						<h3 class="uk-accordion-title">УЗИ диагностика</h3>
						<div class="uk-accordion-content">
							<div class="">
								<ul class="uk-list services-list">
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
									<li><a href="">УЗИ мягких тканей</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="block block-actions uk-margin-large-bottom uk-hidden-large">
				<div class="panel panel_bg panel-news-2">
					<img src="images/main-actions-bg.jpg" alt="">
					<div class="panel-inner">
						<div class="uk-h2 uk-text-center">Акции</div>
						<div class="action-slideshow" data-uk-slideshow>
							<ul class=" uk-slideshow">
								<li>
									<div class="action-slide">
										<div class="action-image">
											<img src="images/main-action-img-01.jpg" alt="">
										</div>
										<div class="action-date">с 23 апреля по 30 апреля</div>
										<div class="action-title uk-h1"><a href="">Обследования на
											выявление остеопороза</a></div>
										<div class="action-text">Специалисты клиники здоровья семьи и репродукции НИКА СПРИНГ на Ошарской, 38 А предлагают диагностические обследования для выявления остеопороза</div>
										<div class="action-button"><a href="" class="uk-button uk-button-white">Узнать подробнее</a></div>
									</div>
								</li>
								<li>
									<div class="action-slide">
										<div class="action-image">
											<img src="images/main-action-img-01.jpg" alt="">
										</div>
										<div class="action-date">с 23 апреля по 30 апреля</div>
										<div class="action-title uk-h1"><a href="">Обследования на
											выявление остеопороза</a></div>
										<div class="action-text">Специалисты клиники здоровья семьи и репродукции НИКА СПРИНГ на Ошарской, 38 А предлагают диагностические обследования для выявления остеопороза</div>
										<div class="action-button"><a href="" class="uk-button uk-button-white">Узнать подробнее</a></div>
									</div>
								</li>
							</ul>
							<div class="slideshow-nav">
								<a href="" class="icon-chevron-left" data-uk-slideshow-item="previous"></a>
										  <ul class="current">
                        <li data-uk-slideshow-item="0">1</li>
                        <li data-uk-slideshow-item="1">2</li>
                        <li data-uk-slideshow-item="2">3</li>
                        <li data-uk-slideshow-item="3">4</li>
                        <li data-uk-slideshow-item="4">5</li>
                        <li data-uk-slideshow-item="5">6</li>
                      </ul> / <span class="overall">6</span>
								<a href="" class="icon-chevron-right" data-uk-slideshow-item="next"></a>
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="block block-specs uk-margin-large-bottom">
				<div class="uk-grid uk-grid-collapse" data-uk-grid-match="{target: '.specs'}" data-uk-grid-margin>
					<div class="uk-width-large-2-3 ">
						<div class="panel specs specs-3 panel_lavender">
							<div class="uk-margin-bottom">
								<img src="images/logo-turquoise.svg" width="150" alt="">
							</div>
							<h3 class="margin-bottom-x2">Группа медицинских компаний</h3>
							<div class="">
								Активно развиваясь и совершенствуясь все эти годы, мы завоевали уважение тысяч пациентов. В их глазах НИКА СПРИНГ — надежная компания, которой можно доверить заботу о своем здоровье и красоте. Ведь она объединила людей, чьё профессиональное кредо — абсолютная ответственность за дело своей жизни. Сеть клиник и лаборатория «НИКА СПРИНГ» по праву считаются одними из ведущих на рынке медицинских услуг в Нижнем Новгороде. Более 20 филиалов принимают пациентов в Н.Новгороде и области.
							</div>
						</div>
					</div>
					<div class="uk-width-large-1-3 specs specs-4">
						<div class="panel panel_bg">
							<img src="images/vperviye-bg.jpg" alt="">
							<div class="panel-inner">
								<div class="uk-h1">Посещаете клинику впервые</div>
								<div class="">
									<div class="uk-nav">
										<li><a href="">Первое посещение</a></li>
										<li><a href="">Анкета первичного пациента</a></li>
										<li><a href="">Необходимые документы</a></li>
										<li><a href="">Есть полис ДМС?</a></li>
										<li><a href="">Наши преимущества</a></li>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="block block-prices uk-margin-large-bottom uk-visible-large">
				<div class="panel panel_linen">
					<div class="uk-grid">
						<div class="uk-width-medium-2-3">
							<h3>Цены на популярные услуги</h3>
							<div class="service-price-list">
								<div class="price-list-section">Консультация специалиста</div>
								<div>
									<table class="price-list-table">
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="service-price-list">
								<div class="price-list-section">Диагностика</div>
								<div>
									<table class="price-list-table">
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
										<tr>
											<td>Консультация и осмотр гинеколога</td>
											<td class="price">900 руб</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<div class="uk-width-medium-1-3">
							<div class="panel panel_white">
								<div class="uk-text-center">Действующие акции</div>
								<div class="action-slideshow action-slideshow_services" data-uk-slideshow>
									<ul class=" uk-slideshow">
										<li>
											<div class="action-slide">
												<div class="action-image">
													<img src="images/main-action-img-01.jpg" alt="">
												</div>
												<div class="action-date">с 23 апреля по 30 апреля</div>
												<div class="action-title"><a href="">Обследования на
													выявление остеопороза</a></div>
												<div class="action-button"><a href="" class="uk-button uk-button-turquoise">Узнать подробнее</a></div>
											</div>
										</li>
										<li>
											<div class="action-slide">
												<div class="action-image">
													<img src="images/main-action-img-01.jpg" alt="">
												</div>
												<div class="action-date">с 23 апреля по 30 апреля</div>
												<div class="action-title"><a href="">Обследования на
													выявление остеопороза</a></div>
												<div class="action-button"><a href="" class="uk-button uk-button-turquoise">Узнать подробнее</a></div>
											</div>
										</li>
									</ul>
									<div class="slideshow-nav">
										<a href="" class="icon-chevron-left" data-uk-slideshow-item="previous"></a>
										<span class="current">1</span> / <span class="overall">6</span>
										<a href="" class="icon-chevron-right" data-uk-slideshow-item="next"></a>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>


			<div class="block block-doctors uk-margin-large-bottom">
				<div class="uk-h1">Прием ведут врачи</div>
				<div class="doctors-list">
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="" class="uk-position-cover"></a>
						<a href="" class="button-signup"></a>
					</div>
				</div>
				<a href="" class="doctors-show-all show-all">
					ВСЕ СПЕЦИАЛИСТЫ КЛИНИКИ
				</a>
			</div>


			<div class="block block-reviews uk-margin-large-bottom" id="revies">
				<div class="title-flex">
					<div class="uk-h1">Отзывы </div>
					<a href="#form-review" class="uk-button uk-button-turquoise" data-uk-modal>ОСТАВИТЬ ОТЗЫВ</a>
				</div>
				
				<div class="reviews-list" >
					<div class="review panel">
						<div class="review-name">Надежда</div>
						<div class="review-date">12 марта 2018</div>
						<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
					</div>
					<div class="review panel">
						<div class="review-name">Надежда</div>
						<div class="review-date">12 марта 2018</div>
						<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
					</div>
					<div class="review panel">
						<div class="review-name">Надежда</div>
						<div class="review-date">12 марта 2018</div>
						<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
					</div>
					<div class="review panel">
						<div class="review-name">Надежда</div>
						<div class="review-date">12 марта 2018</div>
						<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
					</div>
				</div>
			</div>

		</div>
	</main>

<? include('block-footer.php');?>
<? include('block-modal.php');?>
