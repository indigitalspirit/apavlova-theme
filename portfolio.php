<?php 
/*
Template Name: Шаблон страницы каталога
Template Post Type: catalog
*/

?>

<!-- Здесь html/php код шаблона -->

<?php 
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
					
					<div class="col-md-8">
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

					<div class="col-md-4">
						<div class="side-bar">
							<!-- <div class="widget search">
								<form>
									<input type="search" name="" placeholder="Type here ...">
									<button type="submite"><i class="fa fa-search" aria-hidden="true"></i></button>
								</form>
							</div> -->

							<div class="widget">
								<div class="widget-title">
									<h6>Услуги</h6>
								</div>
								<ul>
									<li><a href="#0">Top WordPress Themes and Plugins for Hotels.</a></li>
									<li><a href="#0">Master These Awesome New Skills in March.</a></li>
									<li><a href="#0">he 20 Best Lightroom Presets You Need.</a></li>
									<li><a href="#0">Best Design Items to Appeal to the Millennial.</a></li>
									<li><a href="#0">Stander Post With Image.</a></li>
								</ul>
              </div>


              <div class="widget">
								<div class="widget-title">
									<h6>Портфолио</h6>
								</div>
								<ul>
									<li><a href="#0">Top WordPress Themes and Plugins for Hotels.</a></li>
									<li><a href="#0">Master These Awesome New Skills in March.</a></li>
									<li><a href="#0">he 20 Best Lightroom Presets You Need.</a></li>
									<li><a href="#0">Best Design Items to Appeal to the Millennial.</a></li>
									<li><a href="#0">Stander Post With Image.</a></li>
								</ul>
              </div>




              <div class="widget">
								<div class="widget-title">
									<h6>Заказать</h6>
                </div>
                <div>соцсети со ссылками в сообщения</div>
								<div>

                </div>
              </div>
              


              <div class="comment-form">
								

								<form class="form" id="contact-form" method="post" action="" novalidate="true">

				                    <div class="controls">

				                        <div class="row">
				                            <div class="col-12">
				                                <div class="form-group">
				                                    <input id="form_name" type="text" name="name" placeholder="Name" required="required">
				                                </div>
				                            </div>

				                             <div class="col-12">
				                                <div class="form-group">
				                                    <input id="form_email" type="email" name="email" placeholder="Email" required="required">
				                                </div>
				                            </div>
				                     
				                            <div class="col-12">
				                                <div class="form-group">
				                                    <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
				                                </div>

				                                <input type="submit" value="Submit" class="buton buton-bg disabled">
				                            </div>
				                        </div>
				                    </div>
				                </form>
							</div>

							<!-- <div class="widget">
								<div class="widget-title">
									<h6>Recent Comments</h6>
								</div>
							</div>

							<div class="widget">
								<div class="widget-title">
									<h6>Archives</h6>
								</div>
								<ul>
									<li><a href="#0">January 2018</a></li>
									<li><a href="#0">February 2018</a></li>
									<li><a href="#0">March 2018</a></li>
								</ul>
							</div>

							<div class="widget">
								<div class="widget-title">
									<h6>Categories</h6>
								</div>
								<ul>
									<li><a href="#0">WordPress</a></li>
									<li><a href="#0">ThemeForest</a></li>
								</ul>
							</div>

							<div class="widget">
								<div class="widget-title">
									<h6>Meta</h6>
								</div>
								<ul>
									<li><a href="#0">Log in</a></li>
									<li><a href="#0">Entries RSS</a></li>
									<li><a href="#0">Comments RSS</a></li>
									<li><a href="#0">WordPress.org</a></li>
								</ul>
							</div> -->

						</div>
					</div>

				</div>
			</div>
		</section>
		<!--====== End Blog ======-->


<?php
get_footer(); 
?>