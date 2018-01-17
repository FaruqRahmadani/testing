<?php get_header(); ?>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Add your site or application content here -->
		<div id="btn-resv">
			<span onclick="openNav()" class="glyphicon glyphicon-align-justify" style="display: none"></span>
		</div>


		<div id="menu-resv" class="overlay">
		  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>&times;</span></a> -->
			<div id="cls-resv">
				<span onclick="closeNav()">&times;</span>
			</div>

			<div class="overlay-content">
				<ul>
					<li><a href="#home" class="page-scroll" onclick="closeNav()">HOME</a></li>
					<li><a href="#about" class="page-scroll" onclick="closeNav()">ABOUT</a></li>
					<?php
						$args = array(
							'theme_location' 	=> 'main_menu',
							'container'				=> false,
							'items_wrap' => '%3$s',
						);
						wp_nav_menu($args);
					?>
					<li><a href="#service" class="page-scroll" onclick="closeNav()">SERVICE</a></li>
					<li><a href="#our-team" class="page-scroll" onclick="closeNav()">OUR TEAM</a></li>
					<li><a href="#contact" class="page-scroll" onclick="closeNav()">CONTACT</a></li>
				</ul>
			</div>
		</div>

		<header class="large">
			<div class="container">
				<div class="logo pull-left">
					<img src="<?= get_template_directory_uri() ?>/img/logo2.png" alt="Sembilan"/ class="animate">
				</div>

				<nav class="navbar">
					<div class="container">
						<ul class="nav navbar-nav pull-right">
							<li><a href="#home" class="page-scroll" onclick="closeNav()">HOME</a></li>
							<li><a href="#about" class="page-scroll" onclick="closeNav()">ABOUT</a></li>
								<?php
									$args = array(
										'theme_location' 	=> 'main_menu',
										'container'				=> false,
										'items_wrap' => '%3$s',
									);
									wp_nav_menu($args);
								?>
							<li><a href="#service" class="page-scroll" onclick="closeNav()">SERVICES</a></li>
							<li><a href="#our-team" class="page-scroll" onclick="closeNav()">OUR TEAMS</a></li>
							<li><a href="#contact" class="page-scroll" onclick="closeNav()">CONTACT</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</header>

		<div id="main">

		<!-- <div class="hero-image"></div> -->

		<section id="showslide">
			<div class="container">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php
							$index = 0;
							$query = new WP_Query( array( 'category_name' => 'Slider' ) );
							if( $query->have_posts() ):
								while( $query->have_posts() ): $query->the_post();
									if( has_post_thumbnail() ):
						?>
						<li data-target="#myCarousel" data-slide-to="<?= $index ?>" class="
							<?php
								$index == 0 ? print 'active' : '';
								$index+=1;
							?>
						">
						</li>
						<?php
									endif;
								endwhile;
							else:
						?>
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<?php
							endif;
						?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<?php
							$index = 1;
							$query = new WP_Query( array( 'category_name' => 'Slider' ) );
							if( $query->have_posts() ):
								while( $query->have_posts() ): $query->the_post();
									if( has_post_thumbnail() ):
						?>
							<div class="item
								<?=
									$index == 1 ? 'active' : ''
								 ?>
							 ">
								<?php
									$id = get_post_thumbnail_id();
								?>
								<img src="<?= wp_get_attachment_url($id); ?>" alt="<?= $index ?>" style="width:100%;">
							</div>
						<?php
										$index+=1;
									endif;
								endwhile;
							else:
							?>
								<img src="<?= get_template_directory_uri() ?>/img/slides/slide1.JPG" alt="<?= $index ?>" style="width:100%;">
							<?php
							endif;
						?>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						<span class="glyphicon g/lyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<!-- ABOUT -->
		<div id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="<?= get_template_directory_uri() ?>/img/about2.jpg" alt="thumb">
					</div>

					<div class="col-md-6">
						<h1 class="title">About Us</h1>
						<p><strong>Sembilan Organizer</strong> merupakan perusahaan kreatif di Kota Banhjarbaru - Kalimantan Selatan.</p>
					</div>
				</div>
			</div>
		</div>

		<div id="service">
			<div class="container">
				<div class="row">
					<h1 class="title text-center">Service</h1>
					<div class="col-md-3">
						<div class="service-item">
							Creative Events
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Creative Business Plan
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Party Planner
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Wedding Planner
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Rent Equipment
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Event Production
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Interior Design
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Exterior Design
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Photography
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Camera Cinematography
						</div>
					</div>
					<div class="col-md-3">
						<div class="service-item">
							Advertising
						</div>
					</div>

					<div class="col-md-3">
						<div class="service-item">
							And Others...
						</div>
					</div>
				</div>


			</div>
		</div>

		<!-- PARTNER -->
		<div id="client">
			<div class="container text-center">
				<div class="row">
					<div class="col-md-12">
						<h1 class="title text-center">Clients</h1>
						<ul class="list-client">
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
              <li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
							<li><img src="<?= get_template_directory_uri() ?>/img/client.png" alt=""></li>
						</ul>
					</div>
					<!-- <div class="text-center" >
						<a href="#" class="all-client">Show All</a>
					</div> -->
				</div>
			</div>
		</div>

		<!-- TEAM -->
		<div id="our-team">
			<div class="container">
				<h1 class="title text-center">Our Team</h1>
				<div class="row">
					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/male1.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">CEO</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/female1.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/male2.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/female2.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/male3.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/male1.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/female3.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>

					<div class="col-md-3 col-xs-6 text-center">
						<div class="team">
							<img src="<?= get_template_directory_uri() ?>/img/team/female1.png" alt="Team" class="img-circle img-team"/>
							<span class="name">Full Name</span>
							<span class="job">Crew</span>
					    </div>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
