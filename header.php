<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php bloginfo('text_direction'); ?>" xml:lang="<?php bloginfo('language'); ?>">
    <head>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title ( '|', true,'right' ); ?></title>
        <meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favico.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />

        <!--[if IE]><link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/ie.css" /><![endif]-->
       <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700" media="screen"/>
       <!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" media="screen">-->


        <?php wp_head(); ?>

	</head>
	<body <?php echo (get_option('bg_color')) ? 'style="background-color: '.get_option('bg_color').';"' : '' ?>>

        <div class="wrapper">


            <div class="header">
                <div class="logo">
                    <a href="<?php bloginfo('home'); ?>"><img src="<?php echo (get_option('logo_url')) ? get_option('logo_url') : get_bloginfo('template_url') . '/images/logo.svg' ?>" alt="<?php bloginfo('name'); ?>"/></a>
                </div>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Site description') ) ?>

                <div class="logo-gif">
			<a href="<?php bloginfo('home'); ?>"><img src="<?php echo (get_option('logo-gif_url')) ? get_option('logo-gif_url') : get_bloginfo('template_url') . '/images/mapa.gif' ?>" alt="<?php bloginfo('name'); ?>"/></a>
		</div>



            </div>

<div id="navigation-menu">
<div class="right">  <?php get_search_form(); ?></div>
        <?php wp_nav_menu(array(
            'menu'              => 'Navigation',
            'theme_location'    => 'Navigation',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'main-nav',
            'menu_class'        => 'nav',

            'walker'            => new extended_walker())); ?>

           </div>        <!-- Container -->


                     

 <script>
        // with jQuery

jQuery(document).ready(function($){
    $('.nav').find('li').hover(function(){
        $(this).find('ul')
        .removeClass('sub-menu')
        .stop(true, true).slideToggle('fast');
    });
});
        </script>

            <div id="container" class="clear">
                <!-- Content -->
                <div id="content">
