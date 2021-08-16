<?php
/**
 * Template Name: Contact Us
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
  <section class="x3-contact-hero-sec x3-hd-bg">
    <div class="container">
      <h1 data-aos="fade-up">Contact Us</h1>
    </div>
  </section>
  <section class="xc-contact-form">
    <div class="container">
      <div class="row">
        <div class="col-md-5" data-aos="fade-right">
          <div class="xc-contact-form-right-content">
            <ul>
              <h3 class="mb-3 mt-4">Address</h3>
              <p class="mb-4">Where does it come from?</p>
              <li>
                <div class="xc-icon"><i class="fa fa-map-marker-alt"></i></div>
                <div class="xc-social-content"><strong> OUR LOCATION</strong><a href="#">lorem lupsum content here 1458778</a></div>
              </li>
              <li>
                <div class="xc-icon"><i class="fas fa-envelope-open"></i></div>
                <div class="xc-social-content"><strong> SEND US EMAIL</strong><a href="mailto:xcode3@gmail.com">xcode3@gmail.com</a></div>
              </li>
              <li>
                <div class="xc-icon"><i class="fa fa-phone"></i></div>
                <div class="xc-social-content"><strong> CALL US</strong><a href="tel:+4559868764">+4559868764</a></div>
              </li>
              <li>
                <div class="xc-icon"><i class="fas fa-envelope-open"></i></div>
                <div class="xc-social-content"><strong> SEND US EMAIL</strong><a href="mailto:xcode3@gmail.com">xcode3@gmail.com</a></div>
              </li>
              <li>
                <div class="xc-icon"><i class="fa fa-phone"></i></div>
                <div class="xc-social-content"><strong> CALL US</strong><a href="tel:+4559868764">+4559868764</a></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-7" data-aos="fade-left">
          <div class="xc-contact-form-left-content">
            <h2 class="mb-3">Need Help?</h2>
            <p class="mb-3">Where does it come from?</p>
            <?php echo do_shortcode( '[contact-form-7 id="58" title="xc-contact-form"]' ); ?> </div>
        </div>
      </div>
    </div>
    
  </section>
</main>
<!-- #main -->

<?php
get_footer();

