<?php
/*
* Template Name: Capabilities Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-capabilites container-fluid">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title">Capabilites</p>
    </div>
  </div>
</div>


<!-- Content Layout -->

<div id="agora-capabilities" class="container-fluid">
	<div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tan-bg hp-grid-height">
			<div class="capabilities-years">
        <p class="caption">With over 250 years of combined experience amongst our team, we have the skills necessary to transform properties.</p>
			</div>
		</div>
		<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 red-bg hp-grid-height">
			<div class="capabilities-team">
        <p class="caption caption-white">This is possible because everything is handled in house from  acquisition through to project completion. Our capabilities include in-house management, leasing, construction,  value engineering, feasibility studies, construction services and financing  our on-the-job experience enables us to understand how a project is best put together, and bring projects in on time and on budget. This is what enables our investors and lenders to confidently entrust us with property development, ownership and management.</p>
			</div>
		</div>
	</div>
	<div class="row row-eq-height">
		<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
      <div class="capabilities-list">
        <div class="list-intro red">Our capabilities include:</div>
        <p class="capabilities-title red">Pre-bid Estimating</p>
        <p class="capabilities-description">More than three decades in business and the extensive experience of our team allows us to tap into our historical costs to estimate future projects. We perform the coordination and purchasing, and use the latest industry software for processing—facilitating a reliable estimate, rather than using a third party. Our contractor team handles it all.</p>

        <p class="capabilities-title red">Value Engineering</p>
        <p class="capabilities-description">Throughout every project, we work consistently with both the architect and the contractor to achieve the most cost-efficient project without sacrificing quality. We’re hands-on and agile, an approach that enables us to quickly find a solution if a particular process is cost prohibitive.</p>

        <p class="capabilities-title red">Cost Accounting</p>
        <p class="capabilities-description">We use proprietary software, which is building-industry-specific, providing ongoing and detailed cost analysis throughout the course of construction. In addition, weekly reporting helps ensure every contract is administrated per our agreements.</p>

        <p class="capabilities-title red">Architectural Design Services</p>
        <p class="capabilities-description">In-house expertise and long-standing relationships with the architectural community allow us to create cost-effective designs and manage costs, without sacrificing quality and integrity.</p>

        <p class="capabilities-title red">Construction Management</p>
        <p class="capabilities-description">Combined, our staff of managers and subcontractors have logged decades of experience in construction—including cost, quality, scheduling, value engineering and troubleshooting.</p>

        <p class="capabilities-title red">Leasing</p>
        <p class="capabilities-description">As with everything else at Agora, we go with the best option for the individual project. We have experienced in-house staff to handle leasing and leasing management; depending on the market and projects, we may also rely on outside leasing agents to market our projects.</p>

        <p class="capabilities-title red">Property Finance Strategy</p>
        <p class="capabilities-description">The key to a successful project is how the financing of a project is structured to meet the specific investment objectives. We have strong in-house experience in selecting the best credit facilities available and the most competitive rates, leveraging our financial wherewithal and industry resumes. We also work closely with the mortgage banking community. And we take advantage of long-term relationships with investors and lenders to determine the most advantageous financial vehicles available for the project. </p>

        <p class="capabilities-title red">Property Management</p>
        <p class="capabilities-description">In addition to software specifically designed for the commercial real estate industry, our experienced property managers and accounting staff manage all properties. We may also partner with local property management companies outside of California with which we have long-standing relationships.</p>

        <p class="capabilities-title red">Site Selection/Feasibility Studies</p>
        <p class="capabilities-description">Property opportunities are always evaluated in-house, where our experts make purchase decisions on a range of factors and determine the property’s best use through feasibility studies to assess the highest and best use of a property and how to add value to the property, taking into account, demand, supply, zoning and community desires.</p>

        <p class="capabilities-title red">Entitlement Processing</p>
        <p class="capabilities-description">We leverage our relationships with city planners, zoning administrators and local land use attorneys to achieve approvals, while working with the community and municipalities to bring everyone together.</p>

        <p class="capabilities-title red">Licenses</p>
        <p class="capabilities-description">
          Agora Realty &amp; Management, Inc. currently holds:
          <ul>
            <li>Class B General Contractor License, License #589584</li>
            <li> State of California Department of Real Estate Broker’s License, Identification #01131686</li>
          </ul>
        </p>
      </div>
    </div>
		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding">
      <div class="capabilities-img">
        <img class="img-responsive" src="http://via.placeholder.com/400x546" />
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
