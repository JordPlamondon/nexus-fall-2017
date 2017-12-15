<?php
  $review_image = wp_get_attachment_url ( get_post_thumbnail_id(), 'thumbnail' );
?>
<div class="student-review__box">
  <div class="student-review__box__image">
      <img src="<?php echo $review_image ?>" alt="Picture of a Student">
  </div>
  <div class="student-review__info-wrapper">
      <div class="grey"></div>
      <blockquote class="student-review__info">
          <span class="oquote"></span><?php the_content(); ?><span class="cquote"></span>
      </blockquote>
  </div>
</div>