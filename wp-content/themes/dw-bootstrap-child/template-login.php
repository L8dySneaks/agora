<?php
/*
* Template Name: Login Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-login" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 tan-bg">
			<div class="login">
        <h1 class="text-uppercase">Log In To Your Account</h1>
				<form>

				</form>
				<div class="login-btn">
          <a class="text-uppercase" href="#">Log In</a>
        </div>
				<div class="login-forgot">
					<a href="#">Forgot your password?</a>
				</div>
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
