<!-- Det här är en custom page template -->
<?php /* Template Name: Kontaktsida */ ?>
<?php get_header();?>

<!-- Gray Section -->
<div class="block-grey-text">
 <?php
if (have_rows('gray_section')):
    while (have_rows('gray_section')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="title"><?php the_sub_field('gray_section_heading');?></h1>
            <p class="text-gray"><?php the_sub_field('gray_section_content');?></p>
        </div>
        <div>
            <a href="<?php the_sub_field('gray_section_button_url');?>">
            <button><?php the_sub_field('gray_section_button_text');?></button></a>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Facts Section -->
<div class="block-media-text">
<?php
if (have_rows('facts_section')):
    while (have_rows('facts_section')): the_row();?>
      <?php $img = get_sub_field('facts_section_image'); ?>
        <img src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
        <div class="block-contact-content">
            <h1 class="title"><?php the_sub_field('facts_section_heading');?></h1>
            <p class="text"><?php the_sub_field('facts_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>


<?php get_footer();?>