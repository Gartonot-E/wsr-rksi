<?
// Подключаем скрипты через хук
function include_scripts(){
    wp_enqueue_script( 'cs_script', get_template_directory_uri() . '/assets/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'include_scripts' );
