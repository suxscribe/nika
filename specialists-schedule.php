<? include('block-header.php'); ?>

		<div class="header-main">
			<ul id="header-bg" >
				<li class="uk-active"><img src="images/bg/00.jpg" alt=""></li>
			</ul>
			<? include('block-nav.php'); ?>
			<div class="header-main-bottom uk-hidden-small">

				<div class="uk-container uk-container-center">

					<ul class="uk-subnav uk-subnav-pill">
						<li><a href="">Специалисты</a></li>
						<li class="uk-active"><a href="">Расписание</a></li>
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

				</div>
			</div>
		</div>

	</header>
	<!-- MAIN CONTENT -->
	<main  class="uk-margin-large-top ">
		<div class="uk-container uk-container-center">
			<h1 class="uk-text-center">Расписание специалистов</h1>

			<div class="block block-schedule uk-margin-large-bottom">
				<div class="accordion-schedule accordion-chevron uk-accordion" data-uk-accordion="{showfirst:false,collapse: false}">
					<div class="uk-accordion-title">
						<div class="schedule-title">Акушерство и гинекология</div>
					</div>
					<div class="uk-accordion-content">

						<div class="schedule-wrapper schedule-wrapper-expand">
							<div class="schedule-header schedule-navigation">
								
									<span class="schedule-prev schedule-navigation__prev schedule-navigation-item_disabled"><i class="icon-chevron-left"></i></span>
									<span><span class="schedule-start-date">2 </span> - <span class="schedule-end-date">8 июля</span> </span>
									<span class="schedule-next schedule-navigation__next"><i class="icon-chevron-right"></i></span>
								
							</div>
							
							<div class="schedule uk-overflow-container" style="">
								<table class="rtable rtable--flip schedule-table schedule-slider">
									<thead>
										<tr>
											<th class="schedule-td-split">
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="specialist-detail.php">Данилова Татьяна Валерьевна</a></span>
												
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="specialist-detail.php">Журавлева Ольга Александровна</a></span>
												
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="schedule-slide schedule_active_slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="02.07.2018">2 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="03.07.2018">3 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="04.07.2018">4 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top">5 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="06.07.2018">6 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top"data-date="07.07.2018">7 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide schedule_last-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="08.07.2018">8 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="09.07.2018">9 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="10.07.2018">10 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="11.07.2018">11 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="12.07.2018">12 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="13.07.2018">13 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="14.07.2018">14 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="15.07.2018">15 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="16.07.2018">16 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="17.07.2018">17 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="18.07.2018">18 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="19.07.2018">19 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="20.07.2018">20 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="21.07.2018">21 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="22.07.2018">22 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="23.07.2018">23 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="24.07.2018">24 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="25.07.2018">25 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="26.07.2018">26 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="27.07.2018">27 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="28.07.2018">28 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="29.07.2018">29 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>

									</tbody>
								</table>						
								
							</div>
						</div>



					</div>


					<div class="uk-accordion-title">
						<div class="schedule-title">Аллергология</div>
					</div>
					<div class="uk-accordion-content">
						<div class="schedule-wrapper schedule-wrapper-expand">
							<div class="schedule-header schedule-navigation">
								
									<span class="schedule-prev schedule-navigation__prev schedule-navigation-item_disabled"><i class="icon-chevron-left"></i></span>
									<span><span class="schedule-start-date">2</span> - <span class="schedule-end-date">8 июля</span> </span>
									<span class="schedule-next schedule-navigation__next"><i class="icon-chevron-right"></i></span>
								
							</div>
							
							<div class="schedule uk-overflow-container" style="">
								<table class="rtable rtable--flip schedule-table schedule-slider">
									<thead>
										<tr>
											<th class="schedule-td-split">
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="">Данилова Татьяна Валерьевна</a></span>
												
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="">Журавлева Ольга Александровна</a></span>
												
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="schedule-slide schedule_active_slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="02.07.2018">2 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="03.07.2018">3 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="04.07.2018">4 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top">5 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="06.07.2018">6 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top"data-date="07.07.2018">7 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide schedule_last-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="08.07.2018">8 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="09.07.2018">9 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="10.07.2018">10 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="11.07.2018">11 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="12.07.2018">12 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="13.07.2018">13 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="14.07.2018">14 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="15.07.2018">15 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="16.07.2018">16 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="17.07.2018">17 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="18.07.2018">18 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="19.07.2018">19 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="20.07.2018">20 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="21.07.2018">21 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="22.07.2018">22 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="23.07.2018">23 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="24.07.2018">24 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="25.07.2018">25 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="26.07.2018">26 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="27.07.2018">27 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="28.07.2018">28 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="29.07.2018">29 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>

									</tbody>
								</table>						
								
							</div>
						</div>
					</div>
					<div class="uk-accordion-title">
						<div class="schedule-title">Какая-то очень длинная гастроэнтерология</div>
					</div>
					<div class="uk-accordion-content">
						<div class="schedule-wrapper schedule-wrapper-expand">
							<div class="schedule-header schedule-navigation">
								
									<span class="schedule-prev schedule-navigation__prev schedule-navigation-item_disabled"><i class="icon-chevron-left"></i></span>
									<span><span class="schedule-start-date">2</span> - <span class="schedule-end-date">8 июля</span> </span>
									<span class="schedule-next schedule-navigation__next"><i class="icon-chevron-right"></i></span>
								
							</div>
							
							<div class="schedule uk-overflow-container" style="">
								<table class="rtable rtable--flip schedule-table schedule-slider">
									<thead>
										<tr>
											<th class="schedule-td-split">
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="">Данилова Татьяна Валерьевна</a></span>
												
											</th>
											<th class="schedule-table-td_left-first">
												<span class="schedule-table-td_left-first__name" ><a href="">Журавлева Ольга Александровна</a></span>
												
											</th>
										</tr>
									</thead>
									<tbody>
										<tr class="schedule-slide schedule_active_slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="02.07.2018">2 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="03.07.2018">3 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="04.07.2018">4 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top">5 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="06.07.2018">6 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide schedule_visible-slide">
											<td class="schedule-table-td_top"data-date="07.07.2018">7 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide schedule_last-slide schedule_visible-slide">
											<td class="schedule-table-td_top" data-date="08.07.2018">8 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="09.07.2018">9 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="10.07.2018">10 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="11.07.2018">11 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="12.07.2018">12 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="13.07.2018">13 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="14.07.2018">14 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="15.07.2018">15 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top"data-date="16.07.2018">16 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="17.07.2018">17 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="18.07.2018">18 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="19.07.2018">19 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="20.07.2018">20 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="21.07.2018">21 <span>сб.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="22.07.2018">22 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="23.07.2018">23 <span>пн.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="24.07.2018">24 <span>вт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="25.07.2018">25 <span>ср.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="26.07.2018">26 <span>чт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="27.07.2018">27 <span>пт.</span></td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="28.07.2018">28 <span>сб.</span></td>
											<td >
											</td>
											<td >
												<div class="schedule-date">09:00-14:00 <a href="#form-specialist" class="schedule-signup" data-uk-modal>Записаться</a></div>
											</td>
										</tr>
										<tr class="schedule-slide">
											<td class="schedule-table-td_top" data-date="29.07.2018">29 <span>вс.</span></td>
											<td >
											</td>
											<td >
											</td>
										</tr>

									</tbody>
								</table>						
								
							</div>
						</div>
					</div>
				</div>
			</div>



		</div>
	</main>

<? include('block-footer.php');?>
<? include('block-modal.php');?>
