
<div id="modal-search" class="uk-modal">
    <div class="uk-modal-dialog uk-modal-dialog-blank panel-modal-search">
        <a class="uk-modal-close uk-close"></a>
        <div class="modal-search-box">
			<input type="text" placeholder="Используйте поиск по нашим услугам">
			<input class="" type="submit" name="" value="">
		</div>
    </div>
</div>

<!--mobile popup menu -->
<div id="menu" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-blank">

			<div class="menu-modal-inner">
				<div class="modal-search-box  ">
					<input type="text" placeholder="Используйте поиск">
					<input class="" type="submit" name="" value="">
				</div>

				<div class="menu-modal-buttons">
					<a id="button-modal-order" class="uk-button uk-button-turquoise button-icon-pen uk-margin-bottom " href="#form-order" data-uk-modal="{modal:false}" >Записаться на прием</a>
					<a href="" class="uk-button uk-margin-bottom">Сдать анализы</a>
					<a href="#form-callback" data-uk-modal="{modal:false}" class="uk-button uk-margin-bottom ">Заказать звонок</a>
				</div>

				
				<div class="menu-modal-menu " >
					<ul class="uk-nav uk-nav-parent-icon" data-uk-nav>
						<li class=""><a href="">Главная</a></li>

						<li class="uk-parent">
							<span><a href="otdelenie.php">Услуги</a></span>
							<a href="#">Услуги</a>
							<ul class="uk-nav-sub">
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
							</ul>
						</li>
						<li class="uk-parent">
							<span><a href="otdelenie.php">О нас</a></span>
							<a href="#">О нас</a>
							<ul class="uk-nav-sub">
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
								<li class=""><a href="">Услуга</a></li>
							</ul>
						</li>


						<li class=""><a href="">Специалисты и расписание</a></li>
						<li class=""><a href="">Цены</a></li>
						<li class=""><a href="">Акции</a></li>
						<li class=""><a href="">Отзывы и вопросы</a></li>
						<li class=""><a href="">Все филиалы</a></li>
					</ul>
				</div>


				<div class="menu-modal-socials">
					<a class="uk-icon-vk" rel="nofollow" href="" target="_blank"></a>
					<a class="uk-icon-facebook" rel="nofollow" href="" target="_blank"></a>
					<a class="uk-icon-youtube" rel="nofollow" href="" target="_blank"></a>
					<a class="uk-icon-odnoklassniki" rel="nofollow" href="" target="_blank"></a>
				</div>
				<div class="uk-text-center">
					<a href="">Политика конфиденциальности</a>
				</div>
			</div>

	</div>
</div>

<!-- общая форма записи -->
<div id="form-order" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Записаться на прием</div>



		<div class="uk-form">
			<div class="uk-form-row">
				<div class="filter-select">
					<select class="">
						<option data-display="Выберите филиал" value="1">Выберите филиал</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
					  </select>
				</div>

			</div>
			<div class="uk-form-row uk-grid uk-grid-small uk-grid-width-medium-1-2" data-uk-grid-margin>
				<div class="uk-position-relative ">
					<!-- update выпадающего списка start -->
					<div id="form-select-date" class="filter-select form-select form-select_date form-date-icon">
						<select class="">
							<option data-display="Дата" value="1">Дата</option>
							<option value="2">1 июля 2018</option>
							<option value="3">2 июля 2018</option>
							<option value="4">3 июля 2018</option>
							<option value="5">4 июля 2018</option>
							<option value="6">5 июля 2018</option>
							<option value="7">6 июля 2018</option>
							<option value="8">7 июля 2018</option>
							<option value="9">7 июля 2018</option>
							<option value="10">7 июля 2018</option>
							<option value="8">7 июля 2018</option>
							<option value="8">7 июля 2018</option>
						  </select>
					</div>
					<!-- update выпадающего списка end -->
				</div>
				<div class="uk-position-relative ">
					<!-- update выпадающего списка start -->
					<div class="filter-select form-select form-select_time form-time-icon">
						<select class="">
							<option data-display="Время" value="1">Время</option>
							<option value="2">9:00</option>
							<option value="3">10:00</option>
							<option value="4">11:00</option>
							<option value="5">12:00</option>
							<option value="6">13:00</option>
							<option value="7">14:00</option>
							<option value="8">15:00</option>
							<option value="9">16:00</option>
							<option value="10">17:00</option>
							<option value="11">18:00</option>
							<option value="12">19:00</option>
						  </select>
					</div>
					<!-- update выпадающего списка end -->
				</div>
			</div>
			<div class="uk-form-row">
				<textarea class="uk-width-1-1 input_field" name="form-order-comment" rows="3" cols="80" placeholder="" ></textarea>
				<label class="input_label" for="form-order-comment">Примечание</label>

			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-order-name" placeholder="" value="">
				<label class="input_label" for="form-order-name">Имя</label>
			</div>
			<div class="uk-form-row ">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-order-phone" placeholder="" value="">
				<label class="input_label" for="form-order-phone">Телефон</label>
			</div>
			<p class="uk-text-small margin-bottom-x3">Заявка является предварительной. С вами свяжется администратор, чтобы уточнить дату и время приема</p>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Записаться на прием", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Записаться на прием">
			</div>

		</div>


	</div>
