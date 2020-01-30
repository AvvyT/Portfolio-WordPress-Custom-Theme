<?php /* Template Name: Resumesida */ ?>
<?php get_header();?>

<?php
// Post Loop
/*  if (have_posts()):
while (have_posts()): the_post();?>
<?php get_template_part('content', get_post_format());?>
<?php endwhile;
endif; */ 
?>

<!-- DarkGray Section -->
<div class="block-grey-text">
 <?php
if (have_rows('resume_dark_gray_section')):
    while (have_rows('resume_dark_gray_section')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="title"><?php the_sub_field('resume_dark_gray_section_heading');?></h1>
            <p class="text-gray"><?php the_sub_field('resume_dark_gray_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- *CV Section* -->
<div class="CV-container">
    <!-- CV Work Section -->
    <h1 class="resume-title">Employment History</h1>
    <?php 
        $args_work = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'work' );
        $loop1 = new WP_Query( $args_work ); // hämta resume post
        
        if( $loop1->have_posts() ):
            while( $loop1->have_posts() ): $loop1->the_post(); ?>
                <div class="block-CV-resume-text">
                    <?php get_template_part('resume-container', get_post_format()); ?>
                </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>
 
    <!-- CV Education Section -->
    <h1 class="resume-title">Education</h1>
    <?php 
        $args_education = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'education');
        $loop = new WP_Query( $args_education ); // hämta resume post
        
        if( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
             <div class="block-CV-resume-text">
                <?php get_template_part('resume-container', get_post_format()); ?>
             </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>

     <!-- CV Skills Section -->
     <h1 class="resume-title">Technologies</h1>
    <?php 
        $args_skills = array('post_type' => 'resume', 'posts_per_page' => 6, 'category_name' => 'skills');
        $loop = new WP_Query( $args_skills ); // hämta resume post
        
        if( $loop->have_posts() ):
            while( $loop->have_posts() ): $loop->the_post(); ?>
             <div class="block-CV-resume-text">
                <?php get_template_part('resume-container', get_post_format()); ?>
             </div>
            <?php endwhile;
        endif; 
        // starta om query, så att försätta läsa nästa section
            wp_reset_postdata();	
    ?>
</div>

<!-- DarkGray Section2 -->
<div class="block-grey-text">
 <?php
if (have_rows('resume_dark_gray_section_two')):
    while (have_rows('resume_dark_gray_section_two')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="title"><?php the_sub_field('resume_dark_gray_section_heading');?></h1>
            <p class="text-gray"><?php the_sub_field('resume_dark_gray_section_content');?></p>
        </div>
    <?php endwhile;
endif;
?>
</div>

<!-- Gray Section -->
<div class="block-white-text">
 <?php
if (have_rows('resume_gray_section')):
    while (have_rows('resume_gray_section')): the_row();?>
        <div class="block-grey-text-content">
            <h1 class="title"><?php the_sub_field('resume_gray_section_heading');?></h1>
            <p class="text-gray"><?php the_sub_field('resume_gray_section_content');?></p>
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