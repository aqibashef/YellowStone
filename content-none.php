<article class="post">
					
	<div class="post-header">
	
			<h1><?php _e( 'Nothing Found', 'yellowstone' ); ?></h1>
		
	</div>
	
	<div class="post-entry nothing">
	
		<?php if ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'yellowstone' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'yellowstone' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
		
	</div>
	
</article>