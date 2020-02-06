<!-- Det här är en custom page template -->
<?php /* Template Name: Kontaktsida */ ?>
<?php get_header();?>

<!-- Facts Section -->
<div class="box-contact-media-text bg-white">
<?php
if (have_rows('facts_section')):
    while (have_rows('facts_section')): the_row();?>
    <div class="contact-img">
      <?php $img = get_sub_field('facts_section_image'); ?>
        <img class="img-element" src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
     </div>
        <!-- Gray Section -->
        <div class="box-contact">
            <div class="box-text-md col-white bg-darkgray">
            <?php
            if (have_rows('gray_section')):
                while (have_rows('gray_section')): the_row();?>
                    <div class="block-grey-text-content">
                        <h1 class="font-title"><?php the_sub_field('gray_section_heading');?></h1>
                        <p class="font-sans-serif-text"><?php the_sub_field('gray_section_content');?></p>
                    </div>
                    <div>
                        <a href="<?php the_sub_field('gray_section_button_url');?>">
                        <button class="dark-button"><?php the_sub_field('gray_section_button_text');?></button></a>
                    </div>
                <?php endwhile;
            endif;
            ?>
            </div>
            <div class="block-contact-content col-black bg-white-b">
                <h1 class="font-title"><?php the_sub_field('facts_section_heading');?></h1>
                <p class="font-nova-text"><?php the_sub_field('facts_section_content');?></p>
            </div>
        </div>
    <?php endwhile;
endif;
?>
</div>


<?php get_footer();?>