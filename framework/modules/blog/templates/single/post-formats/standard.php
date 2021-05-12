<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="eltdf-post-content">
		<div class="eltdf-post-text">
			<div class="eltdf-post-text-inner clearfix">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
	<?php do_action('readanddigest_before_blog_article_closed_tag'); ?>
</article>