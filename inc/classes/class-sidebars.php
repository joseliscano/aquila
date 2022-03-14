<?php
/**
 * Theme Sidebars
 * 
 * @package aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars {
    
    use Singleton;

    protected function __construct()
    {

        // load class
        $this->setup_hooks();
    }

    protected function setup_hooks()
    {

        /**
         * Actions.
         */
        add_action('widgets_init', [$this, 'register_sidebars']);
        add_action('widgets_init', [$this, 'register_clock_widget']);

    }

    public function register_sidebars()
    {
        
        register_sidebar(
            [
                'id'            => 'sidebar-1',
                'name'          => __( 'Sidebar', 'aquila' ),
                'description'   => __( 'Main sidebar', 'aquila' ),
                'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ]
        );

        register_sidebar(
            [
                'id'            => 'sidebar-2',
                'name'          => __( 'Footer', 'aquila' ),
                'description'   => __( 'Main sidebar', 'aquila' ),
                'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            ]
        );
    }

    public function register_clock_widget()
    {
        register_widget('AQUILA_THEME\Inc\Clock_Widget');
    }
}