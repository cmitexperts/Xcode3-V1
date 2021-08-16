<?php
/**
 * Template Name: About Us
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
   <section class="x3-about-hero-sec x3-contact-hero-sec">
      <div class="container" data-aos="fade-up">
         <h1>About Us</h1>
      </div>
   </section>

   <section class="x3-help-it">
      <div class="container" data-aos="fade-up">
         <div class="row">
            <div class="col-md-6">
               <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/man-laptop.jpg" alt="" />
                  <img src="<?php echo get_template_directory_uri(); ?>/images/man-on-laptop-login.jpg" width=""
                     height="" alt="" />
               </div>
            </div>
            <div class="col-md-6">
               <h2 class="section-title">Lorem Ipsum</h2>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book.</p>
               <div class="accordion" id="accordionExample">
                  <div class="card">
                     <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                              data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Collapsible Group Item
                           </button>
                        </h2>
                     </div>
                     <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           Some placeholder content for the first accordion panel. This panel is shown by default,
                           thanks to the class.
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                              aria-controls="collapseTwo">
                              Collapsible Group Item
                           </button>
                        </h2>
                     </div>
                     <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           Some placeholder content for the second accordion panel. This panel is hidden by default.
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                           <button class="btn btn-link btn-block text-left collapsed" type="button"
                              data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                              aria-controls="collapseThree">
                              Collapsible Group Item
                           </button>
                        </h2>
                     </div>
                     <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                           And lastly, the placeholder content for the third and final accordion panel. This panel is
                           hidden by default.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="x3-process-sec x3-blue-bg">
      <div class="container" data-aos="fade-up">
         <h2 class="section-title">Process</h2>
         <div class="row">
            <div class="col-lg-3 col-md-6">
               <div class="process-box">
                  <div class="item">
                     <div class="item-inner">
                        <div class="icon">
                           <!-- <i class="flaticon-select"></i> -->
                           <img src="<?php echo get_template_directory_uri(); ?>/images/graphics.png" alt="" />
                           <span>01</span>
                        </div>
                        <h5>Lorem Ipsum</h5>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="process-box">
                  <div class="item">
                     <div class="item-inner">
                        <div class="icon">
                           <!-- <i class="flaticon-select"></i> -->
                           <img src="<?php echo get_template_directory_uri(); ?>/images/web-design.png" alt="" />
                           <span>02</span>
                        </div>
                        <h5>Lorem Ipsum</h5>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="process-box">
                  <div class="item">
                     <div class="item-inner">
                        <div class="icon">
                           <!-- <i class="flaticon-select"></i> -->
                           <img src="<?php echo get_template_directory_uri(); ?>/images/web-development.png" alt="" />
                           <span>03</span>
                        </div>
                        <h5>Lorem Ipsum</h5>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6">
               <div class="process-box">
                  <div class="item">
                     <div class="item-inner">
                        <div class="icon">
                           <!-- <i class="flaticon-select"></i> -->
                           <img src="<?php echo get_template_directory_uri(); ?>/images/seo.png" alt="" />
                           <span>04</span>
                        </div>
                        <h5>Lorem Ipsum</h5>
                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="x3-team-sec">
      <div class="container" data-aos="fade-up">
         <h2 class="section-title">Meet Our Team</h2>
         <div class="x3-team-wrap">
            <div class="owl-carousel" id="x3-team-carousel">
               <div class="item">
                  <div class="img-box">
                     <div class="x3-team-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/man.png" alt="" />
                     </div>
                     <div class="content-box">
                        <h5>Sporia Deko</h5>
                        <h6>Marketing</h6>
                        <ul class="x3-social-icon">
                           <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="img-box">
                     <div class="x3-team-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kel.png" alt="" />
                     </div>
                     <div class="content-box">
                        <h5>Sporia Deko</h5>
                        <h6>Marketing</h6>
                        <ul class="x3-social-icon">
                           <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="img-box">
                     <div class="x3-team-img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/john.png" alt="" />
                     </div>
                     <div class="content-box">
                        <h5>Sporia Deko</h5>
                        <h6>Marketing</h6>
                        <ul class="x3-social-icon">
                           <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>



         <!-- <div class="row">
            <div class="col-md-4">
               <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/man.png" alt="" />
                  <div class="content-box">
                     <h5>Sporia Deko</h5>
                     <h6>Marketing</h6>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/kel.png" alt="" />
                  <div class="content-box">
                     <h5>Kel Sara</h5>
                     <h6>Project Manager</h6>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="img-box">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/john.png" alt="" />
                  <div class="content-box">
                     <h5>John Dey</h5>
                     <h6>CEO, co-founder</h6>
                  </div>
               </div>
            </div>
         </div> -->
      </div>
   </section>



</main><!-- #main -->


<?php
get_footer();