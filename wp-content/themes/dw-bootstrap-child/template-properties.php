<?php
/*
* Template Name: Properties Page
*/
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="agora-properties">
  <div class="row">
    <div class="col-md-12">
      <p class="text-uppercase header-title white">Properties</p>
    </div>
  </div>
</div>

<div class="container-fluid no-padding">
  <div class="row">
     <div class="col-md-12">
       <form class="form-inline" role="form">
         <div class="form-group">
           <input type="text" class="form-control" id="prperty-name" placeholder="Property Name">
         </div>
         <div class="form-group">
           <input type="text" class="form-control" id="property-location" placeholder="Location">
         </div>
         <div class="form-group" style="padding-right: 120px">
      	  <input type="text" class="form-control" id="property-type" style="width: 170%" placeholder="Property Type (Retail, Industrial, Residential)">
         </div>
         <div class="form-group">
      	  <input type="text" class="form-control" id="square-foot" placeholder="Square Foot Range">
         </div>
         <div class="form-group">
      	  <input type="text" class="form-control" id="tenant" placeholder="Tenant">
         </div>
         <label class="custom-control custom-radio">
            <input id="space-available" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Space Available</span>
         </label>
         <button type="submit" class="property-btn text-uppercase">Search &rarr;</button>

      </form>
     </div>
    </div>

<div class="table-responsive">


    <table class="table retail-properties">
      <thead class="white">
        <tr class="darkbrown-bg text-uppercase">
          <th>Property</th>
          <th>Location</th>
          <th colspan="2">GLA</th>
        </tr>
        <tr class="tan-bg">
          <th colspan="4" class="secondary-header text-uppercase red">Retail Properties</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    <table class="table consulting-projects">
      <thead>
        <tr>
          <th colspan="4" class="secondary-header tan-bg text-uppercase red">Consulting Projects</th>
        </tr>
        <tr>
          <th colspan="4" class="red">Commercial&mdash;Retail Tenant Improvement</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td></td>
        </tr>
        <tr>
          <td><a href="#">Mason-Devonshire Plaza</a></td>
          <td>Chatsworth, California</td>
          <td>82,000</td>
          <td><img src="http://localhost:8888/wp-content/uploads/2017/07/agora_forsale.png" alt="Property 1" width="205" height="100" /></td>
        </tr>
      </tbody>
    </table>
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
