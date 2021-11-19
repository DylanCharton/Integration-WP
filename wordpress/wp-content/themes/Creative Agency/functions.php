<?php

function mesMenusWordpress()
{
    register_nav_menus(
        array(
            'header-menu' => __('Zone menu header'),
            'footer-menu' => __('Zone menu footer'),
			'header' => __('En tête de menu'),
        )
        );
}

function montheme_menu_class(array $classes): array
{

	$classes[] = 'nav-item';
	return $classes;

}

function montheme_menu_link_class(array $attrs): array
{

	$attrs['class'] = 'nav-link';
	return $attrs;

}


add_action('init', 'mesMenusWordpress');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');



/*
* On utilise une fonction pour créer notre custom post type 'Projets'
*/

function custom_post_type_projets() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Nos projets', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Projet', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Projets'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous nos projets'),
		'view_item'           => __( 'Voir le projet'),
		'add_new_item'        => __( 'Ajouter un nouveau projet'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer un projet'),
		'update_item'         => __( 'Modifier un projet'),
		'search_items'        => __( 'Rechercher un projet'),
		'not_found'           => __( 'Aucun projet trouvé'),
		'not_found_in_trash'  => __( 'Aucun projet dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Projets'),
		'description'         => __( 'Tout sur les projets'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'projets'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "salades" et ses arguments
	register_post_type( 'projets', $args );

}

add_action( 'init', 'custom_post_type_projets', 0 );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);
// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );


/**
 * Register widget area.
 *
 * @since Creative Agency 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function creative_agency_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'Creative Agency' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Rajoutez des widgets pour le pied-de-page.', 'Creative Agency' ),
			'before_widget' => '<section id="footer-w" class="widget footer-w">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'creative_agency_widgets_init' );


// Area Widjets section 5

function section5_left_widgets_init() {
 
	register_sidebar( array(
   
	'name' => 'Zone widgets section 5 Left',
	'id' => 'new-widget-area-left',
	'before_widget' => '<div class="nwa-widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="nwa-title">',
	'after_title' => '</h2>',
	) );
   }
   
add_action( 'widgets_init', 'section5_left_widgets_init' );

function section5_right_widgets_init() {
 
	register_sidebar( array(
   
	'name' => 'Zone widgets section 5 Right',
	'id' => 'new-widget-area-right',
	'before_widget' => '<div class="nwa-widget col-6">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="nwa-title">',
	'after_title' => '</h2>',
	) );
   }
   
add_action( 'widgets_init', 'section5_right_widgets_init' );




function hstngr_register_widget() {
	register_widget( 'hstngr_widget' );
}
	
	add_action( 'widgets_init', 'hstngr_register_widget' );
	
class hstngr_widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
		// widget ID
		'hstngr_widget',
		// widget name
		__('Widget-Footer-Style', ' hstngr_widget_domain'),
		// widget description
		array( 'description' => __( 'Hostinger Widget Tutorial', 'hstngr_widget_domain' ), )
		);
	}
		public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		echo $args['before_widget'];
		//if title is present
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];
		//output
		echo __( 'Hello, World from Hostinger.com', 'hstngr_widget_domain' );
		echo $args['after_widget'];
	}
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) )
		$title = $instance[ 'title' ];
		else
		$title = __( 'Default Title', 'hstngr_widget_domain' );
		?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
			name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php
	}
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	
}