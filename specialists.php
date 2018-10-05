<? include('block-header.php'); ?>

		<div class="header-main">
			<ul id="header-bg" >
				<li class="uk-active"><img src="images/bg/00.jpg" alt=""></li>
			</ul>

			<? include('block-nav.php'); ?>
			<div class="header-main-bottom ">

				<div class="uk-container uk-container-center">

					<ul class="uk-subnav uk-subnav-pill">
						<li class="uk-active"><a href="">Специалисты</a></li>
						<li><a href="">Расписание</a></li>

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
		<div class="block-alphabet uk-hidden-small">
			<div class=" uk-container uk-container-center">
				<div class=" alphabet-list" data-uk-button-radio>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="Все">
						<div class="">
							Все
						</div>
					</label>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="А">
						<div class="">
							А
						</div>
					</label>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="Б">
						<div class="">
							Б
						</div>
					</label>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="В">
						<div class="">
							Г
						</div>
					</label>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="Д">
						<div class="">
							Д
						</div>
					</label>
					<label class="uk-button" >
						<input type="radio" name="alphabet" value="Е">
						<div class="">
							Е
						</div>
					</label>
					<!--<li><a href="">А</a></li>
					<li><a href="">Б</a></li>
					<li><a href="">В</a></li>
					<li><a href="">Г</a></li>
					<li><a href="">Д</a></li>
					<li><a href="">Е</a></li>
					<li><a href="">Ж</a></li>
					<li><a href="">З</a></li>
					<li><a href="">И</a></li>-->
				</div>
			</div>
		</div>
		<div class="block-search-small uk-visible-small">
			<div class="uk-container uk-container-center">
				<div class="search-box search-box_filter">
					<input type="text" placeholder="Поиск по специалистам">
					<input class="" type="submit" name="" value="">
				</div>
			</div>
		</div>
	</header>
	<!-- MAIN CONTENT -->
	<main  class="uk-margin-large-top ">
		<div class="uk-container uk-container-center">


			<div class="block block-doctors uk-margin-large-bottom">
				<div class="alphabet-letter uk-h2">А</div>
				<div class="doctors-list">
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
				</div>
				<div class="alphabet-letter uk-h2">Б</div>
				<div class="doctors-list">
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
					<div class="doctor doctor-teaser">
						<div class="doctor-photo"><img src="images/doctor-teaser-01.jpg" alt=""></div>
						<div class="doctor-info">
							<div class="doctor-name">Юлия Андреевна<br />Городецкая</div>
							<div class="doctor-desc">Врач аллерголог-имунолог высшей категории</div>
						</div>
						<a href="specialist-detail.php" class="uk-position-cover"></a>
						<a href="#form-specialist" class="button-signup" data-uk-modal></a>
					</div>
				</div>
			</div>



		</div>
	</main>

<? include('block-footer.php');?>
<? include('block-modal.php');?>
