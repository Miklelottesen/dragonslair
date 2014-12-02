<?php 
	get_header(); //header.php
	//WP code - get the header
?> 
		<main class="container col-xs-12">
	
		<?php 
			if ( isset ( $_GET['page_id'] ) ){
				get_sidebar(); //sidebar.php
				//Display sidebar on any other page than Home (which has no page_id)
			}
		?>
	
			<div id="content" class="col-xs-12"><!-- MAIN CONTENT AREA -->
				<?php if (have_posts()) : ?><!-- WP code - checks if posts exists for this page_id -->
					<?php while (have_posts()) : the_post(); ?><!--WP Loop - check for posts, if posts exist -->
						<?php the_content(''); ?><!-- WP code - Display content for this page_id -->
					<?php endwhile; ?><!-- End WP loop -->
				<?php else : ?>
					<h2>Sorry, this page doesn't exist :-/</h2><!-- Error message if page id doesn't exist -->
					<script src="js/hidesidebar.js"></script><!-- Hide the sidebar on error page -->
				<?php endif; ?><!-- End WP if/else -->
			</div>
		</main>
		<section id="push"></section><!-- Part of 'Sticky Footer' (see root://css/style.css) -->
	</section>

	<?php include 'footer.php'; ?>
	
</body>
<script src="js/content-width.js"></script>
</html>