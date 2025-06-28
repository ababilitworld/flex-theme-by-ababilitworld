<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header>

    <div class="entry-content">
        <?php //get_template_part( 'Asset/Appearence/template/Tab' ); ?>
        <?php
        
            $content = '';
            ob_start();
            do_action('flex_theme_by_ababilithub_content_template');
            $content = ob_get_clean();

            if (!empty($content)) 
            {
                echo $content;
            } 
            else 
            {
                the_content();
            }
        

        // the_content();
        // wp_link_pages( array(
        //     'before' => '<div class="page-links">' . __( 'Pages:', 'responsive-sticky-navbar-theme' ),
        //     'after'  => '</div>',
        // ) );
        // 
        ?>
    </div>
</div>
