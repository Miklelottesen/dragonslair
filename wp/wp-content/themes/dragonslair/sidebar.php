<aside class="col-xs-12 col-sm-3">
	<h4>Categories</h4>
		<ul class="nav nav-pills nav-stacked" role="menu">
			<!-- Sidebar menu -->
			<?php
				if ( isset ( $_GET[ 'page_id'] ) ){
					$pageID = $_GET[ 'page_id' ];
				} else { 
					$pageID = 1; 
				}
				wp_list_pages("title_li&child_of=$page_id"); 
					//Creates a list of child-pages to the current page
			?>         
		</ul>
</aside>