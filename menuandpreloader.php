		
	<body <?php body_class(); ?>>
		<!-- ====== Preloader ======  -->
		<div class="loading">
			<div class="load-circle">
			</div>
		</div>
		<!-- ======End Preloader ======  -->


		<nav id="site-navigation" class="main-navigation navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-icon-collapse" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- logo -->
					<a class="logo" href="//anastasia-pavlova.com">
						<span class="big-logo">Анастасия Павлова</span>
						<span class="small-logo">АП</span>
					</a>

				</div>

				<!-- Collect the nav links, and other content for toggling -->
				<div class="collapse navbar-collapse" id="nav-icon-collapse">
					
					<!-- links -->
						<!-- <ul class="nav navbar-nav navbar-right">
							<li><a href="#" data-scroll-nav="0" class="active">Главная</a></li>
							<li><a href="#" data-scroll-nav="1">Обо мне</a></li>
							<li><a href="#" data-scroll-nav="2">Услуги</a></li>
							<li><a href="#" data-scroll-nav="3">Портфолио</a></li>
							
							<li><a href="#" data-scroll-nav="6">Контакты</a></li>
						</ul> -->
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->

				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'apavlova-theme' ); ?></button> -->		

		</nav>
		<!-- #site-navigation -->