<?php
/*
* Template Name: Property Type Minor Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-property-minor" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hp-grid-height450 red-bg">
			<div class="property-minor-info caption-white">
        <p class="title text-uppercase">Property Type</p>
        <p class="building">Sahara</p>
        <p class="location">Las Vegas, NV | GLA: 5,400</p>
        <p class="location-type">Single Tenant building with Hertz Rental Car</p>
			</div>
      <div class="property-minor-contact caption-white">
        <p class="lease-rep text-uppercase">Leasing Representative</p>
        <p class="rep-name">Cesar De La Cruz</p>
        <p class="rep-number">818-985-7100 x 106</p>
        <a class="rep-email" href="#">Send email</a>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hp-grid-height450 no-padding darkbrown-bg">
			<div id="property-minor-carousel" class="carousel slide" data-ride="carousel">

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img class="img-responsive" src="http://via.placeholder.com/640x450"/>
            </div>
            <div class="item">
              <img class="img-responsive" src="http://via.placeholder.com/640x450"/>
            </div>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#property-minor-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#property-minor-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

			</div>
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