</div>

<!-- форма специалиста -->
<div id="form-specialist" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Записаться на прием</div>



		<div class="uk-form">
			<div class="form-data uk-margin-bottom">
				<div class="data-label">Филиал</div>
				<input class="data-value" disabled type="text" name="form-specialist-fil" value="Клиника здоровья семьи и репродукции">
			</div>
			<div class="form-data uk-margin-bottom">
				<div class="data-label">Специалист</div>
				<input class="data-value" disabled type="text" name="form-specialist-doc" value="Артем Иванович Сазанов">
			</div>
			<div class="uk-grid uk-grid-small uk-grid-width-1-2" data-uk-grid-margin>
				<div>
					<!-- update выпадающего списка start -->
					<div class="filter-select form-select form-select_date form-date-icon">
						<select class="">
							<option data-display="Дата" value="1">Дата</option>
							<option value="2">1 июля 2018</option>
							<option value="3">2 июля 2018</option>
							<option value="4">3 июля 2018</option>
							<option value="5">4 июля 2018</option>
							<option value="6">5 июля 2018</option>
							<option value="7">6 июля 2018</option>
							<option value="8">7 июля 2018</option>
						  </select>
					</div>
					<!-- update выпадающего списка end -->
				</div>
				<div>
					<!-- update выпадающего списка start -->
					<div class="filter-select form-select form-select_time form-time-icon">
						<select class="">
							<option data-display="Время" value="1">Время</option>
							<option value="2">9:00</option>
							<option value="3">10:00</option>
							<option value="4">11:00</option>
							<option value="5">12:00</option>
							<option value="6">13:00</option>
							<option value="7">14:00</option>
							<option value="8">15:00</option>
							<option value="9">16:00</option>
							<option value="10">17:00</option>
							<option value="11">18:00</option>
							<option value="12">19:00</option>
						  </select>
					</div>
					<!-- update выпадающего списка end -->
				</div>
			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-specialist-name" placeholder="" value="">
				<label class="input_label" for="form-specialist-name">Имя</label>
			</div>
			<div class="uk-form-row ">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-specialist-phone" placeholder="" value="">
				<label class="input_label" for="form-specialist-phone">Телефон</label>
			</div>
			<p class="uk-text-small margin-bottom-x3">Заявка является предварительной. С вами свяжется администратор, чтобы уточнить дату и время приема</p>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Записаться на прием", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Записаться на прием">
			</div>

		</div>


	</div>
</div>

<!-- форма отзывы и вопросы -->
<div id="form-askquestion" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Задать вопрос</div>

		<div class="uk-form">
			<div class="uk-form-row">
				<div class="filter-select">
					<select class="">
						<option data-display="Выберите специализацию" value="1">Выберите специализацию</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
					  </select>
				</div>

			</div>
			<div class="uk-form-row">
				<textarea class="uk-width-1-1 input_field" name="form-askquestion-comment" rows="3" cols="80" placeholder=""></textarea>
				<label class="input_label" for="form-askquestion-comment">Примечание</label>
			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-askquestion-name" placeholder="" value="">
				<label class="input_label" for="form-askquestion-name">Имя</label>
			</div>
			<div class="uk-form-row ">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-askquestion-phone" placeholder="" value="">
				<label class="input_label" for="form-askquestion-phone">Телефон</label>
			</div>
			<p class="uk-text-small margin-bottom-x3">На сайте отображаются только имя и текст вопроса, контактные данные видны только модератору сайта. Мы свяжемся с Вами лично, если ситуация требует детального рассмотрения.</p>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Отправить вопрос", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Отправить вопрос">
			</div>

		</div>


	</div>
</div>

<!-- форма обратного звонка -->
<div id="form-callback" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Заказать обратный звонок</div>

		<div class="uk-form">
			<div class="uk-form-row">
				<div class="filter-select">
					<select class="">
						<option data-display="Выберите город" value="1">Выберите город</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
					  </select>
				</div>

			</div>
			<div class="uk-form-row">
				<!-- update выпадающего списка start -->
				<div class="filter-select form-select form-select_time form-time-icon">
					<select class="">
						<option data-display="Время" value="1">Время</option>
						<option value="2">9:00</option>
						<option value="3">10:00</option>
						<option value="4">11:00</option>
						<option value="5">12:00</option>
						<option value="6">13:00</option>
						<option value="7">14:00</option>
						<option value="8">15:00</option>
						<option value="9">16:00</option>
						<option value="10">17:00</option>
						<option value="11">18:00</option>
						<option value="12">19:00</option>
					  </select>
				</div>
				<!-- update выпадающего списка end -->
			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-callback-name" placeholder="" value="">
				<label class="input_label" for="form-callback-name">Имя</label>			
			</div>
			<div class="uk-form-row ">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-callback-phone" placeholder="" value="">
				<label class="input_label" for="form-callback-phone">Телефон</label>
			</div>
			<p class="uk-text-small margin-bottom-x3">Заявка является предварительной. С вами свяжется администратор, чтобы уточнить дату и время приема</p>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Отправить", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Отправить">
			</div>

		</div>


	</div>
