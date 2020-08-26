<?php
/**
 * apavlova-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package apavlova-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Полностью убираем версию WordPress
add_filter('the_generator', '__return_empty_string');

// Удаление параметра ver из добавляемых скриптов и стилей
function rem_wp_ver_css_js( $src ) {

    if ( strpos( $src, 'ver=' ) ) {
        $src = remove_query_arg( 'ver', $src );
	}

    return $src;

}
add_filter( 'style_loader_src', 'rem_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'rem_wp_ver_css_js', 9999 );



if ( ! function_exists( 'apavlova_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function apavlova_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on apavlova-theme, use a find and replace
		 * to change 'apavlova-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'apavlova-theme', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'apavlova-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'apavlova_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'apavlova_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function apavlova_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'apavlova_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'apavlova_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function apavlova_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'apavlova-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'apavlova-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'apavlova_theme_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function apavlova_theme_scripts() {


	wp_enqueue_style( 'apavlova-theme-style', get_stylesheet_uri(), array(), _S_VERSION );


	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style('google-fonts-style', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900');

	wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.min.css');

	wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

	wp_enqueue_style('et-line-style', get_template_directory_uri() . '/assets/css/et-line.min.css');

	wp_enqueue_style('apavlova-style', get_template_directory_uri() . '/assets/css/style.min.css');

	wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');

	wp_enqueue_style('owl-theme-style', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');

	wp_enqueue_style( 'magnific-popup-style', get_template_directory_uri() . '/assets/css/magnific-popup.min.css');



	wp_style_add_data( 'apavlova-theme-style', 'rtl', 'replace' );



	wp_deregister_script('jquery');
 	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', null, null, true);
	 wp_enqueue_script('jquery');
	 
	 
	wp_enqueue_script( 'apavlova-theme-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );



	wp_enqueue_script('apavlova-theme-jquery-migrate-script', 'https://code.jquery.com/jquery-migrate-3.0.0.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-scrollIt-script', get_template_directory_uri() . '/assets/js/scrollIt.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-jquery-magnific-popup-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', null, null, true);


	wp_enqueue_script('apavlova-theme-owl-carousel-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-jquery-stellar-script', get_template_directory_uri() . '/assets/js/jquery.stellar.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-animated-headline-script', get_template_directory_uri() . '/assets/js/animated.headline.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-jquery-waypoints-script', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-jquery-counterup-script', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-isotope-script', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-validator-script', get_template_directory_uri() . '/assets/js/validator.min.js', null, null, true);

	wp_enqueue_script('apavlova-theme-custom-script', get_template_directory_uri() . '/assets/js/custom.min.js', null, null, true);


	
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apavlova_theme_scripts' );




/**** Add favicons **/
function master_add_favicon(){ ?>
	<!-- Custom Favicons -->
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() . '/assets/img/favicon.ico';?>" sizes="32x32">
	<!-- <link rel="icon" href="img/favicon.ico" sizes="120x120" type="image/png">
	<link rel="icon" type="image/png" href="img/favicon.ico" sizes="16x16">
	<link rel="icon" type="image/png" href="img/favicon.ico" sizes="32x32"> -->
<?php }
add_action('wp_head','master_add_favicon');



/** Add Yandex.Metrika counter **/
function apavlova_theme_add_yametrika(){ ?>
	<!-- Yandex.Metrika counter -->
	<script>
		(function (d, w, c) {
				(w[c] = w[c] || []).push(function() {
						try {
								w.yaCounter50243827 = new Ya.Metrika2({
										id:50243827,
										clickmap:true,
										trackLinks:true,
										accurateTrackBounce:true,
										webvisor:true
								});
						} catch(e) { }
				});

				var n = d.getElementsByTagName("script")[0],
						s = d.createElement("script"),
						f = function () { n.parentNode.insertBefore(s, n); };
				s.type = "text/javascript";
				s.async = true;
				s.src = "https://mc.yandex.ru/metrika/tag.js";

				if (w.opera == "[object Opera]") {
						d.addEventListener("DOMContentLoaded", f, false);
				} else { f(); }
		})(document, window, "yandex_metrika_callbacks2");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/50243827" style="position:absolute; left:-9999px;" alt="Yandex.Metrika counter" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
<?php }

add_action('wp_footer','apavlova_theme_add_yametrika');





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



/** Custom post types ***/
add_action('init', 'register_apavlova_portfolio');

function register_apavlova_portfolio(){


	//категория портфолио
	register_taxonomy('categoriya_portfolio', array('portfolio'), array(
		'label'                 => 'Категории портфолио', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Категории портфолио',
			'singular_name'     => 'Категории портфолио',
			'search_items'      => 'Искать категории портфолио',
			'all_items'         => 'Все категории портфолио',
			'parent_item'       => 'Родит. категория портфолио',
			'parent_item_colon' => 'Родит. категория портфолио:',
			'edit_item'         => 'Ред. категории портфолио',
			'update_item'       => 'Обновить категории в портфолио',
			'add_new_item'      => 'Добавить категории в портфолио',
			'new_item_name'     => 'Новая категория в портфолио',
			'menu_name'         => 'Категории портфолио',
		),
		'description'           => 'Рубрики для категорий портфолио', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => false, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		'rewrite'               => array('slug'=>'portfolio', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	) );

	// тип записи - портфолио
	register_post_type('portfolio', array(
		'label'               => 'Портфолио',
		'labels'              => array(
			'name'          => 'Портфолио',
			'singular_name' => 'Портфолио',
			'menu_name'     => 'Портфолио',
			'all_items'     => 'Портфолио',
			'add_new'       => 'Добавить в портфолио',
			'add_new_item'  => 'Добавить новое в портфолио',
			'edit'          => 'Редактировать',
			'edit_item'     => 'Редактировать портфолио',
			'new_item'      => 'Новое в портфолио',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => false,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		'rewrite'             => array( 'slug'=>'portfolio/%categoriya_portfolio%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
		'has_archive'         => 'portfolio',
		'query_var'           => true,
		'supports'            => array( 'title', 'editor' ),
		'taxonomies'          => array( 'categoriya_portfolio' ),
		'menu_icon' => 'dashicons-archive',
	) );

	// тип записи - портфолио
	register_post_type('portfolio', array(
		'label'               => 'Портфолио',
		'labels'              => array(
			'name'          => 'Портфолио',
			'singular_name' => 'Портфолио',
			'menu_name'     => 'Портфолио',
			'all_items'     => 'Портфолио',
			'add_new'       => 'Добавить в портфолио',
			'add_new_item'  => 'Добавить новое в портфолио',
			'edit'          => 'Редактировать',
			'edit_item'     => 'Редактировать портфолио',
			'new_item'      => 'Новое в портфолио',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon' => 'dashicons-admin-page',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );

}


add_action('init', 'register_apavlova_services');
function register_apavlova_services(){

	// тип записи - вопросы - faq
	register_post_type('services', array(
		'label'               => 'Услуги',
		'labels'              => array(
			'name'          => 'Услуги',
			'singular_name' => 'Услуги',
			'menu_name'     => 'Услуги',
			'all_items'     => 'Услуги',
			'add_new'       => 'Добавить в Услуги',
			'add_new_item'  => 'Добавить новое в Услуги',
			'edit'          => 'Редактировать',
			'edit_item'     => 'Редактировать Услуги',
			'new_item'      => 'Новое в Услугах',
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'menu_icon' => 'dashicons-admin-tools',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}
