<?php
readanddigest_get_single_post_html();
?>
<div <?php echo readanddigest_sidebar_columns_class(); ?>>
	<div class="eltdf-column1 eltdf-content-left-from-sidebar">
		<div class="eltdf-column-inner">
			<div class="eltdf-blog-holder eltdf-blog-single">
				<?php
				global $post;
				$post_categories = wp_get_post_categories($post->ID);
				if (in_array(30, $post_categories)) {
					readanddigest_get_title();
				}
				?>
				<?php readanddigest_get_single_html(); ?>
			</div>
		</div>
	</div>
	<div class="eltdf-column2">
		<?php get_sidebar(); ?>
	</div>
</div>