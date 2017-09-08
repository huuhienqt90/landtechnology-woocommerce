<?php
/**
 *
 * Land Technology Theme
 *
 */

if( ! class_exists('LandTechnologyTheme') ):

    class LandTechnologyTheme{

        /**
         * Portfolio Constructor
         */
        public function __construct(){
            $this->defineConstants();
            $this->includes();
            $this->initHooks();

            do_action( 'portfolio_theme_loaded' );
        }

        /**
         * Define Constants.
         */
        public function defineConstants(){
            $this->define('THEME_TEXTDOMAIN', 'land-technology');
        }

        /**
         * Include required core files used in admin and on the frontend.
         */
        public function includes(){
            require_once 'cs-framework/cs-framework.php';
        }

        /**
         * Define constant
         */
        public function define($name, $value){
            if ( ! defined( $name ) ) {
                define( $name, $value );
            }
        }

        /**
         * Hook into actions and filters.
         * @since  1.0
         */
        public function initHooks(){
            add_action( 'after_setup_theme', array( $this, 'setup' ) );
            add_action( 'widgets_init', array( $this, 'widgetsInit' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ) );

            // Change cs frame work config files
            add_filter( 'cs_framework_settings', array( $this, 'frameworkSettings' ) );
            add_filter( 'cs_framework_options', array( $this, 'frameworkOptions' ) );
            add_filter( 'cs_metabox_options', array( $this, 'metaboxOptions' ) );
            add_filter( 'cs_taxonomy_options', array( $this, 'taxonomyOptions' ) );
            add_filter( 'cs_shortcode_options', array( $this, 'shortcodeOptions' ) );
            add_filter( 'cs_customize_options', array( $this, 'customizeOptions' ) );

            // Add class logo
            add_filter( 'get_custom_logo', array( $this, 'change_logo_class' ) );
        }

        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * Note that this function is hooked into the after_setup_theme hook, which
         * runs before the init hook. The init hook is too late for some features, such
         * as indicating support for post thumbnails.
         */
        public function setup() {

            /*
             * Make theme available for translation.
             * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
             */
            load_theme_textdomain( THEME_TEXTDOMAIN, get_template_directory() . '/languages' );
            add_theme_support( 'automatic-feed-links' );
            add_theme_support( 'title-tag' );
            add_theme_support( 'post-thumbnails' );
            add_image_size( 'featured-image', 2000, 1200, true );
            register_nav_menus( array(
                'top'    => __( 'Top Menu', THEME_TEXTDOMAIN ),
                'social' => __( 'Social Links Menu', THEME_TEXTDOMAIN ),
            ) );
            add_theme_support( 'html5', array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            ) );
            add_theme_support( 'post-formats', array(
                'aside',
                'image',
                'video',
                'quote',
                'link',
                'gallery',
                'audio',
            ) );

            // Add theme support for Custom Logo.
            add_theme_support( 'custom-logo', array(
                'width'       => 250,
                'height'      => 250,
                'flex-width'  => true
            ) );

            // Add theme support for selective refresh for widgets.
            add_theme_support( 'customize-selective-refresh-widgets' );
        }

        /**
         * Register widget area.
         *
         * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
         */
        public function widgetsInit(){
            register_sidebar( array(
                'name'          => __( 'Blog Sidebar', THEME_TEXTDOMAIN ),
                'id'            => 'blog-sidebar',
                'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', THEME_TEXTDOMAIN ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );

            register_sidebar( array(
                'name'          => __( 'Footer', THEME_TEXTDOMAIN ),
                'id'            => 'footer',
                'description'   => __( 'Add widgets here to appear in your footer.', THEME_TEXTDOMAIN ),
                'before_widget' => '<div id="%1$s" class="widget col-md-3 col-sm-3 %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
            ) );

            register_sidebar( array(
                'name'          => __( 'Footer-End', THEME_TEXTDOMAIN ),
                'id'            => 'footer-sidebar',
                'description'   => __( 'Add widgets here to appear in your footer.', THEME_TEXTDOMAIN ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ) );
        }

        /**
         * Load all styles and scripts for theme
         */
        public function scripts(){
            // Add custom fonts, used in the main stylesheet.
            wp_enqueue_style( 'frameworks', get_theme_file_uri( '/assets/css/frameworks.css' ) );
            wp_enqueue_style( 'font-elegant', get_theme_file_uri( '/assets/fonts/font-elegant.css' ) );
            wp_enqueue_style( 'style', get_theme_file_uri( '/assets/css/style.css' ), array('frameworks') );

            // Add script
            wp_enqueue_script( 'jquery-ui', get_theme_file_uri( 'assets/js/jquery-ui.min.js' ), array( 'jquery' ), null, true );
            wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array( 'jquery' ), '3.3.7', true );
            wp_enqueue_script( 'slick', get_theme_file_uri( 'assets/js/slick.min.js' ), array( 'jquery' ), null, true );
            wp_enqueue_script( 'slider-slick', get_theme_file_uri( 'assets/js/slider-slick.js' ), array( 'jquery' ), null, true );
            wp_enqueue_script( 'price', get_theme_file_uri( 'assets/js/price.js' ), array( 'jquery' ), null, true );
            wp_enqueue_script( 'grid-list-show', get_theme_file_uri( 'assets/js/grid-list-show.js' ), array( 'jquery' ), null, true );
        }

        /**
         * Change the framework settings
         */
        public function frameworkSettings($settings){
            return include('cs-framework-configs/framework.settings.php');
        }

        /**
         * Change the framework options
         */
        public function frameworkOptions($options){
            return include('cs-framework-configs/framework.options.php');
        }

        /**
         * Change the metabox options
         */
        public function metaboxOptions($options){
            return include('cs-framework-configs/metabox.options.php');
        }

        /**
         * Change the taxonomy options
         */
        public function taxonomyOptions($options){
            return include('cs-framework-configs/taxonomy.options.php');
        }

        /**
         * Change the shortcode options
         */
        public function shortcodeOptions($options){
            return include('cs-framework-configs/shortcode.options.php');
        }

        /**
         * Change the customize options
         */
        public function customizeOptions($options){
            return include('cs-framework-configs/customize.options.php');
        }

        public function change_logo_class( $html ) {
            $html = str_replace( 'custom-logo-link', 'navbar-brand', $html );
            return $html;
        }
    }

endif;
new LandTechnologyTheme();
