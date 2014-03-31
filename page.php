<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="background content">
            <div <?php post_class('content article-content clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="article-meta">
                    <h3><?php the_title(); ?></h3>
                    
                </div>
                <div class="article"><?php the_content(); ?></div>
                <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?></div>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
