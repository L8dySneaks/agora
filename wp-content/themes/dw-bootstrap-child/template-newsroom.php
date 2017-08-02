<?php
/*
* Template Name: Newsroom Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-newsroom container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title red">Newsroom</p>
    </div>
  </div>
</div>

<div class="container-fluid agora-news-articles">
  <div class="row row-eq-height newsroom-margin-bottom">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 darkbrown-bg hp-grid-height">
      <div class="news-item">
        <span class="news-item-date">September 26, 2016</span> <br/>
        <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
        <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">

        <div class="news-item">
          <span class="news-item-date">September 26, 2016</span> <br/>
          <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
          <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
        </div>

		</div>
	</div>

  <div class="row row-eq-height newsroom-margin-bottom">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">

        <div class="news-item">
          <span class="news-item-date">September 26, 2016</span> <br/>
          <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
          <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
        </div>

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gray-bg hp-grid-height">
			<div>
			</div>
		</div>
	</div>

  <div class="row row-eq-height newsroom-margin-bottom">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 darkbrown-bg hp-grid-height">

      <div class="news-item">
        <span class="news-item-date">September 26, 2016</span> <br/>
        <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
        <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
      </div>

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">

      <div class="news-item">
        <span class="news-item-date">September 26, 2016</span> <br/>
        <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
        <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
      </div>

		</div>
	</div>

  <div class="row row-eq-height newsroom-margin-bottom">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 red-bg hp-grid-height">

      <div class="news-item">
        <span class="news-item-date">September 26, 2016</span> <br/>
        <span class="news-item-title">New privately-owned Hawaii dorm filling up</span> <br/>
        <span class="news-item-caption">Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nas sim sum hit am velittus. <a class="more-link" href="#">more &rarr;</a></span>
      </div>

		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 gray-bg hp-grid-height">
			<div>
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
