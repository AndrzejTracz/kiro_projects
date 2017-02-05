<?php
ob_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Emardrewno</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>

  <!-- Revolution css -->
  <link rel="stylesheet" type="text/css" href="vendor/rs-plugin/css/settings.css" media="screen"/>
  <link rel="stylesheet" href="vendor/rs-plugin/css/extralayer.css">
  
  <!-- Flat icon css -->
  <link rel="stylesheet" href="vendor/flat-icon/flaticon.css">
  
  <!-- Font awesome -->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  
  <!-- Owl Carosel css -->
  <link rel="stylesheet" href="vendor/owl/css/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.default.css">
  <link rel="stylesheet" href="vendor/owl/css/owl.theme.css">
  
  <!-- mmenu -->
  <link type="text/css" rel="stylesheet" href="vendor/mmenu/css/jquery.mmenu.css" />
  
  <!-- Bootstrap css -->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="css/animate.css">

  <!-- Custom Style css -->
  <link rel="stylesheet" href="css/hover.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->
</head>
<body>

<div class="main">   
<header  class="header-part">
  <div id="home">
    <!-- Fixed navbar -->
    <div class="navi navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <a href="#menu">
            <button type="button" data-effect="st-effect-1" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </a>
          <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="emar miody"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse pull-right hidden-xs">
           <ul class="nav navbar-nav navbar-right">
            <li ><a class="page-scroll" href="index.html">Strona główna</a></li>
              <li class="dropdown"> <a class="page-scroll drop dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" href=" ">oferta</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="wyroby.html">WYROBY Z DREWNA</a></li>
                <li><a href="nawozy.html">NAWOZY</a></li>
                   <li><a href="miod.html">MIODY</a></li>
              </ul>
            </li>
                         
         <li><a class="page-scroll" href="kontakt.html">Kontakt</a></li>
        <li><a href="upload.html">UPLOAD</a></li>
        <li><a href="login.html">ZALOGUJ</a></li>
     
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div><!-- End of Nav -->
</div>
</header>

<!--   Start Blog with Sidebar   -->

  <section class="blog-header section-padding">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h1 class="section-title">Zaloguj</h1>
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.blog-header -->

<br />
    


          <div class="blog-content pagination-content">
            <div class="container-fluid">
              <div class="row">
                <div class="wow zoomIn col-xs-12 col-sm-10 col-sm-offset-2 ">
                 

                    
                    <?php



if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("logowanie/libraries/password_compatibility_library.php");
}

// include the configs / constants for the database connection
require_once("logowanie/config/db.php");

// load the login class
require_once("logowanie/classes/Login.php");

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process. in consequence, you can simply ...
$login = new Login();

// ... ask if we are logged in here:
if ($login->isUserLoggedIn() == true) {
    // the user is logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are logged in" view.
    include("logowanie/views/logged_in.php");

} else {
    // the user is not logged in. you can do whatever you want here.
    // for demonstration purposes, we simply show the "you are not logged in" view.
    include("logowanie/views/not_logged_in.php");
}

 ?>   
                    
                    
                    
                    
                    
                    
                </div>
              </div><!-- row -->
            </div><!-- container-fluid -->
          </div><!-- /.pagination-content -->
        </div>

        <div class="wow zoomIn col-xs-12 col-sm-12 col-md-4 "> <!-- col-xs-12 col-sm-12 col-md-4  -->
          
</div><!-- blog-sidebar -->

         
      </div><!-- row -->
    </div><!-- container -->
  </section>


 <!-- footer -->
  <footer >
    <div class="footer-wrapper section-padding">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <a href="index.html"><img src="img/footer-logo1.png" alt="emardrewno.pl"></a>
            <p class="footer-content">Emar sp z o.o.podstawowe dane: NIP + telefon adres dojazd do tartaku do uzupełnienia
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
            <p class="footer-heading">link</p>
            <ul class="footermenu">
              <li><a data-scroll data-options='{ "easing": "easeInQuad" }'  href="index.html">Strona główna</a></li>   

            </ul>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
            <p class="footer-heading">find us</p>
            <ul class="footercontact">
              <li><i class="flaticon-mainpage"></i><span>address:</span> EMAR sp.z o.o NIemirów 11 23-440 Frampol </li>
              <!-- <li><i class="flaticon-phone16"></i><span>phone:</span><a href="tel:88 02 8714612"> +88 02 8714612</a></li> -->
              <li><i class="flaticon-email21"></i><span>e-mail:</span><a href="mailto:biuro@emardrewno.pl"> biuro@emardrewno.pl</a></li>
              <li><i class="flaticon-world91"></i><span>web:</span><a href="http://www.emardrewno.pl"> www.emardrewno.pl</a></li>
            </ul>
            <i class="flaticon-home78"></i>
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
          <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
       
          </div><!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="wow zoomIn col-xs-12">
            <p>© 2016 All rights reserved.  Projekt <a href="">ANDRZEJ TRACZ</a></p>
            <div class="backtop  pull-right">
              <i class="fa fa-angle-up back-to-top"></i>
            </div><!-- /.backtop -->
          </div><!-- /.col-xs-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.creditwrapper -->
  </footer><!-- /Footer -->


<!-- MMENU  -->
<nav id="menu">
  <ul>
    <li><a href="index.html">home</a></li>
    <li><a href="index.html">about us</a></li>
    <li><a href="index.html">services</a></li>
    <li><a href="index.html">product</a></li>
    <li><a href="index.html">team</a></li>
    <li><a href="index.html">blog</a>
        <ul>
          <li><a href="blog-full-width.html">full width blog</a></li>
         
        </ul>
    </li>
    <li><a href="index.html">contact</a></li>
  </ul>
</nav><!-- /#menu -->

</div><!-- /.main -->



<!-- jQuery JS -->
<script src="js/jquery-1.11.1.js"></script>

<!-- Modernizr JS -->
<script src="js/modernizr-2.6.2.min.js"></script>

<!--Bootatrap JS-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- REVOLUTION Slider  -->
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

<!-- Shuffle JS -->
<script src="js/jquery.shuffle.min.js"></script>


<!-- mmenu -->
<script type="text/javascript" src="vendor/mmenu/js/jquery.mmenu.min.js"></script>

<!-- Owl Carosel -->
<script src="vendor/owl/js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>

<!-- waypoints JS-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

<!-- Counterup JS -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Easing JS -->
<script src="js/jquery.easing.min.js"></script>

<!-- Smooth Scroll JS -->
<script src="js/scrolling-nav.js"></script>
<script src="js/smoothscroll.min.js"></script>

<!-- Custom Script JS -->
<script src="js/script.js"></script>

<script>
  
    $(window).on('scroll', function(){
        if( $(window).scrollTop()>100 ){
            $('.navbar-default').addClass('navbar-fixed-top');
        } else {
            $('.navbar-default').removeClass('navbar-fixed-top');
        }
    });

</script>

</body>
</html>
<?php
ob_end_flush();
?>