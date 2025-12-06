<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                        echo ' :';
                                    } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_ico', 'option'); ?>"> 
    <link rel="shortcut icon" href="<?php echo $logo_image = get_field('favicon_icon', 'option'); ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="theme-color" content="#009444">
    <meta name="format-detection" content="telephone=no">

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>  
    <script>    
        new WOW().init({
            mobile: false
        }); 
    </script>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css?v=1.50" /> 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <?php wp_head(); ?>

    <style>
        <?php echo  get_field('css_text_area', 'option'); ?>
    </style>
    
    <script> if (typeof iFrameResize === 'function') { iFrameResize({heightCalculationMethod: 'bodyScroll'}, '.fsSchoolAdminForm') } </script>
</head>

<body <?php body_class(); ?>>
    <a id="back-to-top" class="" href="#"><i class="fa fa-angle-up"></i></a>

 <header>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand mr-auto rotate " href="<?php echo get_home_url(); ?>">
                            <img src="<?php the_field("header_logo", "options"); ?>" alt="" />
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <label class="toggle-btn">
                                <div class="cross-btn-image">
                                    <div class="bar"></div>
                                    <div class="bar"></div>
                                </div>
                            </label>
                        </button>
                        <div class="navbar-collapse collapse " id="navbarSupportedContent">
                            <div class="navbar-nav ml-auto desktop-menu">
                                <div class="menu-header-menu-container">
                                    <?php
                                        $defaults = array(
                                            'menu' => 'header menu',
                                            'menu_class' => 'nav navbar-nav'
                                        );
                                        wp_nav_menu($defaults);
                                    ?>
                                </div>
                                
                                <input type="checkbox" id="toggle" style="display:none;">
                                <label class="toggle-btn toggle-btn__cross" for="toggle">
                                    <span class="menu-title">Menu</span>
                                    <div class="cross-btn-image">
                                        <div class="bar"></div>
                                        <div class="bar"></div>
                                    </div>
                                </label>
                                
                                <nav class="second-menu" style="background-image: url('<?php the_field("menu_background_image", "option");?>');">
                            <div class="second-menu-section">
                                        <div class="collapse navbar-collapse" id="navbarMobile">
                                            <div class="navbar_content">
                                                <?php
                                                    $defaults = array(
                                                    'menu' => 'header menu 1',
                                                    'menu_class' => 'nav navbar-nav'
                                                    );
                                                    wp_nav_menu($defaults);
                                                ?>
                                            </div>
                                        </div>   
                            </div>
                            
                        </nav>
                            </div>
                            
                            
                            <div class="navbar-nav mobile-menu" style="background-image: url('<?php the_field("menu_background_image", "option");?>');">
                                <a class="navbar-brand mobile-logo mx-auto" href="<?php echo get_home_url(); ?>">
                                    <img src="<?php the_field("header_logo", "options"); ?>" alt="" />
                                </a>
                                <div class="menu-header-menu-container">
                                    <?php
                                        $defaults = array(
                                        'menu' => 'header menu 1',
                                        'menu_class' => 'nav navbar-nav'
                                        );
                                        wp_nav_menu($defaults);
                                    ?>
                                    
                                    <?php if (have_rows('menu_images_repeater', "option")) : ?>
                                <?php while (have_rows('menu_images_repeater', "option")) : the_row(); ?>
                                <div class="student-image-with-repeater-description">
                                            <div class="student-image-with-repeater-desc">
                                                <a href="<?php the_sub_field("menu_repeater_url", "option");?>">
                                                    <div class="student-image-with-repeater-image">
                                                        <?php $alt_text = get_sub_field('menu_repeater_image', "option");
                                                                        if (!empty($alt_text)) : ?>
                                                        <img class="inner-img" src="<?php echo esc_url($alt_text['url']); ?>"
                                                            title="<?php echo esc_attr($alt_text['title']); ?>"
                                                            alt="<?php echo esc_attr($alt_text['caption']); ?>" />
                                                        <?php endif; ?>
                                                        <h2 class="student-image-with-repeater-title">
                                                            <?php the_sub_field("menu_repeater_title", "option");?>
                                                        </h2>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <?php endif; ?>
                                </div>
                            </div>    
                        </div>
                    </nav>
    </header>


       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php $option = get_field('header_choose_option');

                $banner = get_field('header_banner');
                if ($banner == "" || $banner == null || $banner == false) {
                    $banner = get_field('default_banner', "option");
                }
                ?>
                <?php if ($option == "Image") { ?>
                    <div class="scroll-animation" id="top-section">
                        <div class="header-banner" style="background-image:url('<?php echo $banner ?>');">
                            <img src="<?php echo $banner ?>" style=" width: 100%;" />
                            <div class="header-banner-description">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 mx-auto header-banner-content">
                                            <?php if (!empty(get_field('header_title'))) : ?>
                                                <h1><?php the_field("header_title"); ?></h1>
                                            <?php endif; ?>
                                             
                                            <?php if (!empty(get_field('header_content'))) : ?>
                                                <?php the_field("header_content"); ?>
                                            <?php endif; ?>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
                if ($option == "Video") { ?>
                    <div class="scroll-animation" id="top-section">
                        <div class="header-banner-video" style="background-image: url(<?php the_field('default_banner', "option"); ?>)">
                            <video autoplay muted loop playsinline preload="auto" id="myVideo" poster="<?php the_field("header_video"); ?>">
                                <source src="<?php the_field("header_video"); ?>" type="video/mp4">
                            </video>
                            <div class="header-banner-description">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 mx-auto header-banner-content">
                                            
                                            <?php if (!empty(get_field('header_title'))) : ?>
                                                <h1><?php the_field("header_title"); ?></h1>
                                            <?php endif; ?>
                                             
                                            <?php if (!empty(get_field('header_content'))) : ?>
                                                <?php the_field("header_content"); ?>
                                            <?php endif; ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                <?php }
                
                if ($option == "Slider") { ?>
                
                <div class="scroll-animation" id="top-section">
                    <div class="header-slider">
                        <?php if (have_rows('header_slider_repeater')) : ?>
                        <?php while (have_rows('header_slider_repeater')) : the_row(); ?>
                       
                        <div class="header-banner" style="background-image:url('<?php the_sub_field('header_slider_repeater_image'); ?>');">
                          <img src="<?php the_sub_field('header_slider_repeater_image'); ?>" alt="" style="width: 100%;"/>
                            <div class="header-banner-description">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-10 mx-auto header-banner-content">
                                            <?php if (!empty(get_sub_field('header_slider_repeater_title'))) : ?>
                                                <h1><?php the_sub_field("header_slider_repeater_title"); ?></h1>
                                            <?php endif; ?>
                                             
                                            <?php if (!empty(get_sub_field('header_slider_repeater_content'))) : ?>
                                                <?php the_sub_field("header_slider_repeater_content"); ?>
                                            <?php endif; ?>
                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                
                <?php } 
                
                if ($option == "Hide") { ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>
