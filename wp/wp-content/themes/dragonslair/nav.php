<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <section class="container">
    <!-- Brand and toggle get grouped for better mobile display: -->
    <section class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">LOGO</a>
    </section>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <!-- Links: -->
      <!-- Get Wordpress links (generates its own list): -->  
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <!-- Script to add Bootstrap classes to WP generated list: -->  
      <script src="js/fixmenu.js"></script> 

      <!-- Search field: -->
      <form class="navbar-form navbar-right" role="search">
        <section class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </section>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </section><!-- /.navbar-collapse -->
  </section><!-- /.container-fluid -->
</nav>