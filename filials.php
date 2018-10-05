<? include('block-header.php'); ?>

		<div class="header-main">
			<ul id="header-bg" >
				<li class="uk-active"><img src="images/bg/00.jpg" alt=""></li>
			</ul>
			<? include('block-nav.php'); ?>
			<div class="header-main-bottom ">

				<div class="uk-container uk-container-center">

					<h1>Филиалы</h1>

				</div>
			</div>
		</div>

		<div class="block-filter">
			<div class=" uk-container uk-container-center">
				<div class="uk-flex uk-flex-wrap">
					<div class="filter-list uk-flex uk-flex-wrap">
						<div class="filter-select">
							<select class="">
								<option data-display="Все специализации" value="1">Все специализации</option>
								<option value="2">Некоторые специализации</option>
								<option value="3">Одна специализация</option>
							  </select>
						</div>
						<div class="filter-select">
							<select class="">
								<option value="1">Нижний Новгород</option>
								<option value="2">Дзержинск</option>
								<option value="3">Арзамас</option>
							  </select>
						</div>
						<div class="filter-select">
							<select class="">
								<option data-display="Филиал" value="1">Филиал</option>
								<option value="2">Филиал 2</option>
								<option value="3">Филиал 3</option>
							  </select>
						</div>
					</div>

				</div>
			</div>
		</div>

	</header>
	<!-- MAIN CONTENT -->
	<main  class="uk-margin-large-top ">
		<div class="uk-container uk-container-center">

			<div class="block block-filials container-narrow uk-margin-large-bottom">

				<script src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU" type="text/javascript"></script>
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
									var myPlacemark2 = new ymaps.Placemark([56.329628, 44.012024], {}, {
										iconLayout: 'default#image',
										iconImageHref: '/images/map-marker.png',
										iconImageSize: [50, 50],
										iconImageOffset: [-25, -25]
									});

									myMap.geoObjects.add(myPlacemark1);
									myMap.geoObjects.add(myPlacemark2);
									//myMap.geoObjects.add(myPlacemark3);
									//myMap.geoObjects.add(myPlacemark4);
									//myMap.geoObjects.add(myPlacemark5);
								};</script>
				<div class="uk-margin-large-bottom" style="height: 400px; width: 100%;" id="map"></div>



				<div class="filials-list uk-grid uk-grid-collapse">
					<div class="filial filial_teaser uk-width-1-1 panel">
						<div class="filial-title">Клиника здоровья семьи и репродукции</div>
						<div class="filial-info">
							<div>
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>
Воскресенье 8.00-15.00</div>
								<div class="filial-button uk-visible-large">
									<div class="uk-button uk-button-turquoise">Подробнее о филиале</div>
								</div>
							</div>
							<div>
								<p><strong>Специлизация</strong>: Акушерство и гинекология, Эстетическая гинекология, Вспомогательные репродуктивные технологии, ЭКО, ИКСИ, ИМСИ, Гематология, Кардиология, Маммология, Неврология, Офтальмология, Ревматология, Терапия, Урология, Андрология, Эндокринология, УЗИ экспертного уровня, Цифровая маммография, Остеоденситометрия, ЭКГ, ЭХО КГ (УЗИ сердца), Медицинские анализы</p>
							</div>
							<div class="filial-button uk-hidden-large">
								<div class="uk-button uk-button-turquoise">Подробнее о филиале</div>
							</div>

						</div>
					</div>
					<div class="filial filial_teaser uk-width-1-1 panel">
						<div class="filial-title">Клиника здоровья семьи и репродукции</div>
						<div class="filial-info">
							<div>
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>
Воскресенье 8.00-15.00</div>
								<div class="filial-button">
									<div class="uk-button uk-button-turquoise">Подробнее о филиале</div>
								</div>
							</div>
							<div>
								<p><strong>Специлизация</strong>: Акушерство и гинекология, Эстетическая гинекология, Вспомогательные репродуктивные технологии, ЭКО, ИКСИ, ИМСИ, Гематология, Кардиология, Маммология, Неврология, Офтальмология, Ревматология, Терапия, Урология, Андрология, Эндокринология, УЗИ экспертного уровня, Цифровая маммография, Остеоденситометрия, ЭКГ, ЭХО КГ (УЗИ сердца), Медицинские анализы</p>
							</div>
							<div class="filial-button uk-hidden-large">
								<div class="uk-button uk-button-turquoise">Подробнее о филиале</div>
							</div>

						</div>
					</div>
					<div class="filial filial_teaser filial_teaser-1-2 uk-width-medium-1-2 uk-width-1-1 panel">
						<div class="filial-title">Клиника здоровья семьи и репродукции</div>
						<div class="filial-info">
							<div>
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>
Воскресенье 8.00-15.00</div>
							</div>
						</div>
					</div>
					<div class="filial filial_teaser filial_teaser-1-2  uk-width-medium-1-2 uk-width-1-1 panel">
						<div class="filial-title">Клиника здоровья семьи и репродукции</div>
						<div class="filial-info">
							<div>
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>
Воскресенье 8.00-15.00</div>
							</div>
						</div>
					</div>

					<div class="filial filial_teaser uk-width-1-1 panel">
						<div class="filial-title">Медицинские офисы</div>
						<div class="uk-grid uk-grid-width-medium-1-3" data-uk-grid-margin>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
							<div class="filial filial_subteaser">
								<div class="filial-address">Н. Новгород, ул. Ошарская, 38а</div>
								<div class="filial-phone">+7 (831) 435 10 10</div>
								<div class="filial-schedule">Пн-сб 08.00-20.00 <br>Воскресенье 8.00-15.00</div>
							</div>
						</div>
					</div>

				</div>

			</div>



		</div>
	</main>

<? include('block-footer.php');?>
<? include('block-modal.php');?>
