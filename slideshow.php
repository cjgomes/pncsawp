<?php
    $args = array(
        'meta_key' => 'sgt_slide',
        'meta_value' => 'on',
        'numberposts' => -1,
        );
    $slides = get_posts($args);

    if ( !empty($slides) ) : $exl_posts = Array(); ?>

        <div class="slideshow background"><div id="slideshow">

        <?php foreach( $slides as $post ) :
            setup_postdata($post);
            global $exl_posts;
            $exl_posts[] = $post->ID;
        ?>
        <div class="slide clear">
            <div class="article-content">
                <?php if ( has_post_thumbnail() ) echo '<a href="'.get_permalink().'">'.get_the_post_thumbnail($post->ID, 'slide',
                    array(
                        'alt'	=> trim(strip_tags( $post->post_title )),
                        'title'	=> trim(strip_tags( $post->post_title )),
                    )).'</a>'; ?>
                <!-- <div class="post-category"><?php the_category(' / '); ?></div> -->
                <h3><a class="post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <span class="article-date"><?php the_time(__('j M, Y')) ?></span>
                <div class="post article"><?php if ( has_post_thumbnail() && function_exists('smart_excerpt') ) smart_excerpt(get_the_excerpt(), 50); else smart_excerpt(get_the_excerpt(), 150); ?></div>
            </div>
        </div>
        <?php endforeach; ?>

        </div>

            <a href="javascript: void(0);" id="larr"></a>
            <a href="javascript: void(0);" id="rarr"></a>
        </div>
    <?php endif; ?>
