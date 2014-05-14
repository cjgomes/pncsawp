<?php get_header(); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="background content">
            <div <?php post_class('content article-content clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="meta">
                    <h1><?php the_title(); ?></h1>

                    <span class="article-date"><?php the_time(__('j M, Y')) ?> &bull; <span><?php the_time() ?></span> <?php edit_post_link( __( 'Editar'), '&bull; '); ?>
                </div>
                        
                <div class="article"><?php the_content(); ?></div>

                <div class="article-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?></div>
            </div>

                <div class="social">
        <p>Compartilhe esta notícia:</p> 
        <!--Twitter-->
        <a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a>
        <!--Facebook-->
        <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;">Facebook</a>
        <!--Google Plus-->
        <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google+</a>
</div>

            <div class="content article-navigation clear">
                <?php
                    $prev_post = get_adjacent_post(false, '', true);
                    $next_post = get_adjacent_post(false, '', false); ?>
                    <?php if ($prev_post) : $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
                        <a class="article-prev" href="<?php echo $prev_post_url; ?>"><em>Artigo anterior</em><span><?php echo $prev_post_title; ?></span></a>
                    <?php endif; ?>
                    <?php if ($next_post) : $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
                        <a class="article-next" href="<?php echo $next_post_url; ?>"><em>Próximo artigo</em><span><?php echo $next_post_title; ?></span></a>
                    <?php endif; ?>
                <div class="table">
                <div class="line"></div>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>