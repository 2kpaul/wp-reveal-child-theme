<?php

if (!function_exists('readanddigest_title_area_typography_style')) {

    function readanddigest_title_area_typography_style(){

        $title_styles = array();

        if(readanddigest_options()->getOptionValue('page_title_color') !== '') {
            $title_styles['color'] = readanddigest_options()->getOptionValue('page_title_color');
        }
        if(readanddigest_options()->getOptionValue('page_title_google_fonts') !== '-1') {
            $title_styles['font-family'] = readanddigest_get_formatted_font_family(readanddigest_options()->getOptionValue('page_title_google_fonts'));
        }
        if(readanddigest_options()->getOptionValue('page_title_fontsize') !== '') {
            $title_styles['font-size'] = readanddigest_options()->getOptionValue('page_title_fontsize').'px';
        }
        if(readanddigest_options()->getOptionValue('page_title_lineheight') !== '') {
            $title_styles['line-height'] = readanddigest_options()->getOptionValue('page_title_lineheight').'px';
        }
        if(readanddigest_options()->getOptionValue('page_title_texttransform') !== '') {
            $title_styles['text-transform'] = readanddigest_options()->getOptionValue('page_title_texttransform');
        }
        if(readanddigest_options()->getOptionValue('page_title_fontstyle') !== '') {
            $title_styles['font-style'] = readanddigest_options()->getOptionValue('page_title_fontstyle');
        }
        if(readanddigest_options()->getOptionValue('page_title_fontweight') !== '') {
            $title_styles['font-weight'] = readanddigest_options()->getOptionValue('page_title_fontweight');
        }
        if(readanddigest_options()->getOptionValue('page_title_letter_spacing') !== '') {
            $title_styles['letter-spacing'] = readanddigest_options()->getOptionValue('page_title_letter_spacing').'px';
        }

        $title_selector = array(
            '.eltdf-title .eltdf-title-holder .eltdf-title-text',
            '.single-post .eltdf-title.eltdf-title-has-thumbnail .eltdf-title-holder .eltdf-title-text'
        );

        echo readanddigest_dynamic_css($title_selector, $title_styles);


        $breadcrumb_styles = array();

        if(readanddigest_options()->getOptionValue('page_breadcrumb_color') !== '') {
            $breadcrumb_styles['color'] = readanddigest_options()->getOptionValue('page_breadcrumb_color');
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_google_fonts') !== '-1') {
            $breadcrumb_styles['font-family'] = readanddigest_get_formatted_font_family(readanddigest_options()->getOptionValue('page_breadcrumb_google_fonts'));
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_fontsize') !== '') {
            $breadcrumb_styles['font-size'] = readanddigest_options()->getOptionValue('page_breadcrumb_fontsize').'px';
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_lineheight') !== '') {
            $breadcrumb_styles['line-height'] = readanddigest_options()->getOptionValue('page_breadcrumb_lineheight').'px';
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_texttransform') !== '') {
            $breadcrumb_styles['text-transform'] = readanddigest_options()->getOptionValue('page_breadcrumb_texttransform');
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_fontstyle') !== '') {
            $breadcrumb_styles['font-style'] = readanddigest_options()->getOptionValue('page_breadcrumb_fontstyle');
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_fontweight') !== '') {
            $breadcrumb_styles['font-weight'] = readanddigest_options()->getOptionValue('page_breadcrumb_fontweight');
        }
        if(readanddigest_options()->getOptionValue('page_breadcrumb_letter_spacing') !== '') {
            $breadcrumb_styles['letter-spacing'] = readanddigest_options()->getOptionValue('page_breadcrumb_letter_spacing').'px';
        }

        $breadcrumb_selector = array(
            '.eltdf-title .eltdf-title-holder .eltdf-breadcrumbs a, .eltdf-title .eltdf-title-holder .eltdf-breadcrumbs span'
        );

        echo readanddigest_dynamic_css($breadcrumb_selector, $breadcrumb_styles);

        $breadcrumb_selector_styles = array();
        if(readanddigest_options()->getOptionValue('page_breadcrumb_hovercolor') !== '') {
            $breadcrumb_selector_styles['color'] = readanddigest_options()->getOptionValue('page_breadcrumb_hovercolor').' !important';
        }

        $breadcrumb_hover_selector = array(
            '.eltdf-title .eltdf-title-holder .eltdf-breadcrumbs a:hover'
        );

        echo readanddigest_dynamic_css($breadcrumb_hover_selector, $breadcrumb_selector_styles);


        $title_info_styles = array();

        if(readanddigest_options()->getOptionValue('page_title_info_color') !== '') {
            $title_color['color'] = readanddigest_options()->getOptionValue('page_title_info_color');
			$title_color_selector = array(
			'.single-post .eltdf-title .eltdf-title-cat, .single-post .eltdf-title .eltdf-pt-info-section'
			);

			echo readanddigest_dynamic_css($title_color_selector, $title_color);
        }
        if(readanddigest_options()->getOptionValue('page_title_info_google_fonts') !== '-1') {
            $title_info_styles['font-family'] = readanddigest_get_formatted_font_family(readanddigest_options()->getOptionValue('page_title_info_google_fonts'));
        }
        if(readanddigest_options()->getOptionValue('page_title_info_fontsize') !== '') {
            $title_info_styles['font-size'] = readanddigest_options()->getOptionValue('page_title_info_fontsize').'px';
            echo readanddigest_dynamic_css('.single-post .eltdf-title .eltdf-pt-info-section > div', array('font-size' => ($title_info_styles['font-size'] - 3).'px' ));
        }
        if(readanddigest_options()->getOptionValue('page_title_info_lineheight') !== '') {
            $title_info_styles['line-height'] = readanddigest_options()->getOptionValue('page_title_info_lineheight').'px';
        }
        if(readanddigest_options()->getOptionValue('page_title_info_texttransform') !== '') {
            $title_info_styles['text-transform'] = readanddigest_options()->getOptionValue('page_title_info_texttransform');
        }
        if(readanddigest_options()->getOptionValue('page_title_info_fontstyle') !== '') {
            $title_info_styles['font-style'] = readanddigest_options()->getOptionValue('page_title_info_fontstyle');
        }
        if(readanddigest_options()->getOptionValue('page_title_info_fontweight') !== '') {
            $title_info_styles['font-weight'] = readanddigest_options()->getOptionValue('page_title_info_fontweight');
        }
        if(readanddigest_options()->getOptionValue('page_title_info_letter_spacing') !== '') {
            $title_info_styles['letter-spacing'] = readanddigest_options()->getOptionValue('page_title_info_letter_spacing').'px';
        }

        $title_info_selector = array(
            '.single-post .eltdf-title .eltdf-post-info-category,.single-post .eltdf-title.eltdf-title-has-thumbnail .eltdf-title-post-author, .single-post .eltdf-title .eltdf-pt-info-section > div'
        );

        echo readanddigest_dynamic_css($title_info_selector, $title_info_styles);

        $title_info_selector_styles = array();
        if(readanddigest_options()->getOptionValue('page_title_info_hover_color') !== '') {
            $title_info_selector_styles['color'] = readanddigest_options()->getOptionValue('page_title_info_hover_color').' !important';
        }

        $title_info_hover_selector = array(
            '.single-post .eltdf-title .eltdf-post-info-category a:hover',
            '.single-post .eltdf-title.eltdf-title-has-thumbnail .eltdf-title-post-author a:hover',
            '.single-post .eltdf-title .eltdf-pt-info-section > div a:hover'
        );

        echo readanddigest_dynamic_css($title_info_hover_selector, $title_info_selector_styles);

        if(readanddigest_options()->getOptionValue('page_title_info_author_color') !== '') {
            $title_info_author['color'] = readanddigest_options()->getOptionValue('page_title_info_author_color');

			echo readanddigest_dynamic_css('.single-post .eltdf-title.eltdf-title-has-thumbnail .eltdf-title-post-author', $title_info_author);
        }

    }

    add_action('readanddigest_style_dynamic', 'readanddigest_title_area_typography_style');

}


