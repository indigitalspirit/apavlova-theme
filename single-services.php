<?php
/**
 * The template for displaying all services posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

		<!--====== Blog ======-->
		<section class="blogs section-padding">
			<div class="container">
				<div class="row">
					
					<div class="col-md-12">
						<div class="posts">

							<div class="post mb-80">
								<div class="post-img">
									<a href="#0">
                    <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                    
                  </a>
                  
                  <?php //apavlova_theme_post_thumbnail(); ?>
								</div>
								<div class="content text-center">
									<div class="post-meta">
										<!-- <div class="post-title">
											<h5>
												<a href="#0">Top WordPress Themes and Plugins for Hotels, Travel, and</a>
											</h5>
										</div> -->
										<ul class="meta">
											<!-- <li>
												<a href="#0">
													<i class="fa fa-user" aria-hidden="true"></i>
													<?php //echo get_the_author(); ?>
												</a>
											</li> -->
											<li>
												<a href="#0">
													<i class="fa fa-folder-open" aria-hidden="true"></i>
												
                        </a>
                        <?php the_category(); ?>
											</li>
											<!-- <li>
												<a href="#0">
													<i class="fa fa-calendar" aria-hidden="true"></i>
													<?php //echo get_the_date(); ?>
												</a>
											</li> -->
											<li>
												
													<i class="fa fa-tags" aria-hidden="true"></i>
													<?php the_tags(); ?>
												
											</li>
											<!-- <li>
												<a href="#0">
													<i class="fa fa-comments" aria-hidden="true"></i>
													0 Comments
												</a>
											</li> -->
										</ul>
									</div>

									<div class="post-cont">
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has Lorem Ipsum is simply dummy text been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<p class="spical">Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown pis simply dummy text of the and type setting industry. Lorem Ipsum has Lorem Ipsum is simply dummy text been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>

									<!-- <div class="share-post">
										<span>Share Post</span>
										<ul>
											<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
											<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
											<li><i class="fa fa-youtube" aria-hidden="true"></i></li>
											<li><i class="fa fa-google-plus" aria-hidden="true"></i></li>
										</ul>
									</div> -->

								</div>
							</div>

							<!-- <div class="comments-area mb-80">
								<div class="title-g mb-50">
									<h3>Comments</h3>
								</div>

								<div class="comment-box">
									<div class="author-thumb">
										<img src="img/blog/01.png" alt="">
									</div>
									<div class="comment-info">
										<h6><a href="#0">Alex Smith</a></h6>
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's</p>

										<div class="reply">
											<a href="#0">
												<i class="fa fa-reply" aria-hidden="true"></i>
												Reply
											</a>
										</div>
									</div>
								</div>

								<div class="comment-box">
									<div class="author-thumb">
										<img src="img/blog/02.png" alt="">
									</div>
									<div class="comment-info">
										<h6><a href="#0">Alex Smith</a></h6>
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's</p>

										<div class="reply">
											<a href="#0">
												<i class="fa fa-reply" aria-hidden="true"></i>
												Reply
											</a>
										</div>
									</div>
								</div>

								<div class="comment-box">
									<div class="author-thumb">
										<img src="img/blog/01.png" alt="">
									</div>
									<div class="comment-info">
										<h6><a href="#0">Alex Smith</a></h6>
										<p>Lorem Ipsum is simply dummy text of the and type setting industry. Lorem Ipsum has been the industry's</p>

										<div class="reply">
											<a href="#0">
												<i class="fa fa-reply" aria-hidden="true"></i>
												Reply
											</a>
										</div>
									</div>
								</div>

							</div>

							<div class="comment-form">
								<div class="title-g mb-50">
									<h3>Post A Comment</h3>
								</div>

								<form class="form" id="contact-form" method="post" action="">

				                    <div class="controls">

				                        <div class="row">
				                            <div class="col-md-6">
				                                <div class="form-group">
				                                    <input id="form_name" type="text" name="name" placeholder="Name" required="required">
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
				                                    <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
				                                </div>

				                                <input type="submit" value="Submit" class="buton buton-bg">
				                            </div>
				                        </div>
				                    </div>
				                </form>
							</div> -->

						</div>
					</div>


          


				</div>
			</div>
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
?>