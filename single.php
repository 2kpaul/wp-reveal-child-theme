<?php
$post_categories = wp_get_post_categories($post->ID);
if (in_array(30, $post_categories)) {
	include('single-news.php');
} else {
	include('single-default.php');
}
