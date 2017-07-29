<?php
/*
* Template Name: About Us Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-aboutus">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title">About Us</p>
    </div>
  </div>
</div>


<!-- Content Layout -->

<div id="agora-about" class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tan-bg">
			<div class="about-years">
        <p class="caption">OVER OUR 30 YEARS OF EXISTENCE WE HAVE OWNED OVER 50 COMMERCIAL PROPERTIES ENCOMPASSING OVER 4 MILLION SQUARE FEET AND 20 MULTIFAMILY PROJECTS TOTALING OVER 5,000 UNITS</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 red-bg">
			<div class="about-team">
        <p class="caption caption-white">Agora Realty is recognized for its comprehensive in-house expertise, team-centric culture, strong community and industry partnerships and exceptional ability to bring talented people together to develop creative and innovative projects. All of which resonate in the intrinsic quality of Agora’s projects and portfolio of assets.</p>
			</div>
		</div>
	</div>
	<div class="row row-eq-height">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="about-portfolio">
        <p class="caption">Over the years Agora Realty’s portfolio has grown to include properties in California, Nevada, Washington, Colorado and Hawaii. Our holdings include shopping centers, business parks, mixed-use retail, of ce buildings, as well as multi-family dwellings. Each represents the sum of our collective decades of experience, combined with newly-inspired vision for how the property will best serve individuals, families, communities and businesses for years to come.</p>
        <p class="caption no-top-padding">Agora Realty offers the nimble hands-on service and agility of a boutique firm, backed by the breadth of experience and depth of resources of an institutional organization, plus the financial wherewithal to deliver consistently superior results.  We are optimally positioned to acquire, develop and manage properties—creating value and maximizing return on investment for our users, partners and clients alike.</p>
      </div>
    </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding">
      <div class="about-us-img">
        <img class="img-responsive" src="http://via.placeholder.com/400x546" />
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
