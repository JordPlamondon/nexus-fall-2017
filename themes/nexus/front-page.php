<?php
/**
 * The home page template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="banner">
				<div class="banner__info">
					<p class="banner__info__p"> Dreaming Of </p>
					<h1 class="banner__info__h1">Canada?</h1>
				</div>	
					<p class="banner__p">Let us help you find <span class="banner__p__span">the right </span>program and school for you.
					</p>
			</div>
		

			<div class="why-nexus">
				<h2 class="why-nexus__header">Why Use Nexus?</h2>
				<div class="underline"></div>
				<p class="why-nexus__info">
				All success stories have a common structure that helps dreams become reality. We believe that orientation, experience, and teamwork is the most powerful tools available to achieve success. Our passion is to help every person learn to prepare a powerful action-plan and execute their life-changing journey of living in Canada effectively.
				</p>

				<button class="why-nexus__button">About Us</button>

			</div>


			<div class="why-canada">
				<h2 class="why-canada__header">Why Canada</h2>
				<div class="underline"></div>
				<h3 class="why-canada__subheader">Quality of Life</h3>
				<p class="why-canada__info">
				So as most people will know by now, i am doing a backpacking adventure over the next month. Really, i'm not entirely sure what drove me to this. While iImay have my…
				</p>
			</div>


			<div class="browse-programs">
				<h2 class="browse-programs__header">Browse Programs in: </h2>
				<div class="underline"></div>
				<div class="browse-programs__subheading">BC <button class="bracket">></button></div>
				<div class="browse-programs__subheading">Ontario <button class="bracket">></button></div>
				<div class="browse-programs__subheading">Alberta <button class="bracket">></button></div>
				<div class="browse-programs__subheading">Quebec <button class="bracket">></button></div>
				<div class="browse-programs__subheading">Manitoba <button class="bracket">></button></div>
				<div class="browse-programs__subheading">Saskatchewan <button class="bracket">></button></div>

				<p class="browse-programs__info1">
				blablabla blabl abla bl ab lablabl ablabla blabla bla b l ablablabl ablabla blablabla.
				</p>
			</div>






		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

