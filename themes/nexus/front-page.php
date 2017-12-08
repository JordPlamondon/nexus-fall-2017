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
		
		 <section class="nexus-wrapper">
			<div class="why-nexus">
				<h2 class="why-nexus__header">Why Use Nexus?</h2>
				<div class="underline"></div>
				<p class="why-nexus__info">
				All success stories have a common structure that helps dreams become reality. We believe that orientation, experience, and teamwork is the most powerful tools available to achieve success. Our passion is to help every person learn to prepare a powerful action-plan and execute their life-changing journey of living in Canada effectively.
				</p>

				<button class="why-nexus__button">About Us</button>
			</div>
		</section>


		<section class="choose-wrapper">
			<div class="choose-program">
				<div class="choose-program__info-wrapper">
					<h2 class="choose-program__header">Choose your Program</h2>
					<div class="underline"></div>
					<p class="choose-program__info">
					Nexus has partnered up with over 100 different programs.
					</p>

					<button class="choose-program__button">Programs</button>
				</div>	
			</div>
		</section>


			<section class="why-canada">
				<h2 class="why-canada__header">Why Canada</h2>
				<div class="underline"></div>
					<div class="owl-carousel owl-theme">
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">Quality of Life</h3>
							<p class="carouselplaceholder__info">
							So as most people will know by now, i am doing a backpacking adventure over the next month. Really, i'm not entirely sure what drove me to this. While iImay have my…
							</p>
						</div>
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">Fresh Air</h3>
							<p class="carouselplaceholder__info">
							The air is super fresh. It's the best think you've ever smelled, it's like crack smoke, man, I'm tellin' ya. This one time, my buddy and I were walking to the trap and we saw...
							</p>
						</div>
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">Awesome People</h3>
							<p class="carouselplaceholder__info">
							The people are super fresh. It's the best think you've ever smelled, it's like crack smoke, man, I'm tellin' ya. This one time, my buddy and I were walking to the trap and we saw...
							</p>
						</div>
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">Good Weed</h3>
							<p class="carouselplaceholder__info">
							The weed is super fresh. It's the best think you've ever smelled, it's like crack smoke, man, I'm tellin' ya. This one time, my buddy and I were walking to the trap and we saw...
							</p>
						</div>
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">Hipster Central</h3>
							<p class="carouselplaceholder__info">
							The hipsters are super fresh. It's the best think you've ever smelled, it's like crack smoke, man, I'm tellin' ya. This one time, my buddy and I were walking to the trap and we saw...
							</p>
						</div>
						<div class="carouselplaceholder">
							<h3 class="carouselplaceholder__subheader">RED Academy</h3>
							<p class="carouselplaceholder__info">
							The education is super fresh. It's the best think you've ever smelled, it's like crack smoke, man, I'm tellin' ya. This one time, my buddy and I were walking to the trap and we saw...
							</p>
						</div>
					</div>
					<div class="curious">
						<h2 class="curious__subheader">Curious About Canada?</h2>
						<button class="curious__button">Visit FAQ Section</button>
					</div>
				</section>


			<section class="browse-programs">
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
			</section>

			<section class="choose-province-wrapper">
				<div class="choose-province">
					<h2 class="choose-province__header">Choose a Province</h2>
					<div class="underline"></div>
					<p class="choose-province__info">
						Fusce tempor felis lacus, a hendrerit urna facilisis at. 
					</p>
					<button class="choose-province__button">About Us</button>
				</div>
			</section>

			<section class="student-review">
				<h2 class="student-review__header">Student's Review</h2>
				<div class="underline"></div>
				<div class="student-review__box">
					<img src=<?php echo get_template_directory_uri() . '/assets/images/photo_review.png'?>
					alt="Picture of a Student">
					<p class="student-review__info">
					Thank you so much for your help! I couldn’t have done this trip without you.
					</p>
				</div>
			</section>
			
			<section class="start-journey">
				<h2 class="start-journey__header">Start your journey</h2>
				<div class="underline"></div>
				<h3 class="start-journey__subheader">Let us help you find your path to success</h3>

				<button class="start-journey__button">Book Consult</button>
			</section>





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

<?php get_footer(); ?>
