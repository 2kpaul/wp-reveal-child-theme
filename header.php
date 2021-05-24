<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php
    /**
     * @see readanddigest_header_meta() - hooked with 10
     * @see eltd_user_scalable - hooked with 10
     */
    ?>
    <?php do_action('readanddigest_header_meta'); ?>

    <?php wp_head(); ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            jQuery("#comments .eltdf-comment-number h6").text('SHOW COMMENTS');
            jQuery("#comments .eltdf-comment-number h6").click(function() {
                jQuery("#comments .eltdf-comments").toggle('fast');
                if (jQuery("#comments .eltdf-comment-number h6").text() == 'SHOW COMMENTS') {
                    jQuery("#comments .eltdf-comment-number h6").text('HIDE COMMENTS');
                } else {
                    jQuery("#comments .eltdf-comment-number h6").text('SHOW COMMENTS');
                }
            });
        });
    </script>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
    <?php readanddigest_get_side_area(); ?>
    <div class="eltdf-wrapper">
        <div class="eltdf-wrapper-inner">
            <?php readanddigest_get_header(); ?>

            <?php if (readanddigest_options()->getOptionValue('show_back_button') == "yes") { ?>
                <a id='eltdf-back-to-top' href='#'>
                    <span class="eltdf-icon-stack">
                        <?php
                        readanddigest_icon_collections()->getBackToTopIcon('linea-icons');
                        ?>
                    </span>
                </a>
            <?php } ?>

            <div class="eltdf-content" <?php readanddigest_content_elem_style_attr(); ?>>
                <div class="eltdf-content-inner">