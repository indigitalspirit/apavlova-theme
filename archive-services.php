<?php
/**
 * The template for displaying services page
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

<?php
//get_sidebar();
get_footer();
