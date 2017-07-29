<?php
/*
* Template Name: For Sale Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-forsale container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title">For Sale</p>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 red-bg">
      <div class="left-content">
        <p>SHOULD YOU HAVE ANY QUESTIONS ABOUT OUR PROPERTIES THAT ARE FOR SALE, PLEASE CONTACT US AT 818-985-7100.</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="right-content">


        <p class="page-description">Below are properties currently available for sale by Agora. Please click on the link located next to each property for additional information on the project.</p>
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
