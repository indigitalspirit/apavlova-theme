<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apavlova-theme
 */

?>

	<!--====== Footer ======-->
	<footer style="background-image: url(<?php echo get_template_directory_uri() . '/assets/img/header-2.jpg';?>);">
		<div class="container text-center">
			<div class="row">
				<p>2018 &copy; Анастасия Павлова </p>
				<!-- Yandex.Metrika informer -->
				<a href="https://metrika.yandex.ru/stat/?id=50243827&amp;from=informer"
				target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/50243827/1_0_535353FF_333333FF_1_pageviews"
				style="width:80px; height:15px; border:0; margin-top: 5px;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" /></a>
				<!-- /Yandex.Metrika informer -->
			</div>
		</div>
	</footer>
	<!--====== End Footer ======-->

	<!--[if lt IE 9]-->
	<script src="js/html5shiv.min.js"></script>



<!-- </div> -->
<!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
