<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="ababilitworld">
    <div class="container-header">
        
        <div class="container-logo">
            <div class="logo-item-1">
            <?php
                // Display the custom logo if it exists; otherwise, display a placeholder.
                if (has_custom_logo()) 
                {
                    the_custom_logo();
                } else {
                    echo '<img src="path/to/default/logo.png" alt="Default Logo" width="100" height="100">'; // Replace with default logo path
                }
                ?>
            </div>
            <div class="logo-item-2">
            <span class="site-name"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
            
            </div>
            <div class="logo-item-3">
            <span class="site-description"><?php echo esc_html( get_bloginfo( 'description' ) ); ?></span>
            </div>
        </div>

        <div class="container-info">
            <!-- Column 1 (Custom Logo spanning two rows) -->
            <div class="info-item-1">
            <!-- <span class="info-item-icon"><i class="fa fa-address-card-o"></i></span> -->
            
            </div>
            
            <div class="info-item-2">
                <span class="info-item-icon"><i class="fa fa-phone"></i></span>
                <?php echo esc_html(get_theme_mod('contact_number', '+8801711111497')); ?>
                
            </div>
            
            <div class="info-item-3">
                <span class="info-item-icon"><i class="fa fa-envelope-o"></i></span>
                <?php echo esc_html(get_theme_mod('email_address', 'admin@ecosurvgroup.com')); ?>              
            </div>
            <div class="info-item-4">
            <span class="info-item-icon"><i class="fa fa-map-marker"></i></span>
            <span class="address-line1"><?php echo esc_html( get_theme_mod( 'address_line_1', '142/a, Urban Point, Green Road' ) ); ?></span>
            <span class="country"><?php echo esc_html( get_theme_mod( 'country', 'Dhaka-1215' ) ); ?></span>
            </div>
        </div>

        <div class="container-info">
            <!-- Column 1 (Custom Logo spanning two rows) -->
            <div class="info-item-1">
            <!-- <span class="info-item-icon"><i class="fa fa-address-card-o"></i></span> -->
            
            </div>

            <div class="info-item-2">
                <div class="header-social">
                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                </div>              
            </div>
            <div class="info-item-3">
            </div>
        </div>
    </div>

    <?php get_template_part( 'Asset/Appearence/template/nav' ); ?>
    
