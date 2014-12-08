<?php 
	get_header(); //header.php
	//WP code - get the header
?> 
	<main class="container-fluid">
		<section id="content-area" class="container">

		<?php 
			if ( isset ( $_GET['page_id'] ) ){
				get_sidebar(); // sidebar.php
				// Display sidebar on any other page than Home or Post view (which either has no page_id, or just p)
			}
		?>
	
			<section id="content" class="col-xs-12">
				<!-- MAIN CONTENT AREA -->
				<?php // The following are specific WordPress functions:
					if (have_posts()) : 
						// WP code - checks if posts exists for this page_id
				?>
					<?php 
						while (have_posts()) : the_post(); 
							// WP Loop - check for posts, if have_posts === true
					?>
						<?php 
							the_content(''); 
								// WP code - Display content for this page_id, inside the Loop
						?>
					<?php 
						endwhile; 
							// End WP loop 
					?>
				<?php 
					else : 
						// WP code - generate following error message, if have_posts === false:
				?>
					<h2>Sorry, this page doesn't exist...</h2>
					<p>
						If you came to this page by clicking a link, then this is an old page that's been deleted, <strong>or</strong> you've clicked a wrong link. 
						In either case, we apologize for the inconvenience and encourage you to contact our webmaster, so the problem can be sorted out.
					</p>
					<p>If you came here by entering the address manually, check if you've spelled it correctly.</p>
					<script src="js/hidesidebar.js"></script><!-- Hide the sidebar on error page -->
				<?php 
					endif; 
						// End of WP codes to generate content
				?>
			</section>
		</section>
	</main>

	<?php 
		get_footer(); // footer.php
			// WP code - Get the footer
	?>
	
