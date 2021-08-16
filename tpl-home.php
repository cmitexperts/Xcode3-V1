<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package xcode3
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="x3-hero-sec">
		<div class="container">
			<div class="x3-hero-content" data-aos="fade-up">
				<h1>What is Lorem Ipsum?</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and
					typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
					an
					unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<a href="#" class="btn btn-primary">CONTACT US</a>
			</div>
		</div>
	</section>

	<section class="x3-business-sec">
		<div class="container" data-aos="fade-up">
			<h2 class="section-title">BUSINESS SOLUTIONS</h2>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="solution-box">
							<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/design.png" width=""
								height="" alt="" /></div>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<a href="#">READ MORE...</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solution-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/design.png" width=""
								height="" alt="" /></div>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<a href="#">READ MORE...</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solution-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/design.png" width=""
								height="" alt="" /></div>
						<h4>Lorem Ipsum</h4>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						<a href="#">READ MORE...</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="x3-about-sec x3-blue-bg wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">
		<div class="container" data-aos="fade-up">
			<h2 class="section-title">About Us</h2>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
						scrambled it to make a type specimen book.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
						industry's standard dummy text ever since the 1500s, when an unknown printer</p>
					<p><strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
							been the industry's standard.</strong></p>
					<a href="#" class="btn btn-primary read-more-btn">Read More</a>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="img-box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/about-img.jpg" width="" height="" alt=""
							class="img-fluid" />
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="x3-home-post-sec">
		<div class="container" data-aos="fade-up">
			<h2 class="section-title">Recent Posts</h2>
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="solution-box x3-post-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/recent-post-img.jpg"
								width="" height="" alt="" /></div>
						<div class="content-box">
							<h4>Lorem Ipsum Dolor</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<a href="#">READ MORE...</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solution-box x3-post-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/recent-post-img.jpg"
								width="" height="" alt="" /></div>
						<div class="content-box">
							<h4>Lorem Ipsum Dolor</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<a href="#">READ MORE...</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="solution-box x3-post-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/recent-post-img.jpg"
								width="" height="" alt="" class="img-fluid" /></div>
						<div class="content-box">
							<h4>Lorem Ipsum Dolor</h4>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<a href="#">READ MORE...</a>
						</div>
					</div>
				</div>
			</div>
			<div class="read-btn-wrap"><a href="#" class="btn btn-primary read-more-btn">View More</a></div>
		</div>
	</section>

	<section class="x3-testi-sec x3-blue-bg">
		<div class="container" data-aos="fade-up">
			<h2 class="section-title">TESTIMONIALS</h2>
			<div class="owl-carousel" id="x3-home-testi">
				<div class="item">
					<div class="testi-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.png"
								width="" height="" alt="" class="img-fluid" /></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
							dummy text of the printing and typesetting industry.</p>
						<div class="nameDesignation">
							<h5>JOHN DOE</h5>
							<h6>Project Manager</h6>
						</div>
						<div class="avatar-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/testi-img.png" width="" height=""
								alt="" class="img-fluid" />
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.png"
								width="" height="" alt="" class="img-fluid" /></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
							dummy text of the printing and typesetting industry.</p>
						<div class="nameDesignation">
							<h5>JOHN DOE</h5>
							<h6>Project Manager</h6>
						</div>
						<div class="avatar-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/testi-img.png" width="" height=""
								alt="" class="img-fluid" />
						</div>
					</div>
				</div>
				<div class="item">
					<div class="testi-box">
						<div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/quote-icon.png"
								width="" height="" alt="" class="img-fluid" /></div>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
							dummy text of the printing and typesetting industry.</p>
						<div class="nameDesignation">
							<h5>JOHN DOE</h5>
							<h6>Project Manager</h6>
						</div>
						<div class="avatar-img">
							<img src="<?php echo get_template_directory_uri(); ?>/images/testi-img.png" width="" height=""
								alt="" class="img-fluid" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</main><!-- #main -->


<?php
get_footer();