<?
// Подключаем скрипты через хук
function include_scripts(){
    wp_enqueue_script( 'cs_script', get_template_directory_uri() . '/assets/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'include_scripts' );

// Подключение стилей для админки
function admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/admin.css');
  }
add_action('admin_enqueue_scripts', 'admin_style');
