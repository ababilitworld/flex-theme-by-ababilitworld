<div id="idSticky" class="container-nav">
    <div class="container-nav-logo">
        <div class="nav-logo">
    <?php
    // Display the custom logo if it exists; otherwise, display a placeholder.
    if (has_custom_logo()) 
    {
        the_custom_logo();
    } else {
        echo '<img src="path/to/default/logo.png" alt="Default Logo" width="50" height="50">'; // Replace with default logo path
    }
    ?>
        </div>
        <div class="site-name"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></div>
    </div>
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
    ?>

    <div class=".container-curtain-menu">
        <div class="curtain-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'curtain-menu-items',
                'container'      => false,
                'depth'          => 1, // Adjust depth as needed
            ));
            ?>
        </div>
        <button class="curtain-menu-toggle" aria-expanded="false" aria-controls="curtain-menu">☰ Menu</button>
    </div>
</div>

<div id="window-scroll-position"></div>


