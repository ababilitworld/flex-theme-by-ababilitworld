<?php
namespace Ababilithub\FlexAuthorization\Package\Plugin\Auth\V1\Mixin;
    
trait Auth
{
    // show permitted menu items
    public function show_permitted_menu_items(): void 
    {
        global $menu, $submenu;

        // Skip for administrators
        if (current_user_can('administrator')) 
        {
            return;
        }

        // Define the allowed menu slugs
        $allowed_menus = [
            'admin.php?page=flex-authorization',
            'edit.php?post_type=flrole',
            'edit.php?post_type=fpermisn'
        ];

        foreach ($menu as $index => $menu_item) 
        {
            $menu_slug = $menu_item[2] ?? '';
            
            // Check if this menu should be kept
            $keep_menu = false;
            foreach ($allowed_menus as $allowed) 
            {
                if (strpos($menu_slug, $allowed) !== false) 
                {
                    $keep_menu = true;
                    break;
                }
            }
            
            // Remove menu if not in allowed list
            if (!$keep_menu) 
            {
                remove_menu_page($menu_slug);
            }
        }

        // Optional: Ensure submenus are also properly filtered
        foreach ($submenu as $parent_slug => $submenu_items) 
        {
            foreach ($submenu_items as $subindex => $submenu_item) 
            {
                $submenu_slug = $submenu_item[2] ?? '';
                $keep_submenu = false;
                
                foreach ($allowed_menus as $allowed) 
                {
                    if (strpos($submenu_slug, $allowed) !== false) 
                    {
                        $keep_submenu = true;
                        break;
                    }
                }
                
                if (!$keep_submenu) 
                {
                    remove_submenu_page($parent_slug, $submenu_slug);
                }
            }
        }
    }

    public function get_all_admin_menus_with_capabilities(): array
    {
        global $menu, $submenu;

        $all_menus = [];

        // Get all top-level menus
        foreach ($menu as $menu_item) 
        {
            // Clean up the menu title (may contain HTML)
            $menu_title = wp_strip_all_tags($menu_item[0] ?? '');
            $menu_capability = $menu_item[1] ?? '';
            $menu_slug = $menu_item[2] ?? '';
            $menu_icon = $menu_item[6] ?? '';

            $all_menus[$menu_slug] = [
                'title' => $menu_title,
                'capability' => $menu_capability,
                'icon' => $menu_icon,
                //'user_has_access' => current_user_can($menu_capability),
                'submenus' => []
            ];

            // Get all submenus for this top-level menu
            if (isset($submenu[$menu_slug])) 
            {
                foreach ($submenu[$menu_slug] as $submenu_item) 
                {
                    $submenu_title = wp_strip_all_tags($submenu_item[0] ?? '');
                    $submenu_capability = $submenu_item[1] ?? '';
                    $submenu_slug = $submenu_item[2] ?? '';

                    $all_menus[$menu_slug]['submenus'][] = [
                        'title' => $submenu_title,
                        'capability' => $submenu_capability,
                        'slug' => $submenu_slug,
                        //'user_has_access' => current_user_can($submenu_capability)
                    ];
                }
            }
        }

        return $all_menus;
    }

