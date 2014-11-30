<html>
<head>
   <?php /*
     function register_my_menu() {
       register_nav_menu('header-menu',__( 'Header Menu' ));
     }
     add_action( 'init', 'register_my_menu' );
   */?>
   <title>Dragons Lair</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="js/jquery-2.1.1.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <?php wp_head(); ?><!-- EXRTA Wordpress HEAD STUFF -->
   <link rel="stylesheet" type="text/css" href="css/nohead.css"><!-- Removes top margin added by WP -->
</head>
<body>
  <section id="wrapper">

    <header>
      <section class="col-lg-3 col-md-3 col-sm-4 col-xs-min-4"><h1>LOGO</h1></section>
      <section class="col-lg-6 col-md-6 col-sm-4 col-xs-min-4"><h2>Social buttons</h2></section>
      <section class="col-lg-3 col-md-3 col-sm-4 col-xs-min-4"><h2>Search <i>Home</i></h2></section>
      <nav class="navbar navbar-default col-sm-12" role="navigation">
        <section class="container-fluid">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?><!-- GET Wordpress LINKS -->  
            <script src="js/fixmenu.js"></script><!-- Script to fit WP generated menu into Bootstrap framework -->   
          </section>
        </section>  
      </nav>
    </header>