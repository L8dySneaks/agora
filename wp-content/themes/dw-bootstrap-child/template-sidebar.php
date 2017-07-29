<?php
/*
* Template Name: Page with Sidebar
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="container-fluid">
  <div class="row row-eq-height">
    <?php the_content(); ?>
  </div>
  <div class="row gray-block">
  </div>
</div>


<?php endwhile; else : ?>
    <div class="container-fluid">
        <div class="row row-eq-height">
            <div class="col-lg-12">
              <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
        </div>
    </div>
<?php endif; ?>


<?php get_footer(); ?>
