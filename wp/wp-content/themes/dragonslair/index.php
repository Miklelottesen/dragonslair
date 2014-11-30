<!-- NAV: -->
<!-- MAIN NAV: -->
<!--

<ul>
  <?php
  wp_list_pages("title_li="); ?>
</ul>

-->
<!-- SIDEBAR NAV: -->
<!--

<ul>
  <?php
  if ( isset ( $_GET[ 'page_id'] ) ){
   $pageID = $_GET[ 'page_id' ];
  } else { $pageID = 1; }
  
  wp_list_pages("child_of=$page_id"); ?>
</ul>

-->
  
<?php get_header(); ?> 
    <main class="container col-xs-12">
  
<?php 
  if ( isset ( $_GET['page_id'] ) ){
    get_sidebar(); //Display sidebar on any other page than Home (which has no page_id)
  }
?>
  
      <section class="col-xs-12 col-sm-9"><!-- MAIN CONTENT HERE -->
        <?php if (have_posts()) : ?><!-- Checks is posts exists for this ID -->
        <?php while (have_posts()) : the_post(); ?><!--Wordpress loop - check for posts, if posts exist -->
        <?php the_content(''); ?><!-- Display WP content for this page -->
        <?php endwhile; ?><!-- End WP loop -->
        <?php else : ?>
          <h2>Sorry, this page doesn't exist :-/</h2><!-- Error message if page id doesn't exist -->
          <script src="js/hidesidebar.js"></script><!-- Hide sidebar on error page -->
        <?php endif; ?><!-- End if/else statement, checking for posts -->
      </section>
    </main>
    <section id="push"></section>
  </section>

  <footer>
    <h3>Footer area</h3>
  </footer>
  
</body>
</html>