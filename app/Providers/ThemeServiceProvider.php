<?php

namespace Sitepilot\Theme\Providers;

use Sitepilot\Framework\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Register theme services.
     */
    public function register(): void
    {
        $this->add_filter_value('sitepilot/branding/enabled', true);
        $this->add_filter_value('sitepilot/client_role/enabled', true);
    }

    /**
     * Bootstrap theme services and hooks.
     */
    public function boot(): void
    {
        $this->add_action('wp_enqueue_scripts', 'enqueue_scripts', 15);
        $this->add_action('enqueue_block_editor_assets', 'enqueue_scripts', 15);
    }

    /**
     * Enqueue theme scripts and styles.
     */
    public function enqueue_scripts(): void
    {
        //wp_enqueue_script($this->app->namespace(), $this->app->url('dist/js/theme.js'), array(), $this->app->script_version(), true);
        //wp_enqueue_style($this->app->namespace(), $this->app->url('dist/css/theme.css'), array(), $this->app->script_version(), 'all');
    }
}
