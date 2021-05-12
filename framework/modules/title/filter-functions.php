<?php

if(!function_exists('readanddigest_title_classes')) {
    /**
     * Function that adds classes to title div.
     * All other functions are tied to it with add_filter function
     * @param array $classes array of classes
     */
    function readanddigest_title_classes($classes = array()) {
        $classes = array();
        $classes = apply_filters('readanddigest_title_classes', $classes);

        if(is_array($classes) && count($classes)) {
            echo implode(' ', $classes);
        }
    }
}

if(!function_exists('readanddigest_title_background_image_classes')) {
    function readanddigest_title_background_image_classes($classes) {
        //init variables
        $id                         = readanddigest_get_page_id();
        $is_img_responsive 		    = '';
        $show_title_img			    = true;
        $title_img				    = '';
        $is_standard_post			= false;

        //is responsive image is set for current page?
        if(get_post_meta($id, "eltdf_title_area_background_image_responsive_meta", true) != "") {
            $is_img_responsive = get_post_meta($id, "eltdf_title_area_background_image_responsive_meta", true);
        } else {
            //take value from theme options
            $is_img_responsive = readanddigest_options()->getOptionValue('title_area_background_image_responsive');
        }

		//check if post type is standard
		if (is_singular('post')){
			$post_type = get_post_format($id);
			$has_thumbnail = has_post_thumbnail($id);
			if (($post_type == 'standard' || !$post_type) && $has_thumbnail){
				$is_standard_post = true;
			}
		}

		if ($is_standard_post){
			$classes[] = 'eltdf-title-has-thumbnail';
		}

        //is title image chosen for current page?

		if ($is_standard_post){
			$title_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($id),'readanddigest_single_post_title');
			$title_img = $title_image_src[0];
		}
        elseif(get_post_meta($id, "eltdf_title_area_background_image_meta", true) != ""){
            $title_img = get_post_meta($id, "eltdf_title_area_background_image_meta", true);
        }else{
            //take image that is set in theme options
            $title_img = readanddigest_options()->getOptionValue('title_area_background_image');
        }

        //is title image hidden for current page?
        if(get_post_meta($id, "eltdf_hide_background_image_meta", true) == "yes") {
            $show_title_img = false;
        }

        //is title image set and visible?
        if($title_img !== '' && $show_title_img == true) {
            //is image not responsive?
            $classes[] = 'eltdf-preload-background';
            $classes[] = 'eltdf-has-background';

            //is image not responsive
            if($is_img_responsive == 'yes'){
                $classes[] = 'eltdf-has-responsive-background';
            }
        }

        return $classes;
    }

    add_filter('readanddigest_title_classes', 'readanddigest_title_background_image_classes');
}

if(!function_exists('readanddigest_title_content_alignment_class')) {
    /**
     * Function that adds class on title based on title content alignmnt option
     * Could be left, centered or right
     * @param $classes original array of classes
     * @return array changed array of classes
     */
    function readanddigest_title_content_alignment_class($classes) {

        //init variables
        $id                      = readanddigest_get_page_id();
        $title_content_alignment = 'left';

        if(get_post_meta($id, "eltdf_title_area_content_alignment_meta", true) != "") {
            $title_content_alignment = get_post_meta($id, "eltdf_title_area_content_alignment_meta", true);

        } else {
            $title_content_alignment = readanddigest_options()->getOptionValue('title_area_content_alignment');
        }

        $classes[] = 'eltdf-content-'.$title_content_alignment.'-alignment';

        return $classes;

    }

    add_filter('readanddigest_title_classes', 'readanddigest_title_content_alignment_class');
}

if(!function_exists('readanddigest_title_background_image_div_classes')) {
    function readanddigest_title_background_image_div_classes($classes) {

        //init variables
        $id                         = readanddigest_get_page_id();
        $is_img_responsive 		    = '';
        $show_title_img			    = true;
        $title_img				    = '';
        $is_standard_post			= false;

        //is responsive image is set for current page?
        if(get_post_meta($id, "eltdf_title_area_background_image_responsive_meta", true) != "") {
            $is_img_responsive = get_post_meta($id, "eltdf_title_area_background_image_responsive_meta", true);
        } else {
            //take value from theme options
            $is_img_responsive = readanddigest_options()->getOptionValue('title_area_background_image_responsive');
        }

		//check if post type is standard
		if (is_singular('post')){
			$post_type = get_post_format($id);
			$has_thumbnail = has_post_thumbnail($id);
			if (($post_type == 'standard' || !$post_type) && $has_thumbnail){
				$is_standard_post = true;
			}
		}

        //is title image chosen for current page?
        
		if ($is_standard_post){
			$title_image_src = wp_get_attachment_image_src(get_post_thumbnail_id($id),'readanddigest_single_post_title');
			$title_img = $title_image_src[0];
		}
        elseif(get_post_meta($id, "eltdf_title_area_background_image_meta", true) != ""){
            $title_img = get_post_meta($id, "eltdf_title_area_background_image_meta", true);
        }else{
            //take image that is set in theme options
            $title_img = readanddigest_options()->getOptionValue('title_area_background_image');
        }

        //is title image hidden for current page?
        if(get_post_meta($id, "eltdf_hide_background_image_meta", true) == "yes") {
            $show_title_img = false;
        }

        //is title image set, visible and responsive?
        if($title_img !== '' && $show_title_img == true) {

            //is image responsive?
            if($is_img_responsive == 'yes') {
                $classes[] = 'eltdf-title-image-responsive';
            }
            //is image not responsive?
            elseif($is_img_responsive == 'no') {
                $classes[] = 'eltdf-title-image-not-responsive';
            }
        }

        return $classes;
    }

    add_filter('readanddigest_title_classes', 'readanddigest_title_background_image_div_classes');
}