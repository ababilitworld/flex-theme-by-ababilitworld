<!-- Sticky Navigation Bar -->
<div id="idSticky" class="container-nav">
    <?php
    if ( has_nav_menu( 'primary' ) ) 
    {
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => 'nav',
            'container_class' => 'nav',
            'menu_class' => 'nav-item', // List item class for styling
            'link_before' => '<span class="nav-item-text">', // Span inside each link
            'link_after' => '</span>',
            'fallback_cb' => false
        ) );
    }
    else
    {
        echo '<p>Please assign a menu to the primary location under Appearance > Menus.</p>';
    }
    ?>
</div>


