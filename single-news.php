<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php //readanddigest_get_title(); 
        ?>
        <?php get_template_part('slider'); ?>
        <div class="eltdf-container">
            <?php do_action('readanddigest_after_container_open'); ?>
            <div class="eltdf-container-inner">
                <?php readanddigest_get_blog_single(); ?>
            </div>
            <?php do_action('readanddigest_before_container_close'); ?>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>