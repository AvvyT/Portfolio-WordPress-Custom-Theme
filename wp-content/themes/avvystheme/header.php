<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Avvys Theme</title>
    <!-- to print all -->
    <?php wp_head();?>
</head>

<?php
// Custom body class
if (is_front_page()):
    $avvy_classes = array('avvys-class', 'my-class');
else:
    $avvy_classes = array('no-avvys-class');
endif;
?>

<!-- implement the body_class template tag into a theme. -->
<body <?php body_class($avvy_classes);?>>
    <header>
        <div class='header-inner'>
            <nav>
                <?php wp_nav_menu(array('theme_location' => 'primary'));?>
            </nav>
       </div>
    </header>

<div class='block'>
    <div class='block-header'>
<?php
if (have_rows('banner_section')):
    while (have_rows('banner_section')): the_row();?>
    <h1>
        <font>
            <font><?php the_sub_field('banner_heading_1');?> </font>
            <font><?php the_sub_field('banner_heading_2');?> </font>
        </font>
    </h1>
    <?php endwhile;
endif;
?>
    </div>
</div>