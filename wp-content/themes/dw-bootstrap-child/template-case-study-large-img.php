<?php
/*
* Template Name: Case Study Large Img Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-case-study-large-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 no-padding">
        <div class="case-study-large">
          <img class="img-responsive" src="http://via.placeholder.com/1280x450"/>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Content Layout -->

<div id="agora-case-study-large-img" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hp-grid-height450 red-bg">
			<div class="case-study">
        <p class="title text-uppercase caption-white">CASE STUDY</p>
        <p class="building caption-white">Plaza Del Valle</p>
        <p class="location caption-white">Panorama City, CA</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hp-grid-height450 darkbrown-bg">
			<div class="case-study-specs">
        <div class="row">
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <div class="left-white-border white">
              <div class="left-specs">
                <p class="text-uppercase">Property Type</p>
                <p class="margin-bottom-35">Value-add; Grocery-anchored</p>
                <p class="text-uppercase">Size</p>
                <p class="margin-bottom-35">250,000 SF</p>
                <p class="text-uppercase">Occupancy at Acquisition</p>
                <p class="margin-bottom-35">Y%</p>
                <p class="text-uppercase">Major Tenants</p>
                <p>El Super, Western Dental, IHOP, Denny’s</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="left-white-border white">
              <div class="middle-specs">
                <p class="text-uppercase">Year Built</p>
                <p class="margin-bottom-35">1950</p>
                <p class="text-uppercase">Date Acquired</p>
                <p class="margin-bottom-35">1999</p>
                <p class="text-uppercase">Date Remodeled</p>
                <p class="margin-bottom-35">2003</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="left-white-border white">
              <div class="right-specs">
                <p class="text-uppercase">Deal Notes</p>
                <ul class="deal-notes">
                  <li>Bought below replacement cost</li>
                  <li>Add value through better management</li>
                  <li>Add value through under market rents at purchase</li>
                  <li>Excess property for additional construction</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
			</div>
		</div>
	</div>
	<div class="row row-eq-height">
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hp-grid-height tan-bg">
      <div class="case-study-awards">
        <p class="award-header text-uppercase red">Awards</p>
        <p class="award-type">San Fernando Valley Business Journal for Best Redevelopment Project in 2015.</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 hp-grid-height tan-bg">
      <div class="case-study-quotes">
        <p class="small-quote red">“
          Plaza Del Valle had one national tenant when the center was first reopened, but the mix of current national name brands and local
          mom-and pop entrepreneurs is now a benefit to the tenants and, more importantly, to the local community.”  —Western Real Estate Business
        </p>
        <!-- <p class="large-quote red">“Creating a place where neighbors are buying from neighbors.”  —Western Real Estate Business</p> -->
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
