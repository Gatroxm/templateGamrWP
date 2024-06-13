<?php
// Crear menú
if(function_exists('register_nav_menus')){
    register_nav_menus(array('Principal' => 'Menú principal superior'));
}


// creo clases para el <a>
add_filter('nav_menu_link_attributes', 'tpl_gamr_clase_ancortag', 10, 3);

function tpl_gamr_clase_ancortag($atts, $item, $args){
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s mb-3">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
// Verifica si la función no existe y luego incluye el archivo correspondiente
if (!function_exists('gamrGetTplSettings')) {
    function gamrGetTplSettings($settings_file, $class_name, $post_id, $use_cache) {
        // Incluye el archivo de configuración
        include_once get_template_directory() . '/includes/tpl-settings/' . $settings_file . '.php';

        // Verifica si la clase está definida y si el método getSettings existe
        if (class_exists($class_name) && method_exists($class_name, 'getSettings')) {
            // Llama al método getSettings y retorna los ajustes
            return $class_name::getSettings($post_id);
        } else {
            // Si la clase o el método no están definidos, retorna un array vacío
            return [];
        }
    }
}
?>