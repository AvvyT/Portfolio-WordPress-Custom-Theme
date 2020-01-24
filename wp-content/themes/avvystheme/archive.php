Category

<?php
// Post Loop
if (have_posts()):
    while (have_posts()): the_post(); echo 'Här är archive!';?>
        <?php get_template_part('content', get_post_format());?>

        <?php endwhile;
endif;
?>