<?php
/**
 * The template for displaying all pages.
 * Template Name: About 
 * @package nexus_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <div class="hero-wrapper"> 
        <div class="hero-image">
          <h1 class="about-title"> About Us <h1>
          <div class="underline"></div>
        </div>
      </div>
      
      <div class="mission-wrapper">
      <?php while ( have_posts() ) : the_post(); ?>
            <h2 class="title"> Send Us a Message</h2>
            <div class="underline"></div>
            <div class="contact-content">	<?php get_template_part( 'template-parts/content', 'page' ); ?>
            <?php endwhile;  ?>
          <h2> Our Mission </h2>
            <div class="underline"></div>
             <p> All success stories have a common structure that helps dreams vecome reality. We believe that orientation, experience, and teamwork are the most powerful tools availale to achieve success. Our passion is to help every person learn to prepare a powerful action-plan and execute their life-changing journey of living in Canada effectively. </p>
      </div>


      <div class="about-help">
      <h2> How We Help</h2><br>
      <div class="underline"></div>
      </div>
     
<div class="about-wrapper">
<div class="about-left">
    <img class="about-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/01@2x.png" />
    <p><span class="about-titles">Planning and Organizing</span> <br>We are passionate about graphic design and bring it to life and pride ourselves on creating memorable experiences. </p>
    <img class="path-img-left" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/Path-2@3x.png" /></div>

    
<div class="about-right">
    <p><span class="about-titles">Applying for School</span><br>We are passionate about graphic design and bring it to life and pride ourselves on creating memorable experiences.</p>
    
    <img class="about-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/02@2x.png" /><img class="path-img-right" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/Path-4@3x.png" /></div>

<div class="about-left">
<img class="about-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/03@2x.png" />
    <p><span class="about-titles">Preparing for Arrival</span><br>We are passionate about graphic design and bring it to life and pride ourselves on creating memorable experiences.</p><img class="path-img-left" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/Path-2@3x.png" /></div>

<div class="about-right">
  <p class="about-how-help-text"><span class="about-titles">First Days om Canada</span><br>We are passionate about graphic design and bring it to life and pride ourselves on creating memorable experiences. </p><img class="about-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/04@2x.png" /><img class="path-img-right" src="<?php echo get_bloginfo( 'template_directory' ); ?>/assets/images/Path-4@3x.png" /></div>

<div class="about-left">
<img class="about-img" src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/05@2x.png" />
  <p><span class="about-titles">Living in Canada</span><br>We are passionate about graphic design and bring it to life and pride ourselves on creating memorable experiences. </p></div>
</div>


  <div class="about-consultants">
      <h2>  Our Education Consultants</h2><br>
      <div class="underline"></div>
      <img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/TeamMember01@2x.png" />
      <h3>Rafael Schafer Marques </h3>
      <p> Director of International Studies </p>
      <a href="http://www.facebook.com/rafacanada"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="mailto:rafael@nexusintercambio.com.br"><i class="fa fa-envelope" aria-hidden="true"></i></a>
      <a href="http://br.linkedin.com/in/rafacanada/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
</div>

<div class="about-consultants">
<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/TeamMember02@3x.png" />
      <h3> Carolina Robeiro </h3>
      <p> Advisor</p>
      <a href="http://www.facebook.com/carolribeiro.3551/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
      <a href="mailto:carol@nexusintercambio.com.br"><i class="fa fa-envelope" aria-hidden="true"></i></a>
     <i class="fa fa-linkedin-square" aria-hidden="true"></i>
</div>


<div class="about-journey">
      <h2> Start Your Journey<h2><br>
      <div class="underline"></div>
      <p>Let us help you find your path to success</p>
      <button class="consult">Book Consult</button>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer();?>