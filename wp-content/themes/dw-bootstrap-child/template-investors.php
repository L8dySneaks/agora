<?php
/*
* Template Name: Investors Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-investors" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 tan-bg">
			<div class="investors">
        <h1 class="text-uppercase">Investors</h1>
				<div class="investor-btn">
          <a class="text-uppercase" href="#">Log In</a>
        </div>
        <p class="margin-bottom-35">Agora Realty &amp; Management, Inc. is a leading full-service real estate development firm headquartered in Sherman Oaks, California.  Agora’s senior investment and development team has over 250 years of combined experience in real estate.  Agora specializes in the ground-up development and repositioning of retail, multi-family and industrial properties within the densely populated urban markets of California, Hawaii, Nevada, Texas and Arizona.</p>
				<p class="margin-bottom-35">Founded in 1986, Agora has gone on to achieve an impressive record of accomplishment for its comprehensive in-house expertise, team-centric culture, strong partnerships and exceptional ability to bring together the right people with the right properties.   The firm has branched out from its concentration on retail real estate by applying its multidisciplinary expertise in the areas of finance, development, leasing and asset management to developing innovative mixed-use properties.</p>
				<p class="margin-bottom-35">Agora’s real estate holdings and projects include shopping centers, business parks, mixed-use retail, office buildings and residential condominiums, as well as both single- and multi-family dwellings. Each represents the sum of collective decades of experience, combined with newly inspired vision for how the property will best serve individuals, families, communities and businesses for years to come. Agora offers the nimble hands-on service and agility of a boutique firm, backed by the breadth of experience and depth of resources of a large company, plus the financial wherewithal to deliver consistently superior results. Agora is optimally positioned to acquire, develop and manage properties—creating value and maximizing return on investment for their partners.</p>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 no-padding">
      <img class="img-responsive" src="http://via.placeholder.com/640x927" />
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
