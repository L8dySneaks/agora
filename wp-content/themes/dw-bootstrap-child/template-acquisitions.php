<?php
/*
* Template Name: Acquistions Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-acquistions">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title white">Acquisitions</p>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 red-bg">
      <div class="left-content">
        <p>We look for investments where we can enhance value for the tenants, community and our partners alike</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="right-content">
        <?php the_content(); ?>
      </div>
    </div>

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
