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
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!-- ====== End Services ======  -->

<?php
//get_sidebar();
get_footer();
