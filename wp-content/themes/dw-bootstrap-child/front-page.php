<?php get_header(); ?>

<div id="agora-home-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- <ol class="carousel-indicators">
    <li data-target="#agora-home-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#agora-home-carousel" data-slide-to="1"></li>
    <li data-target="#agora-home-carousel" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/evepano_hp.jpg" alt="Agora Image 1"/>
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <!-- <div class="item">
      <img src="..." alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div> -->
    <!-- ... -->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#agora-home-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#agora-home-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Content Layout -->

<div id="agora-home" class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 home-properties-bg hp-grid-height">
			<div class="home-properties">
				<p class="title">Properties</p>
        <p class="caption caption-white">With over 30 years of investment, we have owned 53 commercial properties totaling over 4.26 million square feet and 20 multi-family properties encompassing over 5,000 units.<br/> <a class="more-link" href="#">more &rarr;</a></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">
			<div class="home-acquisitions">
				<p class="title">ACQUISITIONS</p>
        <p class="caption caption-white">We target retail, multi-family and multi- tenant industrial projects throughout California, Nevada, Hawaii, Texas and Arizona. <br/> <a class="more-link" href="#">more &rarr;</a></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 home-investment-bg hp-grid-height">
      <div class="home-investment">
        <p class="title">INVESTMENT STRATEGY</p>
        <p class="caption">We seek investments with upside opportunities where we can create value and maximize returns for our users, partners, clients and the local community. <br/> <a class="more-link" href="#">more &rarr;</a></p>
      </div>
    </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding hp-grid-height">
      <div class="home-investment-img">
        <img class="img-responsive" src="http://via.placeholder.com/320x348" />
      </div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 gray-bg hp-grid-height hidden-xs">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 darkbrown-bg hp-grid-height">
      <div class="home-about">
        <p class="title">ABOUT US</p>
        <p class="caption caption-white">Agora looks to creatively use it’s more than 30 years of experience in real estate to invest in creative and innovative projects within its geographical footprint. <br/> <a class="more-link" class="more-link" href="#">more &rarr;</a></p>
      </div>
    </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hp-grid-height">
      <div class="home-lease">
        <p class="title">FOR LEASE</p>
        <p class="caption">Find space that is available for rent in our various retail centers throughout our geographical footprint. <br/> <a class="more-link" href="#">more &rarr;</a></p>
      </div>
    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 hp-grid-height">
			<div class="home-tenants">
				<p class="title">Tenants</p>
        <p class="caption">Agora works closely with tenants to ensure they are getting the best space and experience thus maximizing sales and performance. <br/> <a class="more-link" href="#">more &rarr;</a></p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">
			<div class="home-news">
				<p class="title">News Room</p>
        <div class="news-items">
          <div class="news-item">
            <span class="news-item-title">News Item 1</span> <br/>
            <span class="news-item-caption">New privately-owned Hawaii dorm filling up <a class="more-link" href="#">more &rarr;</a></span>
          </div>
          <div class="news-item">
            <span class="news-item-title">News Item 2</span> <br/>
            <span class="news-item-caption">New privately-owned Hawaii dorm filling up <a class="more-link" href="#">more &rarr;</a></span>
          </div>
        </div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 gray-bg hp-grid-height hidden-xs">
			<div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
