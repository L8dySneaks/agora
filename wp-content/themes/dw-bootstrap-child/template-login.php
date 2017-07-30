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
					<div class="main-login-form">
						<div class="login-group">
							<div class="form-group">
								<input type="text" class="form-control" id="lg_email" name="lg_email" placeholder="Email Address">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="Password">
							</div>
						</div>
							<button type="submit" class="login-button text-uppercase">Log In</button>
					</div>
				</form>

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
