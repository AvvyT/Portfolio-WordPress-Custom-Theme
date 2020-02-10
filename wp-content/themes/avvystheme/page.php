<!-- About sida/Default template -->
<?php get_header();?>

<!-- Facts Section -->
<div class="block-page-media-text box-text bg-white">
<?php
if (have_rows('facts_section')):
    while (have_rows('facts_section')): the_row();?>
      <?php $img = get_sub_field('facts_section_image'); ?>
        <img class="responsive" src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
        <div class="block-grey-text-content col-black">
            <h1 class="font-title"><?php the_sub_field('facts_section_heading');?></h1>
            <p class="font-nova-text"><?php the_sub_field('facts_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Gray Section -->
<div class="box-text-md bg-darkgray col-white">
    <div class="block-grey-text-content">
        <h1 class="font-title"><?php the_field('gray_section_heading');?></h1>
        <p class="font-nova-text"><?php the_field('gray_section_content');?></p>
    </div>
    <div>
        <a href="<?php the_field('gray_section_button_url');?>">
        <button class="dark-button"><?php the_field('gray_section_button_text');?></button></a>
    </div>
</div>

<!-- Gallery Section -->
<div class="block-gallery bg-lightgray-b">
<?php
if (have_rows('gallery_section')):
    while (have_rows('gallery_section')): the_row();?>
        <div class="block-gallery-media">
            <?php $img1 = get_sub_field('img_1'); ?>
                <img class="img_small" src="<?php echo $img1["sizes"]["content image"]; ?>" alt="">
            <?php $img2 = get_sub_field('img_2'); ?>
                <img class="img_small" src="<?php echo $img2["sizes"]["content image"]; ?>" alt="">
            <?php $img3 = get_sub_field('img_3'); ?>
                <img class="img_small" src="<?php echo $img3["sizes"]["content image"]; ?>" alt="">
        </div>
        <div class="block-gallery-media-text">
            <div class="block-gallery-content col-black">
                <h1 class="font-title"><?php the_sub_field('heading');?></h1>
                <p class="font-nova-text"><?php the_sub_field('content');?></p>
            </div>
            <?php $img = get_sub_field('side_img'); ?>
                <img class="responsive" src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
        </div>
    <?php endwhile;
endif;
?>
</div>

<?php
// Post Loop
/* if (have_posts()):
while (have_posts()): the_post();?>
<?php get_template_part('content', get_post_format());?>
<?php endwhile;
endif; */
?>
<?php get_footer();?>