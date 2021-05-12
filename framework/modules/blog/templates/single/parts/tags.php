<?php
/*
//Is social share enabled
$enable_social_share = (readanddigest_options()->getOptionValue('enable_social_share') == 'yes') ? true : false;

//Is social share enabled for post
$enabled_on_post = (readanddigest_options()->getOptionValue('enable_social_share_on_post') == 'yes') ? true : false;

//Is social share enabled for blog single
$enabled_on_post_single = (readanddigest_options()->getOptionValue('blog_single_share') == 'yes') ? true : false;

$enabled_social = $enable_social_share && $enabled_on_post && $enabled_on_post_single;
?>

<?php if(readanddigest_options()->getOptionValue('blog_single_tags') == 'yes' || $enabled_social){ ?>
<div class="eltdf-single-tags-share-holder">
<?php } ?>
<?php if(readanddigest_options()->getOptionValue('blog_single_tags') == 'yes' && has_tag()){ ?>
	<div class="eltdf-single-tags-holder">
		<h6 class="eltdf-single-tags-title"><?php esc_html_e('Post Tags', 'readanddigest'); ?></h6>
		<div class="eltdf-tags">
			<?php the_tags('', '', ''); ?>
		</div>
	</div>
<?php } ?>
<?php if($enabled_social){ ?>
	<?php readanddigest_get_module_template_part('templates/single/parts/share', 'blog'); ?>
<?php } ?>
<?php if(readanddigest_options()->getOptionValue('blog_single_tags') == 'yes' || $enabled_social){ ?>
</div>
<?php } */