    public function display_admin_menu_capabilities(): void
    {
        if (!is_admin() || !current_user_can('manage_options')) 
        {
            //return;
        }

        $menus = $this->get_all_admin_menus_with_capabilities();

        echo '<div class="wrap">';
        echo '<h1>WordPress Admin Menu Capabilities</h1>';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr>
                <th>Menu</th>
                <th>Capability</th>
                <th>Access</th>
                <th>Submenus</th>
              </tr></thead>';
        echo '<tbody>';

        foreach ($menus as $menu_slug => $menu_data) {
            $access_class = $menu_data['user_has_access'] ? 'has-access' : 'no-access';
            
            echo '<tr>';
            echo '<td><strong>' . esc_html($menu_data['title']) . '</strong><br>';
            echo '<code>' . esc_html($menu_slug) . '</code></td>';
            echo '<td><code>' . esc_html($menu_data['capability']) . '</code></td>';
            echo '<td class="' . esc_attr($access_class) . '">';
            echo $menu_data['user_has_access'] ? '✅ Yes' : '❌ No';
            echo '</td>';
            
            // Display submenus
            echo '<td>';
            if (!empty($menu_data['submenus'])) {
                echo '<ul style="margin:0;padding-left:1em;">';
                foreach ($menu_data['submenus'] as $submenu) {
                    $sub_access_class = $submenu['user_has_access'] ? 'has-access' : 'no-access';
                    echo '<li>';
                    echo '<strong>' . esc_html($submenu['title']) . '</strong><br>';
                    echo '<code>' . esc_html($submenu['slug']) . '</code><br>';
                    echo 'Capability: <code>' . esc_html($submenu['capability']) . '</code><br>';
                    echo 'Access: <span class="' . esc_attr($sub_access_class) . '">';
                    echo $submenu['user_has_access'] ? '✅ Yes' : '❌ No';
                    echo '</span>';
                    echo '</li>';
                }
                echo '</ul>';
            } else {
                echo '—';
            }
            echo '</td>';
            
            echo '</tr>';
        }

        echo '</tbody></table>';
        
        // Add some basic styling
        echo '<style>
            .has-access { color: #46b450; }
            .no-access { color: #dc3232; }
            .wrap { margin: 20px; }
            table { margin-top: 20px; }
            code { background: #f5f5f5; padding: 2px 4px; border-radius: 3px; }
        </style>';
        
        echo '</div>';
    }


    //Roles functionalities
    public function get_all_roles(): array|null 
    {	
        global $wp_roles;
                        
        $roles = null;
        
        if ($wp_roles && property_exists($wp_roles, 'roles')) 
        {
            $roles = $wp_roles->roles;					
        }

        return $roles;				
    }

    public function user_has_role($role): bool 
    { 
        if( is_user_logged_in() ) 
        {			   
            $user = wp_get_current_user();
        
            $roles = ( array ) $user->roles;

            if(in_array($role,$roles))
            {
                return true;
            }
            else
            {
                return false;
            }	   
        } 
        else
        {			   
            return false;			   
        }
        
    }

    public function add_roles($roles): void 
    {
        // $roles = array(
        // 	'tour_manager' => __( 'Booking Manager' ),
        // );

        foreach ($roles as $role => $display_name) 
        {
            //remove_role($role);
            add_role($role, $display_name);
        }
    }

    public function remove_roles($roles): void 
    {
        foreach ($roles as $role) 
        {
            remove_role($role);
        }
    }

    public function user_has_capability($capability): bool 
    { 
        if(current_user_can($capability))
        {
            return true;
        }
        else
        {
            return false;
        }
        
    }

    public function add_capabilities_to_roles(array $capabilities, array $roles): void 
    {				
        foreach ($roles as $role) 
        {
            $role_object = get_role($role);
            if ($role_object) 
            {
                foreach ($capabilities as $capability) 
                {
                    $role_object->add_cap($capability);
                }
            }

        }
        
    }

    public function remove_capabilities_from_roles(array $capabilities, array $roles): void 
    {

        foreach ($roles as $role) 
        {
            $role_object = get_role($role);
            if ($role_object) 
            {
                foreach ($capabilities as $capability) 
                {
                    $role_object->remove_cap($capability);
                }
            }
        }
        
    }

    public function clone_role($from_role,$to_roles): void
    {
        $from_role = get_role($from_role);
        $from_role_caps = array_keys( $from_role->capabilities );        

        foreach($to_roles as $new_role)
        {
            unset($role);
            $role = get_role($new_role);
            foreach ( $from_role_caps as $cap ) 
            {
                $role->add_cap( $cap );
            }					
        }
    }

    // Capability functionalities
    public function get_all_capabilities_grouped(): array
    {
        global $wp_roles;
        
        $grouped = [
            'roles' => [],
            'post_types' => [],
            'taxonomies' => [],
            'core' => $this->get_core_capabilities()
        ];
        
        // 1. Get capabilities from all roles
        foreach ($wp_roles->roles as $role_name => $role_data) 
        {
            if (!empty($role_data['capabilities'])) 
            {
                $grouped['roles'][$role_name] = array_keys($role_data['capabilities']);
            }
        }
        
        // 2. Get capabilities from post types
        $post_types = get_post_types([], 'objects');
        foreach ($post_types as $post_type) 
        {
            if (!empty($post_type->cap)) 
            {
                $caps = array_values((array) $post_type->cap);
                $grouped['post_types'][$post_type->name] = array_unique($caps);
            }
        }
        
        // 3. Get capabilities from taxonomies
        $taxonomies = get_taxonomies([], 'objects');
        foreach ($taxonomies as $taxonomy) 
        {
            if (!empty($taxonomy->cap)) 
            {
                $caps = array_values((array) $taxonomy->cap);
                $grouped['taxonomies'][$taxonomy->name] = array_unique($caps);
            }
        }
        
        return $grouped;
    }
    
    /**
     * Get all capabilities as a flat unique sorted array
     */
    public function get_all_possible_capabilities(): array 
    {
        $grouped = $this->get_all_capabilities_grouped();
        $capabilities = [];
        
        foreach ($grouped['roles'] as $role_caps) {
            $capabilities = array_merge($capabilities, $role_caps);
        }
        
        foreach ($grouped['post_types'] as $post_type_caps) {
            $capabilities = array_merge($capabilities, $post_type_caps);
        }
        
        foreach ($grouped['taxonomies'] as $taxonomy_caps) {
            $capabilities = array_merge($capabilities, $taxonomy_caps);
        }
        
        $capabilities = array_merge($capabilities, $grouped['core']);
        
        $capabilities = array_unique(array_filter($capabilities));
        sort($capabilities);
        
        return $capabilities;
    }
    
    /**
     * Get WordPress core capabilities
     */
    protected function get_core_capabilities(): array
    {
        return [
            'activate_plugins', 'create_users', 'delete_plugins', 'delete_themes',
            'delete_users', 'edit_dashboard', 'edit_files', 'edit_plugins',
            'edit_theme_options', 'edit_themes', 'edit_users', 'export',
            'import', 'install_plugins', 'install_themes', 'list_users',
            'manage_options', 'promote_users', 'remove_users', 'switch_themes',
            'update_core', 'update_plugins', 'update_themes',
            'manage_categories', 'moderate_comments', 'unfiltered_html',
            'upload_files', 'read', 'read_private_pages', 'read_private_posts',
            'edit_posts', 'edit_others_posts', 'edit_published_posts',
            'publish_posts', 'delete_posts', 'delete_others_posts',
            'delete_published_posts', 'delete_private_posts', 'edit_private_posts',
            'publish_pages', 'edit_pages', 'edit_others_pages', 'edit_published_pages',
            'delete_pages', 'delete_others_pages', 'delete_published_pages',
            'delete_private_pages', 'edit_private_pages'
        ];
    }
}