<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package apavlova-theme
 */

get_header();
?>

<body>

	<!--====== 404 Error ======-->
	<section class="error bg-img" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/header-2.jpg';?>);" data-stellar-background-ratio="0.8">
		<div class="v-middle">
			<div class="container">
				<div class="row">
					
					<div class="text-center">
						<h2>404!</h2>
						<h5>Страница не найдена</h5>
						<p>Похоже страница, которую вы ищете, затерялась в недрах хостинга. </p>

						<!-- <form>
							<input type="search" name="" placeholder="Что будем искать?">
						</form> -->

						<?php //get_search_form(); ?>

						<!-- <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
							
							<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s"  placeholder="Что будем искать?"/>
							<input type="submit" id="searchsubmit" value="найти" />
						</form> -->

						<a href="/"><i class="fa fa-arrow-left" aria-hidden="true"></i> Вернуться на главную</a>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--====== End 404 Error ======-->


<?php
get_footer();
