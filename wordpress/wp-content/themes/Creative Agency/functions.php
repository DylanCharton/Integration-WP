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

function footer_widgets_init() {
 
	register_sidebar( array(
   
	'name' => 'Zone widgets footer',
	'id' => 'hstngr_widget',
	'before_widget' => '<div class="footerWidgetBlock">',
	'after_widget' => '</div>',
	'before_title' => '',
	'after_title' => '',
	) );
   }
   
add_action( 'widgets_init', 'footer_widgets_init' );

// Creating the widget 
class wpb_widget extends WP_Widget {
  
	function __construct() {
	parent::__construct(
	  
	// Base ID of your widget
	'wpb_widget', 
	  
	// Widget name will appear in UI
	__('Widget Footer', 'wpb_widget_domain'), 
	  
	// Widget description
	array( 'description' => __( 'Widget permettant de créer en quelques clics un footer', 'wpb_widget_domain' ), ) 
	);
	}
	  
	// Creating widget front-end
	  
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	$title1 = apply_filters( 'widget_title1', $instance['title1'] );
	  
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] .  '<p>@ 2021 <a href="http://localhost/mentions-legales">'.$title.'</a> - All Right Reserved</p>' . $args['after_title'];
	echo $args['before_title'] .  '<p>Designed By '.$title1.'</p>' . $args['after_title'];
	  
	// This is where you run the code and display the output
	echo $args['after_widget'];
	}
			  
	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	$title1 = $instance[ 'title1' ];
	}
	else {
	$title = __( 'New title', 'wpb_widget_domain' );
	$title1 = __( 'New title1', 'wpb_widget_domain' );
	}
	// Widget admin form
	?>
<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
		name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'title1' ); ?>"><?php _e( 'Title:' ); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title1' ); ?>"
		name="<?php echo $this->get_field_name( 'title1' ); ?>" type="text" value="<?php echo esc_attr( $title1 ); ?>" />
</p>
<?php 
	}
		  
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	$instance['title1'] = ( ! empty( $new_instance['title1'] ) ) ? strip_tags( $new_instance['title1'] ) : '';
	return $instance;
	}
	 
	// Class wpb_widget ends here
	} 

	// Register and load the widget
	function wpb_load_widget() {
		register_widget( 'wpb_widget' );
	}
	add_action( 'widgets_init', 'wpb_load_widget' );



	// // Mon premier widget dynamique
// class mon_premier_widget_dynamique extends WP_Widget {

//     function __construct() {
//         parent::__construct(
//             'mon_premier_widget_dynamique',
//             esc_html__( 'Mon premier widget dynamique', 'textdomain' ),
//             array( 'description' => esc_html__( 'Affiche les coordonnées', 'textdomain' ), )
//         );
//     }

//     private $widget_fields = array(
//         array(
//             'label' => 'Copyright',
//             'id' => 'nom_text',
//             'type' => 'text',
//         ),
//         array(
//             'label' => 'Designer',
//             'id' => 'adresse_text',
//             'type' => 'text',
//         ),
//     );

//     public function widget( $args, $instance ) {
//         echo $args['before_widget'];

//         // Output generated fields
//         echo '<div>'.$instance['nom_text'].'</div>';
//         echo '<div>'.$instance['adresse_text'].'</div>';

        
//         echo $args['after_widget'];
//     }

//     public function field_generator( $instance ) {
//         $output = '';
//         foreach ( $this->widget_fields as $widget_field ) {
//             $default = '';
//             if ( isset($widget_field['default']) ) {
//                 $default = $widget_field['default'];
//             }
//             $widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $default, 'textdomain' );
//             switch ( $widget_field['type'] ) {
//                 default:
//                     $output .= '<p>';
//                     $output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'textdomain' ).':</label> ';
//                     $output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
//                     $output .= '</p>';
//             }
//         }
//         echo $output;
//     }

//     public function form( $instance ) {
//         $this->field_generator( $instance );
//     }

//     public function update( $new_instance, $old_instance ) {
//         $instance = array();
//         foreach ( $this->widget_fields as $widget_field ) {
//             switch ( $widget_field['type'] ) {
//                 default:
//                     $instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
//             }
//         }
//         return $instance;
//     }
// }

// add_action( 'widgets_init', 'register_mon_premier_widget_dynamique' );

// function register_mon_premier_widget_dynamique() {
//     register_widget( 'mon_premier_widget_dynamique' );
// }