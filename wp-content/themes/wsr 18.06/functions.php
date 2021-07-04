<?
// Добавляем в тему поодержку меню
register_nav_menus();



// Добавляем в тему поодержку виджеты
// Добавляем свой виджет для соц.сетей
register_sidebar(array(
    'name' => 'Соц.сети',
    'id'   => 'soc-links'
));



// Подключаем скрипты через хук
function include_scripts(){
    wp_enqueue_script( 'cs_script', get_template_directory_uri() . '/assets/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'include_scripts' );



// Отключаем муссор от JQUERY из консоли
add_action('wp_default_scripts', function ($scripts) {
    if (!empty($scripts->registered['jquery'])) {
        $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
    }
});




/**
 * Get post page about wsr
 */
function f_get_post_about_wsr($post){
    ?>
    <!-- Info section -->
    <div class="container about-wsr">
        <div class="title">
            <h1><?=$post->post_title?></h1>
            <span class="line"></span>
        </div>
        <div class="content_about-wsr">
            <div class="row">
                <div class="col-md-4 about-wsr__img">
                    <img src="<? the_field('img', 27); ?>">
                </div>
                <div class="col-md-8 about-wsr__content">
                    <h2><? the_field('header', 27); ?></h2>
                    <div class="text">
                        <? the_field('info', 27); ?>
                    </div>
                    <div class="quote">
                        <? the_field('sub_info', 27); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Video section -->
    <div class="video-section about-wsr">
        <video autoplay loop muted class="video-thumb" id="video-thumb">
            <source src="<?=get_template_directory_uri()?>/assets/video.mp4" type="video/mp4">
            <p>asdas</p>
        </video>
        <div class="content">
        <div class="content__btn">
                <p>Что такое</p>
                <p class="wsr">worldskills</p>
                <a data-fancybox href="<?=get_template_directory_uri()?>/assets/video.mp4"">
                    <img src="<?=get_template_directory_uri()?>/assets/images/poly.png">
                </a>
        </div>
        </div>
    </div>
    <?
  
}

add_action('get_post_about_wsr', 'f_get_post_about_wsr');



/**
 * Get post page about colege
 */
function f_get_post_about_colege($post) {
    ?>
    
    <div class="container about-college">
        <div class="title">
            <h1><?=$post->post_title?></h1>
            <span class="line"></span>
        </div>
        <div class="content_about-colege">
            <img src="<? the_field('img', 43); ?>">
            <h2><? the_field('header', 43); ?></h2>
            <div class="content">
                <? the_field('info', 43); ?>
            </div>
        </div>
    </div>

    <!-- Video section -->
    <div class="video-section about-wsr colege">
        <video autoplay loop muted class="video-thumb" id="video-thumb">
            <source src="<?=get_template_directory_uri()?>/assets/video_col.mp4" type="video/mp4">
        </video>
        <div class="content">
        <div class="content__btn">
                <p>Последний</p>
                <p class="wsr">чемпионат</p>
                <a data-fancybox href="https://www.youtube.com/watch?v=QZaL1SeJH_c">
                    <img src="<?=get_template_directory_uri()?>/assets/images/poly.png">
                </a>
        </div>
        </div>
    </div>
    
    <?
}

add_action('get_post_about_colege', 'f_get_post_about_colege');
