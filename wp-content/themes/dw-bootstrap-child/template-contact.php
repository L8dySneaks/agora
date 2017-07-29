<?php
/*
* Template Name: Contact Template
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Content Layout -->

<div id="agora-contact" class="container-fluid">
	<div class="row row-eq-height">
    <div class="col-xs-12 col-sm-6 tan-bg">
			<div class="contact">
        <h1 class="text-uppercase">Contact Us</h1>
				<div class="address">
					Agora Realty &amp; Management, Inc. <br/>
					15206 Ventura Boulevard, Suite 306 <br/>
					Sherman Oaks, California 91403 <br/>
        </div>
				<div class="contact-numbers">
					Telephone 818.985.7100 &nbsp;Fax 818.788.8237
				</div>
				<div class="additional-info">
					For additional information, please select one of the key contacts below or you may send us a <a href="#">Request For Information</a> via email.
				</div>

				<div class="key-contacts">
					<h4 class="red">Key Contacts</h4>
					<div class="key-contact">
						<span class="key-contact-name-position">
							<span class="text-uppercase">Cary J. Lefton</span> Acquisitions, project debt & equity
						</span><br/>
						<span class="key-contact-number-email">
							818.985.7100 ext 101  |  <a href="mailto:Cary@agora2000.net">Cary@agora2000.net</a>
						</span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Andy A. Cole</span> Controller<br/>
						<span class="key-contact-number-email">818.985.7100 ext 103  |  <a href="mailto:Andy@agora2000.net">Andy@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Ryan Lefton</span> Chief Operations Officer</span><br/>
						<span class="key-contact-number-email">818.985.7100 ext 108  |  <a href="mailto:Ryan@agora2000.net">Ryan@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Aaron Lefton</span> Acquisitions & Leasing	</span><br/>
						<span class="key-contact-number-email">818.985.7100  ext 105  |  <a href="mailto:Aaron@agora2000.net">Aaron@agora2000.net</a></span>
					</div>

					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Cesar A. De La Cruz</span> Leasing & Management	</span><br/>
						<span class="key-contact-number-email">818.985.7100 ext 106  |  <a href="mailto:Cesar@agora2000.net">Cesar@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Michiyo Matsuo</span> Vice President of Investments</span><br/>
						<span class="key-contact-number-email">818.985.7100 ext 111  |  <a href="mailto:Michiyo@agora2000.net">Michiyo@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Theodore C. Horwith</span> Senior Vice President</span><br/>
						<span class="key-contact-number-email">818.985.7100 ext 251  |  <a href="mailto:Ted@agora2000.net">Ted@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Eileen C. Lopez</span> Administrative Assistant</span><br/>
						<span class="key-contact-number-email">818.985.7100 ext 100  | <a href="mailto:Eileen@agora2000.net">Eileen@agora2000.net</a></span>
					</div>
					<div class="key-contact">
						<span class="key-contact-name-position"><span class="text-uppercase">Carlos Segovia</span> Head of Maintenance</span><br/>
						<span class="key-contact-number-email">818.985.7100  |  <a href="mailto:Carlos@agora2000.net">Carlos@agora2000.net</a></span>
					</div>
				</div>
      </div>
		</div>
		<div class="col-xs-12 col-sm-6 red-bg no-padding">
      <div class="contact-map">
				<img class="img-responsive" src="http://via.placeholder.com/640x500" />
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
