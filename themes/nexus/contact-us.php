<?php
/**
 * The template for displaying all pages.
 * Template Name: Contact
 * 
 * @package RED_Starter_Theme
 */
get_header(); ?>


<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="hero-wrapper"> 
        <div class="hero-image">
          <h1 class="about-title">Contact Us <h1>
          <div class="underline"></div>
        </div>
      </div>

<div class="contact-form">
<?php while ( have_posts() ) : the_post(); ?>
            <h2 class="title"> Send Us a Message</h2>
            <div class="underline"></div>
            <div class="contact-content">	<?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile;  ?>
</div>



      <div class="contact-journey">
      <h2> Start Your Journey<h2><br>
      <div class="underline"></div>
      <p>Let us help you find your path to success</p>
      <button class="consult">Book Consult</button>
      </div>





<?php get_footer();?>