<?php /* Template Name: Resumesida */ ?>
<?php get_header();?>

<!-- DarkGray Section -->
<div class="box-text-md bg-darkgray col-white">
 <?php
if (have_rows('resume_dark_gray_section')):
    while (have_rows('resume_dark_gray_section')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="font-title"><?php the_sub_field('resume_dark_gray_section_heading');?></h1>
            <p class="font-sans-serif-text"><?php the_sub_field('resume_dark_gray_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- *CV Section* -->
<div class="CV-container bg-white">
    <!-- CV Work Section -->
    <h1 class="font-resume-title col-black">Employment History</h1>
    <?php 
        $args_work = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'work' );
        $loop1 = new WP_Query( $args_work ); // hämta resume post
        
        if( $loop1->have_posts() ):
            while( $loop1->have_posts() ): $loop1->the_post(); ?>
                <div class="box-CV-content-shadow font-sans-serif-text bg-white-b col-black">
                    <h3 class="font-title"><?php the_title();?></h3>
                    <?php the_content();?>
                </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>
 
    <!-- CV Education Section -->
    <h1 class="font-resume-title col-black">Education</h1>
    <?php 
        $args_education = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'education');
        $loop = new WP_Query( $args_education ); // hämta resume post
        
        if( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
             <div class="box-CV-content-shadow font-sans-serif-text bg-white-b col-black">
                <h3 class="font-title"><?php the_title();?></h3>
                <?php the_content();?>
                <?php //get_template_part('resume-container', get_post_format()); ?> 
             </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>

     <!-- CV Skills Section -->
     <h1 class="font-resume-title col-black">Technologies</h1>
    <?php 
        $args_skills = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'skills');
        $loop = new WP_Query( $args_skills ); // hämta resume post
        
        if( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
             <div class="box-CV-content-shadow font-sans-serif-text bg-white-b col-black">
                <h3 class="font-title"><?php the_title();?></h3>
                    <?php the_content();?>
                <?php //get_template_part('resume-container', get_post_format()); ?>
             </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>
</div>

<!-- DarkGray Section2 -->
<div class="box-text-md bg-darkgray col-white">
 <?php
if (have_rows('resume_dark_gray_section_two')):
    while (have_rows('resume_dark_gray_section_two')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="font-title"><?php the_sub_field('resume_dark_gray_section_heading');?></h1>
            <p class="font-sans-serif-text"><?php the_sub_field('resume_dark_gray_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Gray Section -->
<div class="box-text-md bg-lightgray-b col-black">
 <?php
if (have_rows('resume_gray_section')):
    while (have_rows('resume_gray_section')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="font-title"><?php the_sub_field('resume_gray_section_heading');?></h1>
            <p class="font-sans-serif-text"><?php the_sub_field('resume_gray_section_content');?></p>
        </div>
        <div>
            <a href="<?php the_sub_field('resume_gray_section_button_url');?>">
            <button class="white-button"><?php the_sub_field('resume_gray_section_button_text');?></button></a>
        </div>
    <?php endwhile;
endif;
?>
</div>

<?php get_footer();?>