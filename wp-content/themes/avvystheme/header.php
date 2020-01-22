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
    <div class='block-content'>
    <?php
// Custom body class
if (is_front_page()):
    $avvy_classes = array('avvys-class', 'my-class');?>
	        <h1>
	            <font>
	                <font>Frontend</font>
	                <font>Developer</font>
	            </font>
	        </h1>
	        <?php elseif ($avvy_classes = array('page-id-6', 'no-avvys-class')): ?>
        <h1>
            <font>
                <font>My Passions &</font>
                <font>Personality</font>
            </font>
        </h1>
        <?php elseif ($avvy_classes = array('page-id-51', 'no-avvys-class')): ?>
         <h1>
            <font>
                <font>Dig a little</font>
                <font>deeper</font>
            </font>
        </h1>
        <?php else: 
            $avvy_classes = array('page-id-7', 'no-avvys-class'); ?>
        <h1>
            <font>
                <font>Connect with</font>
                <font>me today</font>
            </font>
        </h1>
        <?php endif;?>
    </div>
</div>