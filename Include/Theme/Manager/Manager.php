<?php

namespace EcoByAbabilitworld;

use EcoByAbabilitworld\Services\CustomizerService;
use EcoByAbabilitworld\Services\AssetService;
use EcoByAbabilitworld\Factories\ServiceFactory;

class Manager
{
    public $typography;
    public $colorScheme;
    private $customizerService;
    private $assetService;

    public function __construct()
    {
        $this->customizerService = ServiceFactory::createCustomizerService();
        $this->assetService = ServiceFactory::createAssetService();

        $this->register_hooks();
    }

    private function register_hooks()
    {
        add_action('after_setup_theme', [$this, 'setup_theme']);
        add_action('wp_enqueue_scripts', [$this->assetService, 'enqueue_assets'], 5);
        add_action('customize_register', [$this->customizerService, 'register_controls']);
    }

    public function setup_theme()
    {
        // Add theme supports
        add_theme_support('custom-logo', [
            'height'      => 512,
            'width'       => 512,
            'flex-height' => true,
            'flex-width'  => true,
        ]);

        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        // Register menus
        register_nav_menus([
            'primary' => __('Primary Menu', 'eco-by-ababilitworld'),
        ]);
    }
}

// Bootstrap the theme
new ThemeManager();
?>
