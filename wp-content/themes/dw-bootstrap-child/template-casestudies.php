<?php
/*
* Template Name: Case Studies Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-case-studies">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p class="text-uppercase header-title white">Case Studies</p>
      </div>
    </div>
  </div>
</div>


<!-- Content Layout -->

<div id="agora-case-studies" class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tan-bg hp-grid-height">
			<div class="case-studies-deals">
        <p class="caption">The below deals help highlight the depth and breadth of skill Agora brings to investments.</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 red-bg hp-grid-height">
			<div class="case-studies-experience">
        <p class="caption caption-white">Beyond our experience lies a deep commitment to ensuring each of our properties makes a positive impact by creating value for our clients and partners, as well as for the residents, tenants, consumers and the local community. This is achieved through developments that are progressive, innovative, sensitive and creative in order to reflect the individual needs and character of each.</p>
			</div>
		</div>
	</div>
	<div class="row row-eq-height">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="left-content">
        <p class="page-description">Below are properties currently available for lease by Agora. Please click on the link located next to each property for additional information on the project.</p>
        <?php the_content(); ?>
      </div>
    </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding tan-bg">
      <div class="case-studies">
        <div class="gray-bg"></div>
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
