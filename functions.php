<?php

/*** Child Theme Function  ***/

if (!function_exists('eltd_child_theme_enqueue_scripts')) {
	function eltd_child_theme_enqueue_scripts()
	{
		$parent_style = 'readanddigest-default-style';

		wp_enqueue_style('readanddigest-default-child-style', get_stylesheet_directory_uri() . '/style.css', array($parent_style));
	}

	add_action('wp_enqueue_scripts', 'eltd_child_theme_enqueue_scripts');
}

if (!function_exists('readanddigest_sidebar_columns_class')) {

	/**
	 * Return classes for columns holder when sidebar is active
	 *
	 * @return array
	 */

	function readanddigest_sidebar_columns_class()
	{

		$sidebar_class = array();
		$sidebar_layout = readanddigest_sidebar_layout();

		// switch ($sidebar_layout):
		// 	case 'sidebar-33-right':
		// 		$sidebar_class[] = 'eltdf-two-columns-66-33';
		// 		break;
		// 	case 'sidebar-25-right':
		// 		$sidebar_class[] = 'eltdf-two-columns-75-25';
		// 		break;
		// 	case 'sidebar-33-left':
		// 		$sidebar_class[] = 'eltdf-two-columns-33-66';
		// 		break;
		// 	case 'sidebar-25-left':
		// 		$sidebar_class[] = 'eltdf-two-columns-25-75';
		// 		break;

		// endswitch;

		$sidebar_class[] = 'eltdf-two-columns-75-25';

		$sidebar_class[] = ' eltdf-content-has-sidebar clearfix';

		return readanddigest_class_attribute($sidebar_class);
	}
}

if (!function_exists('readanddigest_get_single_html')) {

	/**
	 * Function return all parts on single.php page
	 *
	 *
	 * @return single.php html
	 */
	function readanddigest_get_single_html()
	{

		readanddigest_get_module_template_part('templates/single/parts/share', 'blog');
		readanddigest_get_module_template_part('templates/single/post-formats/standard', 'blog');
		readanddigest_get_module_template_part('templates/single/parts/author-info', 'blog');
		readanddigest_get_module_template_part('templates/single/parts/share', 'blog');
		//readanddigest_get_module_template_part('templates/single/parts/single-navigation', 'blog');

		if (readanddigest_show_comments()) {
			comments_template('', true);
		}

		//readanddigest_get_single_related_posts();
	}
}

if (!function_exists('readanddigest_additional_post_items')) {

	/**
	 * Function which return parts on single.php which are just below content
	 *
	 * @return single.php html
	 */
	function readanddigest_additional_post_items()
	{

		readanddigest_get_module_template_part('templates/single/parts/tags', 'blog');

		$args_pages = array(
			'before'      => '<div class="eltdf-single-links-pages"><div class="eltdf-single-links-pages-inner">',
			'after'       => '</div></div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '%'
		);

		wp_link_pages($args_pages);
	}

	add_action('readanddigest_before_blog_article_closed_tag', 'readanddigest_additional_post_items');
}
