<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apavlova-theme
 */

get_header();
get_template_part('menuandpreloader'); 

?>

	<!-- ====== Header ======  -->
	<section id="home" class="header" data-scroll-index="0" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/header-2.jpg';?>);" data-stellar-background-ratio="0.8">
		<div class="v-middle">
			<div class="container">
				<div class="row">

					<!-- caption -->
					<div class="caption">
						<h5>Создание сайтов:</h5>
						<h1 class="cd-headline clip">
							<span class="blc"></span>
							<span class="cd-words-wrapper">
								<b class="is-visible"></b>
								<b>лендинги</b>
								<b>корпоративные сайты</b>
								<b>интернет-магазины</b>
								<b>сайты-визитки</b>
								<!-- <b class="wp">WordPress-разработчик</b> -->
							</span>
						</h1>

						<!-- social icons -->
						<div class="social-icon">
							<a href="//vk.com/nastya_karelskaya" target="_blank">
								<span><i class="fa fa-vk" aria-hidden="true"></i></span>
							</a>
							<a href="//www.instagram.com/nastya_karelskaya/" target="_blank">
								<span><i class="fa fa-instagram" aria-hidden="true"></i></span>
							</a>
							<a href="//t.me/@nastya_karelskaya" target="_blank">
								<span><i class="fa fa-telegram" aria-hidden="true"></i></span>
							</a>
							<a href="//www.linkedin.com/comm/in/nastya-karelskaya" target="_blank">
								<span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
							</a>
							<a href="//www.facebook.com/nastya.karelskaya" target="_blank">
								<span><i class="fa fa-facebook" aria-hidden="true"></i></span>
							</a>
						</div>
					</div>
					<!-- end caption -->
				</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</section>
	<!-- ====== End Header ======  -->


	<?php //wp_body_open(); ?>

	<!-- <div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'apavlova-theme' ); ?></a> -->

	<!-- <header id="masthead" class="site-header"> -->
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$apavlova_theme_description = get_bloginfo( 'description', 'display' );
			if ( $apavlova_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $apavlova_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div> -->
		<!-- .site-branding -->

		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'apavlova-theme' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav> -->
		<!-- #site-navigation -->
	<!-- </header> -->
	<!-- #masthead -->

		<!-- ====== Hero ======  -->
		<section class="hero section-padding pb-70" data-scroll-index="1">
			<div class="container">
				<div class="row">

					<!-- hero image -->
					<div class="col-md-5">
						<div class="hero-img mb-30">
							<img src="<?php echo get_template_directory_uri() . '/assets/img/hero-me-1.png'?>" alt="Анастасия Павлова">
						</div>
					</div>

					<!-- content -->
					<div class="col-md-7">
						<div class="content mb-30">
							<h3>Обо мне.</h3>
							<span class="sub-title">Разработка сайтов | Веб-разработка</span>
							<p>
								Меня зовут <b>Настя</b>, я программист. В 2015 году я начала работать в качестве фрилансера. Пробовала свои силы в разных направлениях программирования: от разработки мобильных приложений, до веб-программирования. Остановилась на <b>создании сайтов</b> и продолжаю совершенствоваться в выбранном ремесле.
							</p>
							<p>
								Буду рада предоставить вам услуги в сфере разработки сайтов, а также сотрудничеству с веб-студиями в качестве frontend-разработчика на удаленной основе.
							</p>

							<p class="skills-list">Основные скиллы и технологии, с которыми работаю:</p>
							<!-- skills progress -->
							<div class="skills">
								<div class="item">
									<div class="skills-progress">
										<h6>HTML 5</h6>
										<span></span>
									</div>
								</div>
								<div class="item">
									<div class="skills-progress">
										<h6>CSS 3</h6>
										<span></span>
									</div>
								</div>
								<div class="item">
									<div class="skills-progress">
										<h6>JavaScript</h6>
										<span></span>
									</div>
								</div>
								<div class="item">
									<div class="skills-progress">
										<h6>jQuery</h6>
										<span></span>
									</div>
								</div>
								<div class="item">
									<div class="skills-progress">
										<h6>PHP</h6>
										<span></span>
									</div>
								</div>
								<div class="item">
									<div class="skills-progress">
										<h6>WordPress</h6>
										<span></span>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>

							<a href="#0" data-scroll-nav="6">
								<span class="buton">Контакты</span>
							</a>

						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Hero ======  -->

		<!-- ====== Services ======  -->
		<section class="services section-padding bg-gray text-center pb-70" data-scroll-index="2">
			<div class="container">

				<!-- section heading -->
				<div class="section-head">
					<h3>Чем я могу вам помочь.</h3>
				</div>

				<div class="row">

					<!-- items -->
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-code" aria-hidden="true"></i></span>
							<h6>Разработка сайтa</h6>
							<p>Создание сайта «с нуля»: лендинг, многостраничный сайт, сайт-визитка или персональный сайт.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
							<h6>Обновление функций</h6>
							<p>Добавление или исправление страниц, форм, калькуляторов, галерей, плагинов WordPress и др.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
							<h6>Редизайн сайта</h6>
							<p>Обновление внешнего вида сайта, адаптация под мобильные устройства и различные браузеры.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></span>
							<h6>Web Design</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
							<h6>Branding</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-umbrella" aria-hidden="true"></i></span>
							<h6>Development</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
							<h6>Creative Design</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-television" aria-hidden="true"></i></span>
							<h6>Fully Responsive</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="item">
							<span class="icon"><i class="fa fa-camera" aria-hidden="true"></i></span>
							<h6>Retina Ready</h6>
							<p>Lorem Ipsum is simply dummy text of the Lorem Ipsum has been the industry's standard dummy text ever</p>
						</div>
					</div>
					
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Services ======  -->

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


		<!--====== Clients ======-->
		<section class="clients section-padding bg-gray" data-scroll-index="4">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Отзывы.</h3>
					</div>

					<!-- owl carousel -->
					<div class="col-md-offset-1 col-md-10">
						<div class="owl-carousel owl-theme text-center">

							<!-- citems -->						

							<div class="citem">
								<div class="author-img">
									<img src="<?php echo get_template_directory_uri() . '/assets/img/clients/1.jpg'?>" alt="Фото автора">
								</div>
								<p>Текст отзыва.</p>
								<h6>Имя автора</h6>
								<span>Фирма</span>
							</div>
						</div>
					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End clients ======-->


		<!--====== Blog ======-->
		<section class="blog section-padding " data-scroll-index="5">
			<div class="container">
				<div class="row">

					<!-- section heading -->
					<div class="section-head">
						<h3>Блог.</h3>
					</div>

					<!-- owl carsouel -->
					<div class="owl-carousel owl-theme">

						<!-- pitems -->
						<div class="pitem">
							<div class="post-img">
								<img src="img/blog/1.jpg" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									<a href="#0">WordPress</a>
								</h6>
								<h4>
									<a href="#0">Top WordPress Themes and Plugins for Hotels, Travel, and</a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>

						<div class="pitem">
							<div class="post-img">
								<img src="img/blog/2.jpg" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									<a href="#0">Trends</a>
								</h6>
								<h4>
									<a href="#0">Master These Awesome New Skills in March 2018</a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>

						<div class="pitem">
							<div class="post-img">
								<img src="img/blog/3.jpg" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									<a href="#0">Themeforest</a>
								</h6>
								<h4>
									<a href="#0">The 20 Best Lightroom Presets You Need to Know About</a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>

						<div class="pitem">
							<div class="post-img">
								<img src="img/blog/4.jpg" alt="">
							</div>
							<div class="content">
								<h6 class="tag">
									<a href="#0">Trends</a>
								</h6>
								<h4>
									<a href="#0">Best Design Items to Appeal to the Millennial Generation</a>
								</h4>
								<span class="more">
									<a href="#0">Read More</a>
								</span>
							</div>
						</div>
					</div>

				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Blog ======-->

		

		<!--====== Contact ======-->
		<section class="contact section-padding bg-gray" data-scroll-index="6">
			<div class="container">
				<div class="row">
					
					<!-- section heading -->
					<div class="section-head">
						<h3>Связаться со мной.</h3>
					</div>

					<div class="col-md-offset-1 col-md-10">

						<!-- contact info -->
						<div class="info text-center mb-50">

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span>
									<h6>Тел.</h6>
									<p><a href="tel:+7 921 52 44 781">+7 921 52 44 781</a></p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
									<h6>Соцсети</h6>
									<p>
										<!-- social icons -->
			          		<div class="social-icon">
											<a href="//vk.com/nastya_karelskaya" target="_blank">
												<span><i class="fa fa-vk" aria-hidden="true"></i></span>
											</a>
											<a href="//www.instagram.com/nastya_karelskaya/" target="_blank">
												<span><i class="fa fa-instagram" aria-hidden="true"></i></span>
											</a>
											<a href="//t.me/@nastya_karelskaya" target="_blank">
												<span><i class="fa fa-telegram" aria-hidden="true"></i></span>
											</a>
											<a href="//www.linkedin.com/comm/in/nastya-karelskaya" target="_blank">
												<span><i class="fa fa-linkedin" aria-hidden="true"></i></span>
											</a>
											<a href="//www.facebook.com/nastya.karelskaya" target="_blank">
												<span><i class="fa fa-facebook" aria-hidden="true"></i></span>
											</a>
			          		</div>
									</p>
								</div>
							</div>

							<div class="col-md-4">
								<div class="item">
									<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
									<h6>Email</h6>
									<p><a href="mailto:nastya89215244781@yandex.ru">nastya89215244781@yandex.ru</a></p>
								</div>
							</div>

							<div class="clearfix"></div>
						</div>

						<!-- contact form -->
						<form class="form" id="contact-form" method="post" action="contact.php">
							<div class="messages"></div>

							<div class="controls">

									<div class="row">
											<div class="col-md-6">
													<div class="form-group">
															<input id="form_name" type="text" name="name" placeholder="Имя" required="required">
													</div>
											</div>

												<div class="col-md-6">
													<div class="form-group">
															<input id="form_email" type="email" name="email" placeholder="Email" required="required">
													</div>
											</div>
									</div>
									<div class="row">
											<div class="col-md-12">
													<div class="form-group">
															<textarea id="form_message" name="message" placeholder="Сообщение" rows="4" required="required"></textarea>
													</div>

													<input type="submit" value="Отправить" class="buton buton-bg">
											</div>
									</div>
							</div>
						</form>

					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Contact ======-->



<?php

get_footer();
