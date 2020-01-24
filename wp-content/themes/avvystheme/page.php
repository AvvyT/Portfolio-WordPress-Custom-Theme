<!-- About sida/Default template -->
<?php get_header();?>

<!-- Facts Section -->
<div class="block-media-text">
<?php
if (have_rows('facts_section')):
    while (have_rows('facts_section')): the_row();?>
      <?php $img = get_sub_field('facts_section_image'); ?>
        <img src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
        <div class="block-media-text-content">
            <h1 class="title"><?php the_sub_field('facts_section_heading');?></h1>
            <p class="text"><?php the_sub_field('facts_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Gray Section -->
<div class="block-grey-text">
    <div class="block-grey-text-content">
        <h1 class="title"><?php the_field('gray_section_heading');?></h1>
        <p class="text"><?php the_field('gray_section_content');?></p>
    </div>
    <div>
        <a href="<?php the_field('gray_section_button_url');?>">
        <button><?php the_field('gray_section_button_text');?></button></a>
    </div>
</div>

<!-- Gallery Section -->
<?php
if (have_rows('gallery_section')):
    while (have_rows('gallery_section')): the_row();?>
        
        <?php $img1 = get_sub_field('img_1'); ?>
        <div class="img_small">
            <img src="<?php echo $img1["sizes"]["content image"]; ?>" alt="">
        </div>
        <?php $img2 = get_sub_field('img_2'); ?>
        <div class="img_small">
            <img src="<?php echo $img2["sizes"]["content image"]; ?>" alt="">
        </div> <?php $img3 = get_sub_field('img_3'); ?>
        <div class="img_small">
            <img src="<?php echo $img3["sizes"]["content image"]; ?>" alt="">
        </div>
        <h1><?php the_sub_field('heading');?></h1>
        <p><?php the_sub_field('content');?></p>
        <?php $img = get_sub_field('side_img'); ?>
        <div class="img_medium">
            <img src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
        </div>
    <?php endwhile;
endif;
?>

<?php
// Post Loop
/* if (have_posts()):
while (have_posts()): the_post();?>
<?php get_template_part('content', get_post_format());?>
<?php endwhile;
endif; */
?>
<?php get_footer();?>