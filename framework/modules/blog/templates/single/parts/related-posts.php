<div class="eltdf-related-posts-holder">
	<?php if ( $related_posts && $related_posts->have_posts() ) : ?>
		<div class="eltdf-related-posts-title">
			<h3><?php esc_html_e('Posts you may also like', 'readanddigest' ); ?></h3>
		</div>
		<div class="eltdf-related-posts-inner clearfix">
			<?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
				<div class="eltdf-related-post">
					<div class="eltdf-related-post-inner">
						<div class="eltdf-related-top-content">
							<?php if (has_post_thumbnail()){ ?>
								<div class="eltdf-related-image">
									<a itemprop="url" class="eltdf-related-link eltdf-image-link" href="<?php echo esc_url(get_permalink()); ?>" target="_self">
		                                <?php if($related_posts_image_size !== '') {
		                                    the_post_thumbnail(array($related_posts_image_size, 0));
		                                } else {
		                                    the_post_thumbnail('readanddigest_post_feature_image');
		                                } ?>
									</a>
								</div>
							<?php } ?>
							<div class="eltdf-related-content">
								<h3 class="eltdf-related-title">
									<a itemprop="url" class="eltdf-related-link" href="<?php echo esc_url(get_permalink()) ?>" target="_self"><?php echo readanddigest_get_title_substring(get_the_title(), $related_posts_title_size) ?></a>
								</h3>
								<div class="eltdf-related-info-section clearfix">
									<div class="eltdf-related-info-section-left">
										<?php readanddigest_post_info_date(array(
											'date' => 'yes',
											'date_format' => 'd M Y'
										)) ?>
										<?php readanddigest_post_info_category(array(
											'category' => 'yes'
										)) ?>
									</div>
									<div class="eltdf-related-info-section-right">
										<?php readanddigest_post_info_comments(array(
											'comments' => 'yes'
										)) ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; 
	wp_reset_postdata();
	?>
</div>