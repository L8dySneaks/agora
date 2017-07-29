<?php
/*
* Template Name: Tenants Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-tenants" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 tan-bg">
      <div class="tenants">
        <?php the_content(); ?>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 gray-bg">
      <div class="blank-block"></div>
    </div>
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
