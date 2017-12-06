<?php
/**
 * The template for displaying all pages.
 * Template Name: About 
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="hero-image"></div>
      <h1>How We Help</h1>
<div class="about-right"> Our Mission 
      <p class="about-mission-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard  </p></div>


<div class="about-left">
  <h2> How we help</h2><br>
<img class="about-img"  src="http://fillmurray.com/200/300">
    <p class="about-how-help-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></div>


<div class="about-right">
  <h2> Applying for school </h2><br>
    <p class="about-how-help-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
    <img class="about-img" src="http://fillmurray.com/200/300"></div>

<div class="about-left">
  <h2> Preparing for arival </h2><br>
<img class="about-img" src="http://fillmurray.com/200/300">
    <p class="about-how-help-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>

<div class="about-right"><h2> First days in canada </h2><br>

  <p class="about-how-help-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p><img class="about-img" src="http://fillmurray.com/200/300"></div>

  <div class="about-left"><h2> Living in canada </h2><br>
<img class="about-img" src="http://fillmurray.com/200/300">
  <p class="about-how-help-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p></div>

<div class="about-consultants">
<h1> Our Consultants </h1>
<img src="http://fillmurray.com/200/300">



			<?php while ( have_posts() ) : the_post(); ?> 
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
