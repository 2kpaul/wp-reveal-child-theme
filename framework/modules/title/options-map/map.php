<?php

if ( ! function_exists('readanddigest_title_options_map') ) {

	function readanddigest_title_options_map() {

		readanddigest_add_admin_page(
			array(
				'slug' => '_title_page',
				'title' => 'Title',
				'icon' => 'fa fa-list-alt'
			)
		);

		$panel_title = readanddigest_add_admin_panel(
			array(
				'page' => '_title_page',
				'name' => 'panel_title',
				'title' => 'Title Settings'
			)
		);

		readanddigest_add_admin_field(
			array(
				'name' => 'show_title_area',
				'type' => 'yesno',
				'default_value' => 'yes',
				'label' => 'Show Title Area',
				'description' => esc_html__( 'This option will enable/disable Title Area', 'readanddigest' ),
				'parent' => $panel_title,
				'args' => array(
					"dependence" => true,
					"dependence_hide_on_yes" => "",
					"dependence_show_on_yes" => "#eltdf_show_title_area_container"
				)
			)
		);

		$show_title_area_container = readanddigest_add_admin_container(
			array(
				'parent' => $panel_title,
				'name' => 'show_title_area_container',
				'hidden_property' => 'show_title_area',
				'hidden_value' => 'no'
			)
		);

		readanddigest_add_admin_field(
			array(
				'name' => 'title_area_content_alignment',
				'type' => 'select',
				'default_value' => 'left',
				'label' => 'Content Alignment',
				'description' => esc_html__( 'Specify title content alignment', 'readanddigest' ),
				'parent' => $show_title_area_container,
				'options' => array(
					'left' => 'Left',
					'center' => 'Center',
					'right' => 'Right'
				)
			)
		);

		readanddigest_add_admin_field(
			array(
				'name' => 'title_area_background_color',
				'type' => 'color',
				'label' => 'Background Color',
				'description' => esc_html__( 'Choose a background color for Title Area', 'readanddigest' ),
				'parent' => $show_title_area_container
			)
		);

		readanddigest_add_admin_field(
			array(
				'name' => 'title_area_background_image',
				'type' => 'image',
				'label' => 'Background Image',
				'description' => esc_html__( 'Choose an Image for Title Area', 'readanddigest' ),
				'parent' => $show_title_area_container
			)
		);

		readanddigest_add_admin_field(
			array(
				'name' => 'title_area_background_image_responsive',
				'type' => 'yesno',
				'default_value' => 'no',
				'label' => 'Background Responsive Image',
				'description' => esc_html__( 'Enabling this option will make Title background image responsive', 'readanddigest' ),
				'parent' => $show_title_area_container,
				'args' => array(
					"dependence" => true,
					"dependence_hide_on_yes" => "#eltdf_title_area_background_image_responsive_container",
					"dependence_show_on_yes" => ""
				)
			)
		);

		$title_area_background_image_responsive_container = readanddigest_add_admin_container(
			array(
				'parent' => $show_title_area_container,
				'name' => 'title_area_background_image_responsive_container',
				'hidden_property' => 'title_area_background_image_responsive',
				'hidden_value' => 'yes'
			)
		);

		readanddigest_add_admin_field(array(
			'name' => 'title_area_height',
			'type' => 'text',
			'label' => 'Height',
			'description' => esc_html__( 'Set a height for Title Area', 'readanddigest' ),
			'parent' => $title_area_background_image_responsive_container,
			'args' => array(
				'col_width' => 2,
				'suffix' => 'px'
			)
		));

        readanddigest_add_admin_field(
            array(
                'name' => 'title_area_border_color',
                'type' => 'color',
                'label' => 'Bottom Border Color',
                'description' => esc_html__( 'Choose a bottom border color for Title Area', 'readanddigest' ),
                'parent' => $show_title_area_container
            )
        );


		$panel_typography = readanddigest_add_admin_panel(
			array(
				'page' => '_title_page',
				'name' => 'panel_title_typography',
				'title' => 'Typography'
			)
		);

		$group_page_title_styles = readanddigest_add_admin_group(array(
			'name'			=> 'group_page_title_styles',
			'title'			=> 'Title',
			'description' => esc_html__( 'Define styles for page title', 'readanddigest' ),
			'parent'		=> $panel_typography
		));

		$page_title_row_1 = readanddigest_add_admin_row(array(
			'name'		=> 'page_title_row_1',
			'parent'	=> $group_page_title_styles
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_title_color',
			'default_value'	=> '',
			'label'			=> 'Text Color',
			'parent'		=> $page_title_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_fontsize',
			'default_value'	=> '',
			'label'			=> 'Font Size',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_lineheight',
			'default_value'	=> '',
			'label'			=> 'Line Height',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_texttransform',
			'default_value'	=> '',
			'label'			=> 'Text Transform',
			'options'		=> readanddigest_get_text_transform_array(),
			'parent'		=> $page_title_row_1
		));

		$page_title_row_2 = readanddigest_add_admin_row(array(
			'name'		=> 'page_title_row_2',
			'parent'	=> $group_page_title_styles,
			'next'		=> true
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_title_google_fonts',
			'default_value'	=> '-1',
			'label'			=> 'Font Family',
			'parent'		=> $page_title_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_fontstyle',
			'default_value'	=> '',
			'label'			=> 'Font Style',
			'options'		=> readanddigest_get_font_style_array(),
			'parent'		=> $page_title_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_fontweight',
			'default_value'	=> '',
			'label'			=> 'Font Weight',
			'options'		=> readanddigest_get_font_weight_array(),
			'parent'		=> $page_title_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_letter_spacing',
			'default_value'	=> '',
			'label'			=> 'Letter Spacing',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_row_2
		));

		$group_page_breadcrumbs_styles = readanddigest_add_admin_group(array(
			'name'			=> 'group_page_breadcrumbs_styles',
			'title'			=> 'Title Breadcrumbs',
			'description' => esc_html__( 'Define styles for page title breadcrumbs', 'readanddigest' ),
			'parent'		=> $panel_typography
		));

		$row_page_breadcrumbs_styles_1 = readanddigest_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_1',
			'parent'	=> $group_page_breadcrumbs_styles
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_breadcrumb_color',
			'default_value'	=> '',
			'label'			=> 'Text Color',
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_fontsize',
			'default_value'	=> '',
			'label'			=> 'Font Size',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_lineheight',
			'default_value'	=> '',
			'label'			=> 'Line Height',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_texttransform',
			'default_value'	=> '',
			'label'			=> 'Text Transform',
			'options'		=> readanddigest_get_text_transform_array(),
			'parent'		=> $row_page_breadcrumbs_styles_1
		));

		$row_page_breadcrumbs_styles_2 = readanddigest_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_2',
			'parent'	=> $group_page_breadcrumbs_styles,
			'next'		=> true
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_breadcrumb_google_fonts',
			'default_value'	=> '-1',
			'label'			=> 'Font Family',
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_fontstyle',
			'default_value'	=> '',
			'label'			=> 'Font Style',
			'options'		=> readanddigest_get_font_style_array(),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_breadcrumb_fontweight',
			'default_value'	=> '',
			'label'			=> 'Font Weight',
			'options'		=> readanddigest_get_font_weight_array(),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_breadcrumb_letter_spacing',
			'default_value'	=> '',
			'label'			=> 'Letter Spacing',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $row_page_breadcrumbs_styles_2
		));

		$row_page_breadcrumbs_styles_3 = readanddigest_add_admin_row(array(
			'name'		=> 'row_page_breadcrumbs_styles_3',
			'parent'	=> $group_page_breadcrumbs_styles,
			'next'		=> true
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_breadcrumb_hovercolor',
			'default_value'	=> '',
			'label'			=> 'Hover Color',
			'parent'		=> $row_page_breadcrumbs_styles_3
		));

		$group_page_title_info_styles = readanddigest_add_admin_group(array(
			'name'			=> 'group_page_title_info_styles',
			'title'			=> 'Title Info',
			'description' => esc_html__( 'Define styles for post title info', 'readanddigest' ),
			'parent'		=> $panel_typography
		));

		$page_title_info_row_1 = readanddigest_add_admin_row(array(
			'name'		=> 'page_title_info_row_1',
			'parent'	=> $group_page_title_info_styles
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_title_info_color',
			'default_value'	=> '',
			'label'			=> 'Text Color',
			'parent'		=> $page_title_info_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_info_fontsize',
			'default_value'	=> '',
			'label'			=> 'Font Size',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_info_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_info_lineheight',
			'default_value'	=> '',
			'label'			=> 'Line Height',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_info_row_1
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_info_texttransform',
			'default_value'	=> '',
			'label'			=> 'Text Transform',
			'options'		=> readanddigest_get_text_transform_array(),
			'parent'		=> $page_title_info_row_1
		));

		$page_title_info_row_2 = readanddigest_add_admin_row(array(
			'name'		=> 'page_title_info_row_2',
			'parent'	=> $group_page_title_info_styles,
			'next'		=> true
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'fontsimple',
			'name'			=> 'page_title_info_google_fonts',
			'default_value'	=> '-1',
			'label'			=> 'Font Family',
			'parent'		=> $page_title_info_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_info_fontstyle',
			'default_value'	=> '',
			'label'			=> 'Font Style',
			'options'		=> readanddigest_get_font_style_array(),
			'parent'		=> $page_title_info_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'selectblanksimple',
			'name'			=> 'page_title_info_fontweight',
			'default_value'	=> '',
			'label'			=> 'Font Weight',
			'options'		=> readanddigest_get_font_weight_array(),
			'parent'		=> $page_title_info_row_2
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'textsimple',
			'name'			=> 'page_title_info_letter_spacing',
			'default_value'	=> '',
			'label'			=> 'Letter Spacing',
			'args'			=> array(
				'suffix'	=> 'px'
			),
			'parent'		=> $page_title_info_row_2
		));

		$page_title_info_row_3 = readanddigest_add_admin_row(array(
			'name'		=> 'page_title_info_row_3',
			'parent'	=> $group_page_title_info_styles
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_title_info_hover_color',
			'default_value'	=> '',
			'label'			=> 'Text Hover Color',
			'parent'		=> $page_title_info_row_3
		));

		readanddigest_add_admin_field(array(
			'type'			=> 'colorsimple',
			'name'			=> 'page_title_info_author_color',
			'default_value'	=> '',
			'label'			=> 'Author Separated Color',
			'parent'		=> $page_title_info_row_3
		));

	}

	add_action( 'readanddigest_options_map', 'readanddigest_title_options_map', 4);
}