<? include('block-header.php'); ?>

		<div class="header-main">
			<ul id="header-bg" >
				<li class="uk-active"><img src="images/bg/00.jpg" alt=""></li>
			</ul>
			<? include('block-nav.php'); ?>
			<div class="header-main-bottom">

				<div class="uk-container uk-container-center">

					<ul class="uk-subnav uk-subnav-pill">
						<li  class="uk-active"><a href="reviews.php">Отзывы</a></li>
						<li ><a href="questions.php">Вопросы</a></li>
					</ul>

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
					<div class="search-box search-box_filter uk-visible-large">
						<input type="text" placeholder="Поиск по специалистам">
						<input class="" type="submit" name="" value="">
					</div>

				</div>
			</div>
		</div>
		<div class="block-search-small uk-visible-small">
			<div class="uk-container uk-container-center">
				<div class="search-box search-box_filter">
					<input type="text" placeholder="Поиск по отзывам">
					<input class="" type="submit" name="" value="">
				</div>
			</div>
		</div>

	</header>
	<!-- MAIN CONTENT -->
	<main  class="uk-margin-large-top ">
		<div class="uk-container uk-container-center">

			<div class="block block-reviews container-narrow uk-margin-large-bottom">

				<ul class="uk-tab tab_reviews margin-bottom-x2" data-uk-tab="{connect:'#reviews-tabs'}">
					<li><a href="">Отзывы</a></li>
					<li><a href="">Видео отзывы</a></li>
					<li><a href="">Отзывы из соцсетей</a></li>
				</ul>
				<div class=" ">
					<ul id="reviews-tabs" class="uk-switcher uk-margin">
						<li>
							<div class="margin-bottom-x2">
								<a href="#form-review" class="uk-button uk-button-turquoise" data-uk-modal>Оставить отзыв</a>
							</div>
							<div class="reviews-list" >
								<div class="review review_video panel">
									<div class="review-image">
										<img src="images/branch-teaser-02.jpg" alt="">
									</div>
									<div class="review-content">										
										<div class="review-name">Надежда</div>
										<div class="review-date">105 тыс. просмотров  12 марта 2018</div>
										<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
									</div>
								</div>
								<div class="review review_video panel">
									<div class="review-image">
										<img src="images/branch-teaser-02.jpg" alt="">
									</div>
									<div class="review-content">										
										<div class="review-name">Надежда</div>
										<div class="review-date">105 тыс. просмотров  12 марта 2018</div>
										<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
									</div>
								</div>
								<div class="review review_video panel">
									<div class="review-image">
										<img src="images/branch-teaser-02.jpg" alt="">
									</div>
									<div class="review-content">										
										<div class="review-name">Надежда</div>
										<div class="review-date">105 тыс. просмотров  12 марта 2018</div>
										<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
									</div>
								</div>
								<div class="review review_video panel uk-hidden">
									<div class="review-image">
										<img src="images/branch-teaser-02.jpg" alt="">
									</div>
									<div class="review-content">										
										<div class="review-name">Надежда</div>
										<div class="review-date">105 тыс. просмотров  12 марта 2018</div>
										<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
									</div>
								</div>
								<div class="review review_video panel uk-hidden">
									<div class="review-image">
										<img src="images/branch-teaser-02.jpg" alt="">
									</div>
									<div class="review-content">										
										<div class="review-name">Надежда</div>
										<div class="review-date">105 тыс. просмотров  12 марта 2018</div>
										<div class="review-text">Добрый день! У меня отрицательный резус-фактор (у мужа - положительный). После первых родов в роддоме сделали иммуноглобулин, нужно ли во вторую беременность на 28 неделе делать иммуноглобулин (антител по анализам нет)?</div>
									</div>
								</div>

							</div>
							<a href="#" class="reviews-toggle show-all">Показать еще</a>


						</li>
						<li></li>
						<li></li>
					</ul>
				</div>

			</div>



		</div>
	</main>

<? include('block-footer.php');?>
<? include('block-modal.php');?>
