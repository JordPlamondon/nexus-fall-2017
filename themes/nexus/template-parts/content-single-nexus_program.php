<?php
/**
 * Template part for displaying single posts.
 *
 * @package nexus_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="single-program-container">
        
        <h2><?php echo get_post_meta($post->ID, '_nexus_program_school', true); ?></h2>

        <div class="header-wrapper">
            <h1 class="single-program-title"><?php echo get_post_meta($post->ID, '_nexus_program_title', true); ?></h2>
            <div class="underline-centered"></div>
        </div>

        <div class="program-meta">
            <div class="program-price">
                <p class="program-meta-category">Price</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_price', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
            <div class="program-duration">
                <p class="program-meta-category">Duration</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_duration', true); ?></p>
            </div>
            <div class="program-meta-seperator"></div>
            <div class="program-city">
                <p class="program-meta-category">City</p>
                <p class="program-meta-content"><?php echo get_post_meta($post->ID, '_nexus_program_city', true); ?></p>
            </div>
        </div>
    </section>

    <section class="program-flex-container about">
        
        <?php $about_image =  get_post_meta($post->ID, '_nexus_program_about_image', true); ?>
        <div class="left-side">
            <div class="header-wrapper">
                <h2 class="single-program-header">About Program</h2>
                <div class="title-underline"></div>
            </div>
            <p class="single-program-content"><?php echo get_post_meta($post->ID, '_nexus_program_about', true); ?></p>
        </div>
        <?php if( $about_image ):; ?>
            <div class="single-program-about-image"><img src="<?php echo $about_image; ?>"/></div>
        <?php endif; ?>
        
    </section>

    <section class="program-flex-container school">

         <?php $school_id = get_post_meta($post->ID, '_nexus_post_multicheckbox_school', true);?>
         <?php if($school_id):; ?>
         <?php
             $post_id = $school_id[0];
             $queried_post = get_post($post_id);
             $school_title = $queried_post->post_title;
             $school_media = get_post_meta($queried_post->ID, '_nexus_school_media', true);
         ?>
         
             <div class="school_media">
                 <?php echo $school_media; ?>
             </div>
             <div class="strong-side">
                 <div class="header-wrapper">
                     <h2 class="single-program-header"><?php echo $school_title; ?></h2>
                     <div class="title-underline"></d iv>
                 </div>
                 <p class="single-program-content"><?php echo $queried_post->post_content; ?></p>
             </div>
         <?php endif; ?>

     </section>


        <!-- Get City if post has a city linked to it -->

    <?php $city_id = get_post_meta($post->ID, '_nexus_post_multicheckbox_city', true);?>

    <?php
    if($city_id):;
        $entries = get_post_meta( $city_id[0], 'cities_repeat_group', true );
        $post_id = $city_id[0];
        $queried_post = get_post($post_id);
        $city_title = $queried_post->post_title;
        ?>
        <section>
            <h2 class="single-program-header"><?php echo $city_title; ?></h2>
            
            <?php 
            var_dump($entries);
            ?>
            <div class="city-carousel owl-carousel owl-theme">
                <?php
                foreach ( (array) $entries as $key => $entry ) :
                
	            $img = $title = $desc = ''; ?>

    	         <article class="city-container">

		            <!-- description -->
		            <?php
		            	if ( isset( $entry['description'] ) ) {
		            		$desc = wpautop( $entry['description'] );
		            	} ?>
		            	<div class="city-text">
		            		<?php echo $desc; ?>
		            	</div>

		            <!-- image -->
		            <?php
		            	if ( isset( $entry['image_id'] ) ) {
		            	$img = wp_get_attachment_image( $entry['image_id'], 'share-pick', null, array(
		            	'class' => 'thumb',
		            	) ); 
		            } ?>
                    <div class="city-image">
		            <?php echo $img; ?>
                    </div>
		        </article>
                
                <?php
                endforeach;
                ?>
                </div>
            </section>   
    <?php endif;?>
          
    <section class="read-more">
        <?php $terms = wp_get_post_terms( $post->ID, 'program_type' ); ?>
        <?php

        $custom_terms = get_terms('program_type');
        
        if( $custom_terms ):

        // going to hold our tax_query params
        $tax_query = array();

        // add the relation parameter (not sure if it causes trouble if only 1 term)
        if( count( $custom_terms > 1 ) )
            $tax_query['relation'] = 'OR' ;
        // loop through terms and build a tax query
        foreach( $custom_terms as $custom_term ):

            $tax_query[] = array(
                'taxonomy' => 'program_type',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ); 
        endforeach;
    endif;
        ?>
        <?php $args = array( 'post_type' => 'nexus_program', 'posts_per_page' => 3, 'tax_query' => $tax_query ); $query = new WP_Query( $args );?>

					<?php if ( $query->have_posts() ) : ?>

					
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php get_template_part( 'template-parts/content-single-nexus_program-readmore' ); ?>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

                    <?php endif; 
                    
        wp_reset_query();?>
    </section> <!-- / Readmore -->
    
            
    <section class="student-review"> <!-- Student Review Section -->

<?php $review_id = get_post_meta($post->ID, '_nexus_post_multicheckbox', true);?>

<?php if($review_id):; ?>
    <?php
    $post_id = $review_id[0];
    $queried_post = get_post($post_id);
    $title = $queried_post->post_title;
    $review_image = wp_get_attachment_url ( get_post_thumbnail_id($post_id), 'thumbnail' );
    ?>
    
				<div class="headergroup">
					<h2 class="student-review-header"> Student Review </h2>
					<div class="underline"></div>
                </div>
    	<div class="student-review__box">
            <div class="student-review__box__image">
                <img src="<?php echo $review_image ?>" alt="Picture of a Student">
            </div>
            <div class="student-review__info-wrapper">
                <div class="grey"></div>
                <blockquote class="student-review__info">
                    <span class="oquote"></span><?php echo $queried_post->post_content; ?><span class="cquote"></span>
                </blockquote>
                
            </div>
        </div>
<?php endif; ?>
<?php wp_reset_query();?>

    </section>  <!-- End Student Review Section  -->

</article><!-- #post-## -->
