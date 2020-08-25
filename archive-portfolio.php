<?php
/**
 * The template for displaying portfolio page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apavlova-theme
 */

get_header();
get_template_part('menuandpreloader'); 
?>

		<!-- ====== Header ======  -->
		<section id="home" class="min-header" data-scroll-index="0" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/header-2.jpg';?>);" data-stellar-background-ratio="0.8">

			<div class="v-middle mt-30">
				<div class="container">
					<div class="row">

						<div class="text-center">
            <?php 
              the_title( '<h1>', '</h1>' );
            ?>
              <a href="#0">Главная</a>
              <a href="/portfolio">Посмотреть другие работы</a>
							<!-- <a href="#0">Blog</a> -->
							<!-- <a href="#0">К началу поста</a> -->
						</div>

					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Header ======  -->

		<!--====== Portfolio ======-->
		<section class="portfolio section-padding pb-70" data-scroll-index="3">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Портфолио.</h3>
					</div>

					<!-- filter links -->
					<div class="filtering text-center mb-50">
						<span data-filter='*' class="active">Все</span>
						<span data-filter='.landing'>Лендинги</span>
						<span data-filter='.multiple-site'>Многостраничники</span>
						<!-- <span data-filter='.wordpress'>WordPress</span> -->
					</div>

					<!-- gallery -->
					<div class="gallery text-center">

						<!-- gallery item -->
						<div class="col-md-4 col-sm-6 items multiple-site">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/1.jpg';?>" alt="image">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl">Smartfix-ptz.ru</h6>
										<div class="icons">
											<span class="icon ">
												<a href="#portfolio-item-1" class="open-popup">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div id="portfolio-item-1" class="portfolio-popup popup-window mfp-hide">
								<div class="popup-header">
										<div class="popup-title">
											<h5>
												<a href="#0">Доработка сайта «Smartfix-ptz.ru»</a>
											</h5>
										</div>
								</div>
								<div class="popup-body blogs">	
									<div class="container">
										<div class="row">
											
											<div class="col-12">
												<div class="posts">
						
													<div class="post">
														<div class="post-img">
															<a href="//smartfix-ptz.ru" target="_blank">
																<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/sm-mac.PNG';?>" alt="Smartfix-ptz.ru">
															</a>
														</div>
														<div class="content text-center">
															<div class="post-meta">
																<ul class="meta">
																	<li>
																		<div>
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																			Июль-август 2018
																		</div>
																	</li>
																	<li>
																		<div>
																			<i class="fa fa-tags" aria-hidden="true"></i>
																			Многостраничные сайты
																		</div>
																	</li>
																	
																</ul>
															</div>
						
															<div class="post-cont">
																<p class="spical">
																		<span>Цель проекта:</span> переделать исходный лендинг в многостраничный вариант.
																</p>
																<p class="descr">
																		Владелец планирует запуск рекламы на сервисах Яндекс.Директ и Google.Adwords для пяти направлений услуг:
																
																	<ul class="post-ul">
																		<li>Ремонт телефонов</li>
																		<li>Ремонт планшетов</li>
																		<li>Ремонт ноутбуков</li>
																		<li>Ремонт фотоаппаратов</li>
																		<li>Ремонт техники Apple (страницы для iPhone, iPad, MacBook)</li>
																	</ul>
																</p>
																<p class="descr">
																		Требуется добавить указанные направления услуг на сайт.
																</p> 
																
																
																<p class="spical">
																		<span>Задачи проекта:</span>
																</p>
																<p class="descr">
																	<ul class="post-ul">
																		<li>Добавить новые страницы на сайт.
																		Необходимо дополнить ресурс перечисленными страницами, выдержав единый стиль оформления. Страницы должны содержать блоки с информацией об услугах сервисного центра для каждой категории устройств, форму обратной связи, а также тексты, оптимизированные под SEO.
																		</li>
																		<li>Для страниц по ремонту техники Apple требуется предусмотреть возможность изменения стоимости услуг владельцем сайта.</li>
																		<li>Оптимизировать все страницы сайта для SEO.</li>
																		<li>Добавить функционал reCaptcha («капчу») для форм обратной связи на сайте.</li>
																		<li>Адаптировать сайт под мобильные устройства.</li>
																	</ul>
																</p>

																
																<p class="spical">
																		<span>Результат работы:</span>
																</p>
																<p class="descr">
																	Все требования заказчика реализованы. 
																	
																	<ul class="post-ul">
																		<li>Добавленные страницы содержат информацию об услугах, стоимости и принципах работы сервисного центра, а также тематические статьи на тему ремонта цифровой техники.</li>	
															
																		<li>В формах обратной связи используется «капча» для защиты от спама.</li>
																		
																		<li>Все страницы сайта SEO-оптимизированы, адаптированы под мобильные устройства. </li>

																		<li>Создана панель администратора с базовым функционалом: авторизация пользователя, возможность смены пароля, возможность просмотра и перезаписи стоимости услуг для техники Apple.</li>
																	</ul>
																</p>

																<p class="spical"><span>Используемые языки программирования, библиотеки и технологии: </span>

																</p>
																<p class="tags">
																	<span>HTML5</span>, &nbsp;
																	<span>CSS3</span>,&nbsp;
																	<span>JavaScript</span>,&nbsp;
																	<span>AJAX</span>,&nbsp;
																	<span>jQuery v.3</span>,&nbsp;
																	<span>Bootstrap v.4</span>,&nbsp;
																	<span>PHP</span>,&nbsp;
																	<span>MySQL</span>

																</p>

															</div>
						
															<div class="share-post" style="text-align: center;">
																<span><a href="//smartfix-ptz.ru" target="_blank">Ссылка на проект</a></span>
															</div>

															<div class="order" style="margin-top: 20px;">
																<span class="buton"><a href="#" class="call-to-act"  data-scroll-nav="6">Заказать сайт</a></span>
															</div>
														
						
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>  <!-- ./portfolio-item -->
						</div>
						

						<!-- gallery item -->
						<div class="col-md-4 col-sm-6 items multiple-site">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/2.jpg';?>" alt="image">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl">Events.com</h6>
										<div class="icons">
											<span class="icon">
												<a href="#portfolio-item-2" class="open-popup">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div id="portfolio-item-2" class="portfolio-popup popup-window mfp-hide" style="padding: 25px;">
								<div class="popup-header">
											<div class="popup-title">
												<h5>
													<a href="#0">Доработка шаблона сайта «Events.com»</a>
												</h5>
											</div>
								</div>
								<div class="popup-body blogs">	
									<div class="container">
										<div class="row">
											
											<div class="col-12">
												<div class="posts">
						
													<div class="post">
														<div class="post-img">
															<a href="//nastyakarelskaya.ru/hallo-welt/"  target="_blank">
																<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/events.png';?>" alt="Timo Lang website">
															</a>
														</div>
														<div class="content text-center">
															<div class="post-meta">
																<ul class="meta">
																	<li>
																		<div>
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																			Июнь 2018
																		</div>
																	</li>
																	<li>
																		<div>
																			<i class="fa fa-tags" aria-hidden="true"></i>
																			Многостраничные сайты
																		</div>
																	</li>
																	
																</ul>
															</div>
						
															<div class="post-cont">
																<p class="spical">
																		<span>Цель проекта:</span> переделать исходный лендинг в многостраничный вариант.
																</p>
																<p class="descr">
																		Владельцу требуется расширить шаблон сайта: превратить лендинг в многостраничный сайт. Необходимо добавить страницы:
																
																	<ul class="post-ul">
																		<li>PRIVACY POLICY - страница с описанием политики конфиденциальности владельца.</li>
																		<li>CONTACT US - страница с контактными данными компании.</li>
																		<li>COMPANY DETAILS - страница с описанием компании.</li>
																		<li>WHO WE ARE - страница с описанием сотрудников.</li>
																		<li>OUR PRODUCTS - страница с описанием продуктов компании.</li>
																		<li>OUR BRANDS - страница с описанием брендов компании.</li>
																		<li>EVENTS - страница с описанием эвентов компании.</li>
																		<li>FAQ - страница с ответами на часто задаваемые вопросы.</li>
																	</ul>
																</p>
																
																
																
																<p class="spical">
																		<span>Задачи проекта:</span>
																</p>
																<p class="descr">
																	<ul class="post-ul">
																		<li>Добавить новые страницы на сайт.
																		Необходимо дополнить ресурс перечисленными страницами, выдержав единый стиль оформления. Содержимое страниц может быть любым, но должно соответствовать тематике каждой страницы.
																		</li>
																		<li>Сайт должен быть спроектирован только для десктопных устройств (адаптация под мобильные устройства не требуется).</li>
																		<li>Добавить Google-карту на страницу «CONTACT US».</li>
																	</ul>
																</p>

																
																<p class="spical">
																		<span>Результат работы:</span>
																</p>
																<p class="descr">
																	Все требования заказчика реализованы. 
																	
																	<ul class="post-ul">
																		<li>Добавленные страницы содержат тематическую информацию, выдержаны в едином стиле и имеют анимационные эффекты некоторых элементов. </li>	
															
																		<li>На страницу «CONTACT US» добавлена Google-карта</li>
																	</ul>
																</p>
																<p class="descr">
																	Проект выполнен через фриланс-биржу 
																	<a href="//upwork.com" target="_blank">«Upwork»</a>. 
																</p>

																<p class="spical"><span>Используемые языки программирования, библиотеки и технологии: </span>

																</p>
																<p class="tags">
																	<span>HTML5</span>, &nbsp;
																	<span>CSS3</span>,&nbsp;
																	<span>JavaScript</span>
																</p>


															</div>
						
															<div class="share-post" style="text-align: center;">
																<span><a href="//nastyakarelskaya.ru/hallo-welt/" target="_blank">Ссылка на проект</a></span>
															</div>
															<div class="order" style="margin-top: 20px;">
																<span class="buton"><a href="#" class="call-to-act"  data-scroll-nav="6">Заказать сайт</a></span>
															</div>
															
														
						
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>  <!-- ./portfolio-item -->
						</div>

						<!-- gallery item -->
						<div class="col-md-4 col-sm-6 items landing">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/3.jpg';?>" alt="image">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl">Добрый картон</h6>
										<div class="icons">
											<span class="icon ">
												<a href="#portfolio-item-3" class="open-popup">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div id="portfolio-item-3" class="portfolio-popup popup-window mfp-hide" >
								<div class="popup-header">
										<div class="popup-title">
											<h5>
												<a href="#0">Создание лендинга «Добрый картон»</a>
											</h5>
										</div>
								</div>
								<div class="popup-body blogs">	
									<div class="container">
										<div class="row">
											
											<div class="col-12">
												<div class="posts">
						
													<div class="post">
														<div class="post-img">
															<a href="//nastyakarelskaya.ru/good-cardboard/"  target="_blank">
																<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/good-cardboard.png';?>" alt="Добрый картон">
															</a>
														</div>
														<div class="content text-center">
															<div class="post-meta">
																<ul class="meta">
																	<li>
																		<div>
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																			Май 2018
																		</div>
																	</li>
																	<li>
																		<div>
																			<i class="fa fa-tags" aria-hidden="true"></i>
																			Лендинги
																		</div>
																	</li>
																	
																</ul>
															</div>
						
															<div class="post-cont">
																<p class="spical">
																		<span>Цель проекта:</span> создание лендинга для компании. 
																		
																</p>
																<p class="descr">
																		Компания занимается производством упаковки из гофрокартона.
																</p>
																
																<p class="spical">
																		<span>Задачи проекта:</span>
																</p>
																<p class="descr">
																	<ul class="post-ul">
																		<li>
																			Верстка сайта по PSD-макету: мобильная и десктопная версии.
																			
																		</li>
																		<li>Кросс-браузерная верcтка (для Google Chrome, Mozilla FireFox, Safari, Opera). Поддержка до 7 версий каждого браузера.</li>
																		<li>Оптимизировать все страницы сайта для SEO.</li>
																		<li>Интерактив: настроить отправку форм обратной связи на почту заказчика.</li>
																		
																	</ul>
																</p>

																
																<p class="spical">
																		<span>Результат работы:</span>
																</p>
																<p class="descr">
																	Все требования заказчика реализованы. 
																	
																	<ul class="post-ul">
																		<li>Сайт собран согласно предоставленному PSD-макету.</li>	
															
																		<li>Лендинг оптимизирован под SEO.</li>
																		
																		<li>Все формы обратной связи (отправка) настроены на email заказчика.</li>

																	</ul>
																</p>

																<p class="spical"><span>Используемые языки программирования, библиотеки и технологии: </span>

																</p>
																<p class="tags">
																	<span>HTML5</span>, &nbsp;
																	<span>CSS3</span>,&nbsp;
																	<span>JavaScript</span>,&nbsp;
																	<span>AJAX</span>,&nbsp;
																	<span>jQuery v.3</span>,&nbsp;
																	<span>Bootstrap v.3</span>,&nbsp;
																	<span>PHP</span>															
																</p>


															</div>
						
															<div class="share-post" style="text-align: center;">
																<span><a href="//nastyakarelskaya.ru/good-cardboard/" target="_blank">Ссылка на проект</a></span>
																
															</div>
															<div class="order" style="margin-top: 20px;">
																<span class="buton"><a href="#" class="call-to-act"  data-scroll-nav="6">Заказать сайт</a></span>
															</div>
														
						
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>  <!-- ./portfolio-item -->
						</div>

						<!-- gallery item -->
						<div class="col-md-4 col-sm-6 items landing">
							<div class="item-img">
								<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/4.jpg';?>" alt="image">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl">Bellom.com</h6>
										<div class="icons">
											<span class="icon ">
												<a href="#portfolio-item-4" class="open-popup">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div id="portfolio-item-4" class="portfolio-popup popup-window mfp-hide" >
								<div class="popup-header">
										<div class="popup-title">
											<h5>
												<a href="#0">Верстка сайта для «Bellom.com»</a>
											</h5>
										</div>
								</div>
								<div class="popup-body blogs">	
									<div class="container">
										<div class="row">
											
											<div class="col-12">
												<div class="posts">
						
													<div class="post">
														<div class="post-img">
															<a href="//nastyakarelskaya.ru/good-cardboard/"  target="_blank">
																<img src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/good-cardboard.png';?>" alt="Добрый картон">
															</a>
														</div>
														<div class="content text-center">
															<div class="post-meta">
																<ul class="meta">
																	<li>
																		<div>
																			<i class="fa fa-calendar" aria-hidden="true"></i>
																			Июль 2018
																		</div>
																	</li>
																	<li>
																		<div>
																			<i class="fa fa-tags" aria-hidden="true"></i>
																			Многостраничники
																		</div>
																	</li>
																	
																</ul>
															</div>
						
															<div class="post-cont">
																<p class="spical">
																		<span>Цель проекта:</span> верстка по макету новой версии сайта для «Bellom.com»
																		
																</p>
																<p class="descr">
																		Компания занимается производством упаковки из гофрокартона.
																</p>
																
																<p class="spical">
																		<span>Задачи проекта:</span>
																</p>
																<p class="descr">
																	<ul class="post-ul">
																		<li>
																			Верстка сайта по PSD-макету: мобильная и десктопная версии.
																			
																		</li>
																		<li>Кросс-браузерная верcтка (для Google Chrome, Mozilla FireFox, Safari, Opera). Поддержка до 7 версий каждого браузера.</li>
																		<li>Оптимизировать все страницы сайта для SEO.</li>
																		<li>Интерактив: настроить отправку форм обратной связи на почту заказчика.</li>
																		
																	</ul>
																</p>

																
																<p class="spical">
																		<span>Результат работы:</span>
																</p>
																<p class="descr">
																	Все требования заказчика реализованы. 
																	
																	<ul class="post-ul">
																		<li>Сайт собран согласно предоставленному PSD-макету.</li>	
															
																		<li>Лендинг оптимизирован под SEO.</li>
																		
																		<li>Все формы обратной связи (отправка) настроены на email заказчика.</li>

																	</ul>
																</p>

																<p class="spical"><span>Используемые языки программирования, библиотеки и технологии: </span>

																</p>
																<p class="tags">
																	<span>HTML5</span>, &nbsp;
																	<span>CSS3</span>,&nbsp;
																	<span>JavaScript</span>,&nbsp;
																	<span>AJAX</span>,&nbsp;
																	<span>jQuery v.3</span>,&nbsp;
																	<span>Bootstrap v.3</span>,&nbsp;
																	<span>PHP</span>															
																</p>


															</div>
						
															<div class="share-post" style="text-align: center;">
																<span><a href="//nastyakarelskaya.ru/good-cardboard/" target="_blank">Ссылка на проект</a></span>
																
															</div>
															<div class="order" style="margin-top: 20px;">
																<span class="buton"><a href="#" class="call-to-act"  data-scroll-nav="6">Заказать сайт</a></span>
															</div>
														
						
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div> 
							</div>  <!-- ./portfolio-item -->
						</div>

					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Portfolio ======-->

		

<?php
//get_sidebar();
get_footer();
