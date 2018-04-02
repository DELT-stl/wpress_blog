<?php
/**
 * Creative Feeds functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creative_Feeds
 */

if ( ! function_exists( 'creative_feeds_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function creative_feeds_setup() {
//                            XL - 1900 x 800
//                            Large - 1500 x 700
//                            Medium - 650 x 800
//                            Small - 650 x 500

        add_image_size( 'xl', 1900, 800, true );
        add_image_size( 'l', 1500, 700, true );
        add_image_size( 'm', 650, 800, true );
        add_image_size( 's', 650, 520, true );
        add_image_size( 'xs', 400, 520, true );
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Creative Feeds, use a find and replace
		 * to change 'creative-feeds' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'creative-feeds', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'creative-feeds' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'creative_feeds_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'creative_feeds_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function creative_feeds_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'creative_feeds_content_width', 640 );
}
add_action( 'after_setup_theme', 'creative_feeds_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function creative_feeds_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creative-feeds' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'creative-feeds' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'creative_feeds_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function creative_feeds_scripts() {
	wp_enqueue_style( 'creative-feeds-style', get_stylesheet_uri() );
    wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jSticky-master/jquery-1.8.1.min.js');
    wp_enqueue_script( 'jquerySticky', get_stylesheet_directory_uri() . '/js/jSticky-master/jquery.jsticky.min.js');
    wp_enqueue_script( 'stickynav', get_stylesheet_directory_uri() . '/js/stickynav.js');
    wp_enqueue_script( 'responsive-background', get_stylesheet_directory_uri() . '/js/responsive-background.js');

//	wp_enqueue_script( 'creative-feeds-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//
//	wp_enqueue_script( 'creative-feeds-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'creative_feeds_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*DELT Functions*/
//Custom Post Types
function creative_feeds_post_type(){
    register_post_type('author', array(
        'public' => true,
        'labels' => array(
            'name' => 'Authors'
        )
    ));
}

add_action('init', 'creative_feeds_post_type');
