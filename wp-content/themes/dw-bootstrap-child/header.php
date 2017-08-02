<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php if ( is_home() || is_front_page() ) { echo get_bloginfo('name'); } else { wp_title(''); } ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid agora-nav">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#agora-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="http://via.placeholder.com/80x95"/></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="agora-navbar-collapse">
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a href="#">Properties <span class="sr-only">(current)</span></a></li>
        <li><a class="brown" href="#">Acquistions</a></li>
        <li><a class="brown" href="#">For Sale</a></li>
        <li><a class="brown" href="#">For Lease</a></li>
        <li><a class="brown" href="#">About Us</a></li>
        <li><a class="brown" href="#">News Room</a></li>
      </ul>
      <form class="navbar-form agora-search">
        <!-- <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div> -->
        <button type="submit" class="btn red"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="brown text-uppercase" href="#">Tenants</a></li>
        <li><a class="brown text-uppercase" href="#">Investors</a></li>
        <li><a class="brown text-uppercase" href="#">Contact Us</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
