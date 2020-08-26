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

					<?php 

						$apavlova_theme_portfolio_categories = get_categories( [
							'taxonomy'     => 'categoriya_portfolio',
							'type'         => 'portfolio',
							'child_of'     => '',
							'parent'       => '',
							'orderby'      => 'name',
							'order'        => 'DESC',
							'hide_empty'   => 0,
							'hierarchical' => 0,
							'exclude'      => '',
							'include'      => '',
							'number'       => 0,
							'pad_counts'   => false,
							// полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
						] );

						if( $apavlova_theme_portfolio_categories ) {

						?>

						<!-- filter links -->
						<div class="filtering text-center mb-50">
						<span data-filter='*' class="active">Все</span>
						

						<?php

							$categories_counter = 0;
							
							foreach( $apavlova_theme_portfolio_categories as $category ) {
								//$categories_counter = 0;
							
								if( $category->name != 'Без рубрики' ) {

						?>

									<span data-filter="<?php echo '.' . $category->slug; ?>">
										<?php echo $category->name; ?>
									</span>

						<?php
								}
							}
						?>

						<!-- <span data-filter='.wordpress'>WordPress</span> -->
						</div>

						<?php
						}

						?>

					
					

					<!-- gallery -->
					<div class="gallery text-center">

						<!-- gallery item -->
						<?php 
											
							$apavlova_theme_portfolio_args = array( 'post_type' => 'portfolio' );

							$apavlova_theme_portfolio_query = new WP_Query( $apavlova_theme_portfolio_args );

							while ( $apavlova_theme_portfolio_query->have_posts() ) {
								$apavlova_theme_portfolio_query->the_post();

						?>

						<?php 
							$portfolio_taxonomies = wp_get_post_terms( get_the_id(), 'categoriya_portfolio', array('fields' => 'all') );
							
							$portfolio_taxonomies_slug = '';
							foreach( $portfolio_taxonomies as $taxonomy ) {
								$portfolio_taxonomies_slug .= ' ' . $taxonomy->slug;
							}
						?>
						<div class="col-md-4 col-sm-6 items <?php echo $portfolio_taxonomies_slug; ?>">
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

					</div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section>
		<!--====== End Portfolio ======-->

		

<?php
//get_sidebar();
get_footer();
