</div>
            <!-- /Content -->

            

</div>
            <!-- /Container -->

<div class="footer">
    
    <div class="breadcrumbs">
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<span id="breadcrumbs">','</span>');
        } ?>
    </div>
    
    
    
    <div class="footer-col left" id="footer-col-middle">
        <h1>Contate-nos</h1>
        <div class="contact-list">
            <li class="skype"><a href="skype:novacartografia?call" title="Ligar usando Skype" >novacartografia</a></li>
            <li class="mail"><a href="http://novacartografiasocial.com/contate-nos/" title="Formulário de e-mail">pncsa.ufam@yahoo.com</a>
            <li class="fb"><a href="http://facebook.com/PNCSA" title="Página do PNCSA no Facebook" target="_blank">facebook.com/PNCSA</a></li>
            <li class="fone"><a href="http://novacartografiasocial.com/contate-nos/">(92) 3232 - 8423 / 3878 - 4412</a></li>
            <li class="home" title="Endereço"><a href="https://goo.gl/maps/SHD5w" target="_blank" title="Como chegar?">Av. Leonardo Malcher, 1728, 6&ordm andar - Centro.</a></li>
        </div>
    </div>
    
    <div class="footer-col left" id="footer-col-left">
        <h1>Notícias recentes</h1>
                   <?php query_posts('showposts=3'); ?>

                    <?php while (have_posts()) : the_post(); ?>
                    <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
                    <?php endwhile;?>

    </div>
    
    <div class="footer-col left" id="footer-col-right">
        <h1>Visitantes pelo mundo</h1>
        <div id="revolvermap">
        <script type="text/javascript" src="http://jh.revolvermaps.com/2/1.js?i=7nqtsi7vo75&amp;s=182&amp;m=2&amp;v=true&amp;r=false&amp;b=982d27&amp;n=false&amp;c=ff0000" async="async"></script>
            </div>
    </div>
    <div id="wpcredits">
        <p>&copy; 2014 <a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>. Todos os Direitos Reservados.</p>
    </div>
        </div>
        <!-- Page generated: <?php timer_stop(1); ?> s, <?php echo get_num_queries(); ?> queries -->
        <?php wp_footer(); ?>

        <?php echo (get_option('ga')) ? get_option('ga') : '' ?>

	</body>
</html>
