<?php
/**
 *Template Name: Página de Projetos
**/
 get_header(); ?>
</div> <!-- content -->
</div> <!-- wrapper -->
</div>

<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="projetos">
            <div <?php post_class('content article-content clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="article"><?php the_content(); ?></div>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>
<div class="wrapper">
    <div id="content">
    <div id="container">
<?php get_footer(); ?>
