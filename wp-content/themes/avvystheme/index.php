<!-- Home sida -->
<?php /* Template Name: Startsida */ ?>
<?php get_header();?>

<!-- Left img Section -->
<div class="block-media-text-left">
<?php
if (have_rows('left_img_section')):
    while (have_rows('left_img_section')): the_row();?>
     <?php $img = get_sub_field('left_img_section_image'); ?>
        <img src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
     <div class="block-media-text-left-content">
        <h1 class="title"><?php the_sub_field('left_img_section_heading');?></h1>
        <p class="text"><?php the_sub_field('left_img_section_content');?></p>
     </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Right img Section -->
<div class="block-media-text-right">
<?php
if (have_rows('right_img_section')):
    while (have_rows('right_img_section')): the_row();?>
        <div class="block-media-text-right-content">
            <h1 class="title"><?php the_sub_field('right_img_section_heading');?></h1>
            <p class="text"><?php the_sub_field('right_img_section_content');?></p>
            <div>
                <a href="<?php the_sub_field('right_img_section_button_url');?>">
                    <button><?php the_sub_field('right_img_section_button_text');?></button>
                </a>
            </div>
        </div>
        <?php $img = get_sub_field('right_img_section_img'); ?>
        <div><img src="<?php echo $img["sizes"]["content image"]; ?>" alt=""></div>
    <?php endwhile;
endif;
?>
</div>

<?php get_footer();?>