</div>

<!-- Форма отзыва -->
<div id="form-review" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Оставить отзыв</div>



		<div class="uk-form">
			<div class="uk-form-row">
				<div class="filter-select">
					<select class="">
						<option data-display="Выберите филиал" value="1">Выберите филиал</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
					  </select>
				</div>
			</div>
			<div class="uk-form-row">
				<div class="filter-select">
					<select class="">
						<option data-display="Выберите филиал" value="1">Выберите специализацию</option>
						<option value="2">Клиника здоровья семьи и репродукции</option>
						<option value="3">Клиника здоровья семьи и оригинала</option>
					  </select>
				</div>
			</div>

			<div class="uk-form-row">
				<textarea class="uk-width-1-1 input_field" name="form-review-review" rows="3" cols="80" placeholder=""></textarea>
				<label class="input_label" for="form-review-review">Ваш отзыв</label>

			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-review-name" placeholder="" value="">
				<label class="input_label" for="form-review-name">Имя</label>
			</div>
			<div class="uk-form-row ">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-review-phone" placeholder="" value="">
				<label class="input_label" for="form-review-phone">Телефон</label>
			</div>
			<p class="uk-text-small margin-bottom-x3">На сайте отображаются только имя и текст вопроса, контактные данные видны только модератору сайта. Мы свяжемся с Вами лично, если ситуация требует детального рассмотрения.</p>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Отправить вопрос", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Отправить вопрос">
			</div>

		</div>


	</div>
</div>

<!-- Форма со страницы специалиста -->
<div id="form-question" class="uk-modal modal-form">

	<div class="uk-modal-dialog">
		<a class="uk-modal-close icon-close" href="#"></a>
		<div class="uk-h2">Задать вопрос</div>

		<div class="uk-form">

			<div class="uk-form-row">
				<textarea class="uk-width-1-1 input_field" name="form-question-question" rows="3" cols="80" placeholder=""></textarea>
				<label class="input_label" for="form-question-question">Вопрос</label>
			</div>

			<div class="uk-form-row margin-bottom-x2">
				<input class="uk-width-1-1 input_field" type="text" name="form-question-name" placeholder="" value="">
				<label class="input_label" for="form-question-name">Имя</label>
		</div>
			<div class="uk-form-row margin-bottom-x3">
				<input class="uk-width-1-1 input_field input_phone" type="text" name="form-question-phone" placeholder="" value="">
				<label class="input_label" for="form-question-phone">Телефон</label>
			</div>

			<div class="uk-form-row uk-text-small">
				<label><input name="policy" type="checkbox"> Нажимая на кнопку "Оставить отзыв", я даю согласие </label> <a class="link-blue" href="">на обработку персональных данных</a>
			</div>
			<div class="uk-form-row form-button">
				<input class="uk-button uk-button-turquoise" type="submit" name="" value="Оставить отзыв">
			</div>

		</div>


	</div>
</div>

<!--  ФОРМА ЗАЯВКА ОТПРАВЛЕНА -->

<div id="form-sent" class="uk-modal modal-form modal-notification">
	<div class="uk-modal-dialog">
		<div class="modal-content">

			<div class="uk-text-center">
				<div class="uk-h2 margin-bottom-x2">Заявка на прием отправлена</div>
				<p class="text-18 margin-bottom-x2">В ближайшее время с вами свяжется <br>специалист клиники для подтверждения<br>и уточнения деталей.</p>
			</div>
		</div>
		<div class="uk-text-center">
			<a class="uk-button uk-button-turquoise uk-button-large uk-modal-close">
				Хорошо
			</a>
		</div>

	</div>
</div>

<!--  ТЕСТ режим. -->

<div id="modal-notify" class="uk-modal modal-form modal-notification">
	<div class="uk-modal-dialog">
		<div class="uk-modal-header uk-text-center">
			<div class="uk-h2">Уважаемые посетители!</div>
		</div>
		<div class="modal-content">
			<div class="">
				<div class="uk-h3 margin-bottom-x2 uk-margin-top">Наш обновленный сайт временно работает в режиме тестирования.</div>
				<p class=" margin-bottom-x2">Некоторые функции могут не&nbsp;работать. Просим относиться к&nbsp;этому с&nbsp;пониманием и&nbsp;терпением, скоро все наладится!</p>
				<p class="uk-text-center uk-margin-small-bottom">
					Телефон контактного центра				
				</p>
				<p class="uk-h2 margin-bottom-x2 uk-text-center uk-margin-small-top">(831) 26-00-226</p>
			</div>
		</div>
		<div class="uk-text-center">
			<a class="uk-button uk-button-turquoise uk-modal-close">
				Хорошо
			</a>
		</div>

	</div>
</div>


</body>
</html>
