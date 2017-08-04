<?php
/*
* Template Name: Community Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-community">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 hp-grid-height red-bg">
        <div>
          <p class="text-uppercase header-title white">In The Community</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-6 gray-bg">
        <div class="blank-block"></div>
      </div>
    </div>
  </div>
</div>

<!-- Content Layout -->

<div id="agora-community" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 tan-bg">
			<div class="community">
        <p class="margin-bottom-35">“Relationships drive our business.”</p>
        <p class="margin-bottom-35">Agora works closely with governmental agencies including the offices of senators, assemblymen, mayors, planning departments and city councils. Similarly, we involve communities, encouraging input via public focus groups and town hall meetings to ensure participation and, ultimately, satisfaction by giving all parties concerned the opportunity to participate in new developments in their neighborhoods.</p>
        <p class="margin-bottom-35">This unerring focus on loyal, straightforward and mutually rewarding relationships enables Agora to satisfy the needs of all parties, from community members and local government, to end users and investors.</p>
        <p class="margin-bottom-35">In addition to ensuring close relationships with the community in our investments, we also take pride in being actively involved with various civic organizations, including:</p>
        <ul class="margin-bottom-35">
          <li>List foundations/boards/charities we sit on or are involved with</li>
          <li>Mention groups we have invested in</li>
        </ul>
        <p>“Giving back is our culture.”</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 darkbrown-bg">
      <div class="blank-block"></div>
    </div>
	</div>
  <div class="row">
    <div class="col-xs-12 no-padding">
      <img class="img-responsive" src="http://via.placeholder.com/1280x348"/>
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
