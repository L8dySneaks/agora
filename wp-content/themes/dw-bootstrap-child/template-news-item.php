<?php
/*
* Template Name: News Item Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-news-item" class="container-fluid">
	<div class="row row-eq-height">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 tan-bg">
			<div class="news-item">
        <div class="item-date text-uppercase red">September 26, 2016</div>
				<div class="item-title red">New privately owned Hawaii dorm filling up</div>
				<div class="item-article">
					<p>Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat. Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat.</p>
					<p>Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat. Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat.</p>
					<p>Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat. Event, que omnim earciatem. Ero beatus et, que dolenectio. Non conseque ne is sim sum hit am veliti alici occatur, antis susae. Et officatios et, cones eosam, temperit a in et essimag nat.</p>
				</div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 red-bg no-padding">
      <div class="capabilities-img">
        <img class="img-responsive" src="http://via.placeholder.com/400x430" />
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
