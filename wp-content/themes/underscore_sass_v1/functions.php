<?php
/**
 * underscore_sass functions and definitions
 *
 * @package underscore_sass
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

//CUSTOM OPTION  PAGE
require 'acf_custom_option_page.php';

if ( ! function_exists( 'underscore_sass_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function underscore_sass_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on underscore_sass, use a find and replace
	 * to change 'underscore_sass' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'underscore_sass', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'underscore_sass' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'underscore_sass_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // underscore_sass_setup
add_action( 'after_setup_theme', 'underscore_sass_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function underscore_sass_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'underscore_sass' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'underscore_sass_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function underscore_sass_scripts() {
	wp_enqueue_style( 'underscore_sass-style', get_stylesheet_uri() );

	wp_enqueue_script( 'underscore_sass-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'underscore_sass_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// THIS THEME USES wp_nav_menu() IN TWO LOCATION FOR CUSTOM MENU.
if ( function_exists( 'register_nav_menus' ) ) {
	$args = array(
	  'main' => __( 'Primary Header Nav' ),
	  'secondary' => __( 'My Custom Footer Menu' )
	);
	register_nav_menus( $args );
}

//custom script club

function bdConnect(){
   try
   {
   		$connection= new PDO("mysql:host=localhost;dbname=Krill","root","root");
  //$connection= new PDO("mysql:host=jeanphilgwkrill.mysql.db;dbname=jeanphilgwkrill","jeanphilgwkrill","Gh58Hag9");
   $connection->exec("SET NAMES 'UTF8'");
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

return $connection;
}

function insert($prenom,$nom,$mail,$pre_co){
    $connexion = bdConnect();
    $insert = $connexion->prepare("INSERT INTO club(prenom,nom,email,pre_co) VALUES(?,?,?,?)");
    $insert->execute(array($prenom,$nom,$mail,$pre_co));

    $select = $connexion->prepare("select * FROM club WHERE email = ?");
    $select->execute(array($mail));
    $data = $select->fetch();

    return $data;
}