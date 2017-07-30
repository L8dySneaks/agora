<?php
/*
* Template Name: Property Type Major Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-property-major" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hp-grid-height450 red-bg">
			<div class="property-major-info caption-white">
        <p class="title text-uppercase">Property Type</p>
        <p class="building">Plaza Del Valle</p>
        <p class="location">Panorama City, CA | GLA: 250,000</p>
        <p class="location-type">Established Neighborhood Retail Center</p>
			</div>

      <div class="property-major-contact caption-white">
        <p class="lease-rep text-uppercase">Leasing Representative</p>
        <p class="rep-name">Cesar De La Cruz</p>
        <p class="rep-number">818-985-7100 x 106</p>
        <a class="rep-email" href="#">Send email</a>
      </div>

			<div class="property-major-contact alt-lease-contact caption-white">
        <p class="rep-name">Ryan Lefton</p>
        <p class="rep-number">818-985-7100 x 102</p>
        <a class="rep-email" href="#">Send email</a>
      </div>

			<div class="property-major-contact manager-contact caption-white">
        <p class="property-manager text-uppercase">Property Manager</p>
        <p class="manager-name">Lucy Cordova</p>
        <p class="manager-number">818-892-7816</p>
        <a class="manager-email" href="#">Send email</a>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hp-grid-height450 no-padding darkbrown-bg">
			<div id="property-major-carousel" class="carousel slide" data-ride="carousel">

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
          <a class="left carousel-control" href="#property-major-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#property-major-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

			</div>
		</div> <!-- End Row one -->

		<div class="row row-eq-height">
	    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 tan-bg">

				<div class="row property-additional-info">
		      <div class="col-xs-4">
		        <div class="additional-title red">Additional Information</div>
		      </div>
		      <div class="col-xs-8">
						<div class="addtional-list">
							<ul class="margin-bottom-35">
		 	          <li>A 230,000 square foot family oriented community retail plaza on a 20-acre site located at the northeast corner of Van Nuys Boulevard and Chase Street; completely transformed run-down assortment of commercial buildings into a festive, scenic plaza featuring colorful store fronts and outdoor promenade</li>
		 	          <li>Latino-themed plaza, modeled after most plazas seen in Latin countries, features more than 100 vendor (approximately 100 to 300 SF) spaces for small business, each designed to optimize the sales area</li>
								<li>Special features include murals, fountains, benches, lampposts, mariachi bandstand, food court and landscaping</li>
								<li>Authentic “cantera” statues, covered wagon and church doors brought by Agora from San Miguel de Allende in Guanajuato to enhance the cultural</li>
	 	        	</ul>
						</div>
		      </div>
		    </div>

				<div class="row border-top">
		      <div class="col-xs-12 col-sm-3">
		        <a class="property-info-link text-uppercase" href="#">Site Plan</a>
		      </div>
		      <div class="col-xs-12 col-sm-3">
		        <a class="property-info-link text-uppercase" href="#">Interactive Map</a>
		      </div>
					<div class="col-xs-12 col-sm-3">
		        <a class="property-info-link text-uppercase" href="#">Demographics</a>
		      </div>
					<div class="col-xs-12 col-sm-3">
		        <a class="property-info-link text-uppercase" href="#">Documents</a>
		      </div>
		    </div>

				<div class="row white-bg">
		      <div class="col-xs-12">
		        Site Plan
		      </div>
		      <div class="col-xs-12">
		        Interactive Map
		      </div>
					<div class="col-xs-12">
		        Demographics table information
		      </div>
					<div class="col-xs-12">
		        Documents links
		      </div>
		    </div>

			</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 darkbrown-bg">
	      <div class="property-agora-contact caption-white">We look forward to talking with you, contact us at 818.985.7100 or info@agora2000.net</div>
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
