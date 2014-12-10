<li>
	<article>
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail(array(100,100));
                                 			}?>
		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<h2>I'm a juicy midget!!!</h2>
		<p class="entry-meta">
   			<?php the_time("F d, Y"); ?>
		</p>
		<?php the_excerpt(); ?>
	</article>
</li>