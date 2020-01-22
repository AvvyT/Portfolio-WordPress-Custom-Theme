<!-- The main template. Master file -->
<!-- To include the header... -->
<?php get_header();?>
<?php
// Post Loop
if (have_posts()):
    while (have_posts()): the_post();?>
        <?php get_template_part('content', get_post_format());?>

        <?php endwhile;
endif;
?>
<?php get_footer();?>