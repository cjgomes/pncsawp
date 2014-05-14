<?php
/**
    *Template Name: Página de Boletins
**/
get_header();
?>

<div class="content-publications">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="background content">
            <div <?php post_class('content article-content clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="meta">
                    <h1><?php the_title(); ?></h1>

                </div>
                <div class="article"><?php the_content(); ?></div>
                <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?></div>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div> <!-- content-publications -->

<div class="sidebar-publications">


 <?php wp_nav_menu(array(
            'menu'              => 'Boletins-menu',
            'theme_location'    => 'Boletins-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'publications-nav',
            'menu_class'        => 'publications-nav',

            'walker'            => new extended_walker())); ?>


</div>


<?php get_footer(); ?>
