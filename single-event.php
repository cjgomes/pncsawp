<?php
/**
 * The template for displaying a single event
 *
 * Please note that since 1.7, this template is not used by default. You can edit the 'event details'
 * by using the event-meta-event-single.php template.
 *
 * Or you can edit the entire single event template by creating a single-event.php template
 * in your theme. You can use this template as a guide.
 *
 * For a list of available functions (outputting dates, venue details etc) see http://wp-event-organiser.com/documentation/function-reference/
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://wp-event-organiser.com/documentation/editing-the-templates/ for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

<div id="primary" class="background content">
	<div role="main" class="content article-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">

				<!-- Display event title -->
				<h1 class="entry-title"><?php the_title(); ?></h1>

			</header><!-- .entry-header -->
	
			<div class="entry-content article">
				<!-- Get event information, see template: event-meta-event-single.php -->
                <?php eo_get_template_part('event-meta','event-single'); ?>

				<!-- The content or the description of the event-->
				<?php 
                if( has_post_thumbnail() )
							the_post_thumbnail('thumbnail', array('style'=>'float:left;margin-right:20px;'));
                the_content(); ?>
			</div><!-- .entry-content -->

			<footer class="meta">
			

			</footer><!-- .entry-meta -->

			</article><!-- #post-<?php the_ID(); ?> -->

			<!-- If comments are enabled, show them -->
			<div class="comments-template">
				<?php comments_template(); ?>
			</div>				

		<?php endwhile; // end of the loop. ?>

	</div><!-- #article-content -->
</div><!-- #primary -->

<!-- Call template footer -->
<?php get_footer(); ?>
