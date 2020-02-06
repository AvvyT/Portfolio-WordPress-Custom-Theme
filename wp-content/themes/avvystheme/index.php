<!-- Home sida -->
<?php /* Template Name: Startsida */?>
<?php get_header();?>

<!-- Left img Section -->
<div class="block-index-media-text-left box-text bg-white">
<?php
if (have_rows('left_img_section')):
    while (have_rows('left_img_section')): the_row();?>
        <?php $img = get_sub_field('left_img_section_image');?>
          <img src="<?php echo $img["sizes"]["content image"]; ?>" alt="">
          <div class="box-content col-black">
            <h1 class="font-title"><?php the_sub_field('left_img_section_heading');?></h1>
            <p class="font-nova-text"><?php the_sub_field('left_img_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Home Gallery Section -->
<div class="block-home-gallery col-black bg-white">
 <h1 class="home-title font-title-bold">A few of my projects</h1>
<?php
if (have_rows('home_gallery_section')):
    while (have_rows('home_gallery_section')): the_row();?>
        <div class="box-CV-content-shadow bg-white-b col-black">
            <div class="block-home-gallery-media-text">
                <div class="block-gallery-content">
                    <h2 class="font-title"><?php the_sub_field('img_1_heading');?></h2>
                </div>
            </div>
            <?php $img1 = get_sub_field('img_1');?>
            <?php $img1a = get_sub_field('img_1a');?>
            <div>
                <img class="home-img" src="<?php echo $img1["sizes"]["content image"]; ?>" alt="">
                <img class="home-img" src="<?php echo $img1a["sizes"]["content image"]; ?>" alt="">
            </div>
            <div class="gallery-button">
                <a href="<?php the_sub_field('img_1_button_url');?>">
                <button class="white-button"><?php the_sub_field('img_1_button_text');?></button></a>
                <a href="<?php the_sub_field('img_1_button_url_2');?>">
                <button class="white-button"><?php the_sub_field('img_1_button_text_2');?></button></a>
            </div>
        </div>
        <!-- Section 2 -->
        <div class="box-CV-content-shadow bg-white-b col-black">
            <div class="block-home-gallery-media-text">
                <div class="block-gallery-content">
                    <h2 class="font-title"><?php the_sub_field('img_2_heading');?></h2>
                </div>
            </div>
            <?php $img2 = get_sub_field('img_2');?>
            <?php $img2a = get_sub_field('img_2a');?>
            <div>
                <img class="home-img" src="<?php echo $img2["sizes"]["content image"]; ?>" alt="">
                <img class="home-img" src="<?php echo $img2a["sizes"]["content image"]; ?>" alt="">
            </div>
            <div class="gallery-button">
                <a href="<?php the_sub_field('img_2_button_url');?>">
                <button class="white-button"><?php the_sub_field('img_2_button_text');?></button></a>
            </div>
        </div>
        <!-- Section 3 -->
        <div class="box-CV-content-shadow bg-white-b col-black">
            <div class="block-home-gallery-media-text">
                <div class="block-gallery-content">
                    <h2 class="font-title"><?php the_sub_field('img_3_heading');?></h2>
                </div>
            </div>
            <?php $img3 = get_sub_field('img_3');?>
            <?php $img3a = get_sub_field('img_3a');?>
            <div>
                <img class="home-img" src="<?php echo $img3["sizes"]["content image"]; ?>" alt="">
                <img class="home-img" src="<?php echo $img3a["sizes"]["content image"]; ?>" alt="">
            </div>
            <div class="gallery-button">
                <a href="<?php the_sub_field('img_3_button_url');?>">
                <button class="white-button"><?php the_sub_field('img_3_button_text');?></button></a>
            </div>
        </div>
        <!-- Section 4 -->
        <div class="box-CV-content-shadow bg-white-b col-black">
            <div class="block-home-gallery-media-text">
                <div class="block-gallery-content">
                    <h2 class="font-title"><?php the_sub_field('img_4_heading');?></h2>
                </div>
            </div>
            <?php $img4 = get_sub_field('img_4');?>
            <?php $img4a = get_sub_field('img_4a');?>
            <div>
                <img class="home-img" src="<?php echo $img4["sizes"]["content image"]; ?>" alt="">
                <img class="home-img" src="<?php echo $img4a["sizes"]["content image"]; ?>" alt="">
            </div>
            <div class="gallery-button">
                <a href="<?php the_sub_field('img_4_button_url');?>">
                <button class="white-button"><?php the_sub_field('img_4_button_text');?></button></a>
            </div>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Right img Section -->
<div class="box-text bg-lightgray-b">
<?php
if (have_rows('right_img_section')):
    while (have_rows('right_img_section')): the_row();?>
        <div class="box-content col-black">
            <h1 class="font-title"><?php the_sub_field('right_img_section_heading');?></h1>
            <p class="font-nova-text"><?php the_sub_field('right_img_section_content');?></p>
            <div>
                <a href="<?php the_sub_field('right_img_section_button_url');?>">
                    <button class="dark-button"><?php the_sub_field('right_img_section_button_text');?></button>
                </a>
            </div>
        </div>
        <?php $img = get_sub_field('right_img_section_img');?>
        <div><img src="<?php echo $img["sizes"]["content image"]; ?>" alt=""></div>
    <?php endwhile;
endif;
?>
</div>

<?php get_footer();?>