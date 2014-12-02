<?php if (have_posts()) : ?><!-- WP code - checks if posts exists for this page_id -->
	<?php while (have_posts()) : the_post(); ?><!--WP Loop - check for posts, if posts exist -->
		<?php the_content(''); ?><!-- WP code - Display content for this page_id -->
	<?php endwhile; ?><!-- End WP loop -->
<?php else : ?>
	<h2>Sorry, this page doesn't exist :-/</h2><!-- Error message if page id doesn't exist -->
	<script src="js/hidesidebar.js"></script><!-- Hide the sidebar on error page -->
<?php endif; ?><!-- End WP if/else -->