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
					<?php 
						$apavlova_theme_services_args = array( 'post_type' => 'services' );

						$apavlova_theme_services_query = new WP_Query( $apavlova_theme_services_args );
						
						while ( $apavlova_theme_services_query->have_posts() ) {
							$apavlova_theme_services_query->the_post();

					?>

						<div class="col-md-4">
							<div class="item">
								<span class="icon">иконка<i class="fa fa-code" aria-hidden="true"></i></span>
								<h6><?php the_title(); ?></h6>
								<p><?php the_excerpt(); ?></p>
							</div>
						</div>

					<?php			
						}
						wp_reset_postdata();
					?>


					<!-- <div class="col-md-4">
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
					</div> -->
					
					
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


					<!-- gallery -->
					<div class="gallery text-center">

						<!-- gallery item -->
						<?php 
							$apavlova_theme_portfolio_args = array( 'post_type' => 'portfolio', 'post_per_page' => 6 );

							$apavlova_theme_portfolio_query = new WP_Query( $apavlova_theme_portfolio_args );
							
							while ( $apavlova_theme_portfolio_query->have_posts() ) {
								$apavlova_theme_portfolio_query->the_post();

						?>

						<div class="col-md-4 col-sm-6 items">
							<div class="item-img">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="фото поста">
								<div class="item-img-overlay">
									<div class="overlay-info v-middle text-center">
										<h6 class="sm-titl"><?php the_title(); ?></h6>
										<div class="icons">
											<span class="icon ">
												<a href="<?php the_permalink(); ?>" class="open-popup">
													<i class="fa fa-search-plus" aria-hidden="true"></i>
												</a>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="portfolio-popup popup-window mfp-hide">
								<div class="popup-header">
										<div class="popup-title">
											<h5>
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
								</div>
							</div>  <!-- ./portfolio-item -->
						</div>

						<?php			
							}
							wp_reset_postdata();
						?>

						<div class="clearfix"></div>
						<a href="/portfolio" data-scroll-nav="6" class="portfolio-all_buton" target="_blank">
							<span class="buton">Посмотреть все</span>
						</a>
						


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


			

		<!--====== Contact ======-->
		<section class="contact section-padding" data-scroll-index="6">
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
