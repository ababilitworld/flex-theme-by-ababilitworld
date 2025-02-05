<?php

class EcoByAbabilitworldTheme
{
    public function __construct()
    {
        // Add action to setup theme features
        // add_action('after_setup_theme', array($this, 'theme_setup'));
        
        // // Add action to enqueue scripts and styles
        // add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'), 5);

        // // Add action for menu creation on theme activation
        // add_action('after_switch_theme', array($this, 'theme_settings'));

        // add_action('init', array($this, 'add_theme_manager_role'));

    }

    function add_theme_manager_role() 
    {
        add_role('theme_manager', __('Theme Manager'), array(
            'read' => true,
            'edit_theme_options' => true, // This allows access to theme options
        ));
    }

    /**
     * Setup theme features and register menus
     */
    public function theme_setup()
    {
        // Add theme support for document title tag
        add_theme_support('title-tag');
        add_theme_support('custom-logo', array(
            'height'      => 512, // Desired height of the logo in pixels
            'width'       => 512, // Desired width of the logo in pixels
            'flex-height' => true, // Allow flexible height
            'flex-width'  => true, // Allow flexible width
        ) );

        // Register navigation menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'eco-by-ababilitworld-theme'),
            'ababilit_eco_theme_menu' => __('Eco Theme Menu', 'eco-by-ababilitworld-theme'),
        ));
    }

    /**
     * Enqueue styles and scripts
     */
    public function enqueue_scripts()
    {
        wp_enqueue_style('fontawesome-470', get_template_directory_uri() . '/Asset/Font/font-awesome-4.7.0/css/font-awesome.min.css', array(), time());
        wp_enqueue_style('eco-by-ababilitworld-font-100', get_template_directory_uri() . '/Asset/Font/font.css', array(), time());

        //wp_enqueue_style('fontawesome-660', get_template_directory_uri() . '/Asset/Font/fontawesome-free-6.6.0-web/css/font-awesome.min.css', array(), time());

        // Enqueue main stylesheet
        wp_enqueue_style('eco-by-ababilitworld-theme-style', get_stylesheet_uri());

        wp_enqueue_style('eco-by-ababilitworld-theme-theme-style', get_template_directory_uri() . '/Asset/Appearence/Theme/Default/Css/style.css', array(), time());

        wp_enqueue_style('eco-by-ababilitworld-theme-layout-style', get_template_directory_uri() . '/Asset/Appearence/Layout/Default/Css/style.css', array(), time());

        wp_enqueue_style('eco-by-ababilitworld-theme-layout-logo-style', get_template_directory_uri() . '/Asset/Appearence/Layout/Logo-Ecosurv/Css/style.css', array(), time());

        wp_enqueue_style('eco-by-ababilitworld-theme-layout-info-style', get_template_directory_uri() . '/Asset/Appearence/Layout/Info/Css/style.css', array(), time());

        wp_enqueue_style('eco-by-ababilitworld-theme-header-style', get_template_directory_uri() . '/Asset/Appearence/Component/Header/Default/Css/style.css', array(), time());

        wp_enqueue_style('eco-by-ababilitworld-theme-nav-style', get_template_directory_uri() . '/Asset/Appearence/Component/Nav/Default/Css/style.css', array(), time());
        
        wp_enqueue_script('eco-by-ababilitworld-theme-nav-script', get_template_directory_uri() . '/Asset/Appearence/Component/Nav/Default/Js/script.js', array(), time(), true);

        wp_enqueue_style('eco-by-ababilitworld-theme-nav-curtain-style', get_template_directory_uri() . '/Asset/Appearence/Component/Nav/Curtain/Css/style.css', array(), time());

        wp_enqueue_script('eco-by-ababilitworld-theme-nav-curtain-script', get_template_directory_uri() . '/Asset/Appearence/Component/Nav/Curtain/Js/script.js', array(), time(), true);

        wp_enqueue_style('eco-by-ababilitworld-theme-topic-info-style', get_template_directory_uri() . '/Asset/Appearence/Component/TopicInfo/Default/Css/style.css', array(), time());

        wp_enqueue_script('eco-by-ababilitworld-theme-topic-info-script', get_template_directory_uri() . '/Asset/Appearence/Component/TopicInfo/Default/Js/script.js', array(), time(), true);

        wp_enqueue_style('eco-by-ababilitworld-theme-footer-style', get_template_directory_uri() . '/Asset/Appearence/Component/Footer/Default/Css/style.css', array(), time());

        // Enqueue JavaScript file
        wp_enqueue_script('eco-by-ababilitworld-theme-script', get_template_directory_uri() . '/script.js', array(), '1.0.0', true);
    }

    /**
     * Create ababilit_eco_theme_menu menu and associated pages with shortcodes if they don't exist on theme activation
     */
    public function theme_settings()
    {
        // Check if a menu is already assigned to the 'ababilit_eco_theme_menu' location
        $locations = get_nav_menu_locations();
        $menu_id = isset($locations['ababilit_eco_theme_menu']) ? $locations['ababilit_eco_theme_menu'] : 0;

        if (!$menu_id) 
        {
            // If no menu exists, create a new one
            $menu_id = wp_create_nav_menu('Eco Theme Menu');

            // Assign the new menu to the ababilit_eco_theme_menu location
            $locations['ababilit_eco_theme_menu'] = $menu_id;
            set_theme_mod('nav_menu_locations', $locations);
        }

        // Define menu items and their corresponding shortcodes
        $menu_items = array(
            array(
                'title' => 'Home',
                'url'   => home_url('/'),
                'shortcode' => '[home_shortcode]' // Replace with actual shortcode
            ),
            array(
                'title' => 'About',
                'url'   => home_url('/about'),
                'shortcode' => '[about_shortcode]' // Replace with actual shortcode
            ),
            array(
                'title' => 'Services',
                'url'   => home_url('/services'),
                'shortcode' => '[services_shortcode]' // Replace with actual shortcode
            ),
            array(
                'title' => 'Portfolios',
                'url'   => home_url('/portfolios'),
                'shortcode' => '[portfolios_shortcode]' // Replace with actual shortcode
            ),
            array(
                'title' => 'Appoinment',
                'url'   => home_url('/appoinment'),
                'shortcode' => '[appoinment_shortcode]' // Replace with actual shortcode
            ),
        );

        // Get existing menu items
        $existing_menu_items = wp_get_nav_menu_items($menu_id);
        $existing_titles = array();

        // Build an array of existing menu item titles
        if ($existing_menu_items) 
        {
            foreach ($existing_menu_items as $existing_item) 
            {
                if (in_array($existing_item->title, $existing_titles)) 
                {
                    // Remove duplicate menu item
                    wp_delete_post($existing_item->ID, true);
                } 
                else 
                {
                    $existing_titles[] = $existing_item->title;
                }
            }
        }

        // Add each item to the menu if it does not already exist
        foreach ($menu_items as $menu_item) 
        {
            if (!in_array($menu_item['title'], $existing_titles)) 
            {
                // Add menu item
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'   => $menu_item['title'],
                    'menu-item-url'     => $menu_item['url'],
                    'menu-item-status'  => 'publish'
                ));

                // Create page for the menu item if it does not exist
                $this->create_page_if_not_exists($menu_item['title'], $menu_item['shortcode']);
            }
        }
    }

    /**
     * Create a page if it does not already exist
     *
     * @param string $title Page title
     * @param string $shortcode Shortcode to include in the page content
     */
    private function create_page_if_not_exists($title, $shortcode)
    {
        // Check if the page already exists
        $page = get_page_by_path(sanitize_title($title));

        if (!$page) 
        {
            // Page does not exist, create a new one
            $page_data = array(
                'post_title'    => $title,
                'post_content'  => $shortcode,
                'post_status'   => 'publish',
                'post_type'     => 'page',
            );

            // Insert the page into the database
            wp_insert_post($page_data);
        }
    }

}

// Instantiate the class
new EcoByAbabilitworldTheme();
?>
