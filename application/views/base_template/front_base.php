<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 3.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest (the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Blog Page | Metronic Frontend</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Metronic Shop UI description" name="description">
  <meta content="Metronic Shop UI keywords" name="keywords">
  <meta content="keenthemes" name="author">

  <meta property="og:site_name" content="-CUSTOMER VALUE-">
  <meta property="og:title" content="-CUSTOMER VALUE-">
  <meta property="og:description" content="-CUSTOMER VALUE-">
  <meta property="og:type" content="website">
  <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
  <meta property="og:url" content="-CUSTOMER VALUE-">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url(); ?>assets/lib/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url(); ?>assets/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/frontend/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/frontend/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/frontend/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url(); ?>assets/css/frontend/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ul class="list-unstyled list-inline">
                        <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>info@keenthemes.com</span></li>
                    </ul>
                </div>
                <!-- END TOP BAR LEFT PART -->
                <!-- BEGIN TOP BAR MENU -->
                <div class="col-md-6 col-sm-6 additional-nav">
                    <ul class="list-unstyled list-inline pull-right">
                        <li><a href="<?php echo site_url('auth/login'); ?>">Log In</a></li>
                        <li><a href="page-reg-page.html">Registration</a></li>
                    </ul>
                </div>
                <!-- END TOP BAR MENU -->
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->
    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="index.html"><img src="../../assets/frontend/layout/img/logos/logo-corp-red.png" alt="Metronic FrontEnd"></a>

        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-right font-transform-inherit">
          <ul>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Home 
                <i class="fa fa-angle-down"></i>
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="index.html">Home Default</a></li>
                <li><a href="index-header-fix.html">Home with Header Fixed</a></li>
                <li><a href="index-without-topbar.html">Home without Top Bar</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Mega Menu
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      <div class="col-md-4 header-navigation-col">
                        <h4>Footwear</h4>
                        <ul>
                          <li><a href="index.html">Astro Trainers</a></li>
                          <li><a href="index.html">Basketball Shoes</a></li>
                          <li><a href="index.html">Boots</a></li>
                          <li><a href="index.html">Canvas Shoes</a></li>
                          <li><a href="index.html">Football Boots</a></li>
                          <li><a href="index.html">Golf Shoes</a></li>
                          <li><a href="index.html">Hi Tops</a></li>
                          <li><a href="index.html">Indoor Trainers</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Clothing</h4>
                        <ul>
                          <li><a href="index.html">Base Layer</a></li>
                          <li><a href="index.html">Character</a></li>
                          <li><a href="index.html">Chinos</a></li>
                          <li><a href="index.html">Combats</a></li>
                          <li><a href="index.html">Cricket Clothing</a></li>
                          <li><a href="index.html">Fleeces</a></li>
                          <li><a href="index.html">Gilets</a></li>
                          <li><a href="index.html">Golf Tops</a></li>
                        </ul>
                      </div>
                      <div class="col-md-4 header-navigation-col">
                        <h4>Accessories</h4>
                        <ul>
                          <li><a href="index.html">Belts</a></li>
                          <li><a href="index.html">Caps</a></li>
                          <li><a href="index.html">Gloves</a></li>
                        </ul>

                        <h4>Clearance</h4>
                        <ul>
                          <li><a href="index.html">Jackets</a></li>
                          <li><a href="index.html">Bottoms</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Pages 
                <i class="fa fa-angle-down"></i>
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="page-about.html">About Us</a></li>
                <li><a href="page-services.html">Services</a></li>
                <li><a href="page-prices.html">Prices</a></li>
                <li><a href="page-faq.html">FAQ</a></li>
                <li><a href="page-gallery.html">Gallery</a></li>
                <li><a href="page-search-result.html">Search Result</a></li>
                <li><a href="page-404.html">404</a></li>
                <li><a href="page-500.html">500</a></li>
                <li><a href="page-login.html">Login Page</a></li>
                <li><a href="page-forgotton-password.html">Forget Password</a></li>
                <li><a href="page-reg-page.html">Signup Page</a></li>
                <li><a href="page-careers.html">Careers</a></li>
                <li><a href="page-site-map.html">Site Map</a></li>
                <li><a href="page-contacts.html">Contact</a></li>                
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Features 
                <i class="fa fa-angle-down"></i>
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="feature-typography.html">Typography</a></li>
                <li><a href="feature-buttons.html">Buttons</a></li>
                <li><a href="feature-forms.html">Forms</a></li>
                
                <li class="dropdown-submenu">
                  <a href="index.html">Multi level <i class="fa fa-angle-right"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="index.html">Second Level Link</a></li>
                    <li><a href="index.html">Second Level Link</a></li>
                    <li class="dropdown-submenu">
                      <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                        Second Level Link 
                        <i class="fa fa-angle-right"></i>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="index.html">Third Level Link</a></li>
                        <li><a href="index.html">Third Level Link</a></li>
                        <li><a href="index.html">Third Level Link</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Portfolio 
                <i class="fa fa-angle-down"></i>
              </a>
                
              <ul class="dropdown-menu">
                <li><a href="portfolio-4.html">Portfolio 4</a></li>
                <li><a href="portfolio-3.html">Portfolio 3</a></li>
                <li><a href="portfolio-2.html">Portfolio 2</a></li>
                <li><a href="portfolio-item.html">Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="#">
                Blog 
                <i class="fa fa-angle-down"></i>
              </a>
                
              <ul class="dropdown-menu">
                <li class="active"><a href="blog.html">Blog Page</a></li>
                <li><a href="blog-item.html">Blog Item</a></li>
              </ul>
            </li>
            <li><a href="shop-index.html" target="_blank">E-Commerce</a></li>
            <li><a href="onepage-index.html" target="_blank">One Page</a></li>
            <li><a href="http://keenthemes.com/preview/index.php?theme=metronic_admin" target="_blank">Admin theme</a></li>

            <!-- BEGIN TOP SEARCH -->
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="#">
                  <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            <!-- END TOP SEARCH -->
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Blog</a></li>
            <li class="active">Blog Page</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Blog Page</h1>
            <div class="content-page">
              <div class="row">
                <!-- BEGIN LEFT SIDEBAR -->            
                <div class="col-md-9 col-sm-9 blog-posts">
                  
                   
                  <!-- letak start loop kat sini -->

                  <?php 

                  if(isset($article_records) && !empty($article_records))
                  {
                    foreach ($article_records as $row) {
                        
                  ?>  

                  <div class="row">
                    <div class="col-md-4 col-sm-4">
                      <!-- BEGIN CAROUSEL -->            
                      <div class="front-carousel">
                        <div class="carousel slide" id="myCarousel">
                          <!-- Carousel items -->
                          <div class="carousel-inner">
                            <div class="item">
                              <img alt="" src="../../assets/frontend/pages/img/works/img1.jpg">
                            </div>
                            <div class="item">
                              <img alt="" src="../../assets/frontend/pages/img/works/img2.jpg">
                            </div>
                            <div class="item active">
                              <img alt="" src="../../assets/frontend/pages/img/works/img3.jpg">
                            </div>
                          </div>
                          <!-- Carousel nav -->
                          <a data-slide="prev" href="#myCarousel" class="carousel-control left">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a data-slide="next" href="#myCarousel" class="carousel-control right">
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>                
                      </div>
                      <!-- END CAROUSEL -->             
                    </div>
                    <div class="col-md-8 col-sm-8">
                      <h2><a href="blog-item.html"><?php echo $row->article_title; ?></a></h2>
                      <ul class="blog-info">
                        <li><i class="fa fa-calendar"></i> 25/07/2013</li>
                        <li><i class="fa fa-comments"></i> 17</li>
                        <li><i class="fa fa-tags"></i> Metronic, Keenthemes, UI Design</li>
                      </ul>
                      <p><?php echo $row->article_content; ?></p>
                      <a href="blog-item.html" class="more">Read more <i class="icon-angle-right"></i></a>
                    </div>
                  </div>                  
                  <hr class="blog-post-sep">

                  <?php } } ?>

                  
                  <!-- ending loop kat sini -->

                  <ul class="pagination">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                  </ul>               
                </div>
                <!-- END LEFT SIDEBAR -->

                <!-- BEGIN RIGHT SIDEBAR -->            
                <div class="col-md-3 col-sm-3 blog-sidebar">
                  <!-- CATEGORIES START -->
                  <h2 class="no-top-space">Categories</h2>
                  <ul class="nav sidebar-categories margin-bottom-40">
                    <li><a href="#">London (18)</a></li>
                    <li><a href="#">Moscow (5)</a></li>
                    <li class="active"><a href="#">Paris (12)</a></li>
                    <li><a href="#">Berlin (7)</a></li>
                    <li><a href="#">Istanbul (3)</a></li>
                  </ul>
                  <!-- CATEGORIES END -->

                  <!-- BEGIN RECENT NEWS -->                            
                  <h2>Recent News</h2>
                  <div class="recent-news margin-bottom-10">
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="../../assets/frontend/pages/img/people/img2-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="#">Letiusto gnissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="../../assets/frontend/pages/img/people/img1-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="#">Deiusto anissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                    <div class="row margin-bottom-10">
                      <div class="col-md-3">
                        <img class="img-responsive" alt="" src="../../assets/frontend/pages/img/people/img3-large.jpg">                        
                      </div>
                      <div class="col-md-9 recent-news-inner">
                        <h3><a href="#">Tesiusto baissimos</a></h3>
                        <p>Decusamus tiusto odiodig nis simos ducimus qui sint</p>
                      </div>                        
                    </div>
                  </div>
                  <!-- END RECENT NEWS -->                            

                  <!-- BEGIN BLOG TALKS -->
                  <div class="blog-talks margin-bottom-30">
                    <h2>Popular Talks</h2>
                    <div class="tab-style-1">
                      <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Multipurpose</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Documented</a></li>
                      </ul>
                      <div class="tab-content">
                        <div id="tab-1" class="tab-pane row-fluid fade in active">
                          <p class="margin-bottom-10">Raw denim you probably haven't heard of them jean shorts Austin. eu banh mi, qui irure terry richardson ex squid Aliquip placeat salvia cillum iphone.</p>
                          <p><a class="more" href="#">Read more</a></p>
                        </div>
                        <div id="tab-2" class="tab-pane fade">
                          <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. aliquip jean shorts ullamco ad vinyl aesthetic magna delectus mollit. Keytar helvetica VHS salvia..</p>
                        </div>
                      </div>
                    </div>
                  </div>                            
                  <!-- END BLOG TALKS -->

                  <!-- BEGIN BLOG PHOTOS STREAM -->
                  <div class="blog-photo-stream margin-bottom-20">
                    <h2>Photos Stream</h2>
                    <ul class="list-unstyled">
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img1.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img6.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/pics/img1-large.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/pics/img2-large.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img3.jpg"></a></li>
                      <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                    </ul>                    
                  </div>
                  <!-- END BLOG PHOTOS STREAM -->

                  <!-- BEGIN BLOG TAGS -->
                  <div class="blog-tags margin-bottom-20">
                    <h2>Tags</h2>
                    <ul>
                      <li><a href="#"><i class="fa fa-tags"></i>OS</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Metronic</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Dell</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Conquer</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>MS</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Google</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Keenthemes</a></li>
                      <li><a href="#"><i class="fa fa-tags"></i>Twitter</a></li>
                    </ul>
                  </div>
                  <!-- END BLOG TAGS -->
                </div>
                <!-- END RIGHT SIDEBAR -->            
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat.</p>

            <div class="photo-stream">
              <h2>Photos Stream</h2>
              <ul class="list-unstyled">
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img2.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img5.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img5-small.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img1.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img4-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img6.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img3.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/people/img2-large.jpg"></a></li>
                <li><a href="#"><img alt="" src="../../assets/frontend/pages/img/works/img2.jpg"></a></li>
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              35, Lorem Lis Street, Park Ave<br>
              California, US<br>
              Phone: 300 323 3456<br>
              Fax: 300 323 1456<br>
              Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
              Skype: <a href="skype:metronic">metronic</a>
            </address>

            <div class="pre-footer-subscribe-box pre-footer-subscribe-box-vertical">
              <h2>Newsletter</h2>
              <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
              <form action="#">
                <div class="input-group">
                  <input type="text" placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2 class="margin-bottom-0">Latest Tweets</h2>
            <a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            2014 © Metronic Shop UI. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-github"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-dropbox"></i></a></li>
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="../../assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="../../assets/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../../assets/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->

    <script src="../../assets/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>