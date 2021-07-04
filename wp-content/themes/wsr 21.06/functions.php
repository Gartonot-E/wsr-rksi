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
            <div class="row">

                <div class="col-md-4 about-colege__left-side">
                    <img src="<? the_field('img', 43); ?>">
                    <p><? the_field('header', 43); ?></p>
                </div>

                <div class="col-md-8 about-colege__right-side">
                    <? the_field('info', 43); ?>
                </div>

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



/**
 * Get post page others championship
 */
function f_get_post_other_champoinshop() {
    $url[] = get_permalink(46);
    $url[] = get_permalink(48);
    $url[] = get_permalink(51);
    $url[] = get_permalink(53);
    $url[] = get_permalink(56);
    $name = ['2020', '2019', '2018', '2017', '2016'];

    ?>
        <section class="all_championship">
            <div class="container">
                <div class="title">
                    <h1>Все чемпионаты</h1>
                    <span class="line"></span>
                </div>
            </div>
            <div class="line-bg">
               <div class="container">
                    <ul>
                            <li>
                                <a>
                                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M27.55 1.45H23.2V0H5.8V1.45H1.45C0.58 1.45 0 2.03 0 2.9V6.38C0 9.715 2.465 12.47 5.8 12.905V13.05C5.8 17.255 8.7 20.735 12.615 21.605L11.6 24.65H8.265C7.685 24.65 7.105 25.085 6.96 25.665L5.8 29H23.2L22.04 25.665C21.895 25.085 21.315 24.65 20.735 24.65H17.4L16.385 21.605C20.3 20.735 23.2 17.255 23.2 13.05V12.905C26.535 12.47 29 9.715 29 6.38V2.9C29 2.03 28.42 1.45 27.55 1.45ZM5.8 10.005C4.205 9.57 2.9 8.12 2.9 6.38V4.35H5.8V10.005ZM17.4 14.5L14.5 12.905L11.6 14.5L12.325 11.6L10.15 8.7H13.195L14.5 5.8L15.805 8.7H18.85L16.675 11.6L17.4 14.5ZM26.1 6.38C26.1 8.12 24.795 9.715 23.2 10.005V4.35H26.1V6.38Z" fill="white"/>
                                    </svg>
                                    <span>2021</span>
                                </a>
                            </li>
                            <?
                            for($i = 0; $i < 5; $i++){
                                ?>
                                    <li>
                                        <a href="<?=$url[$i]?>">
                                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M27.55 1.45H23.2V0H5.8V1.45H1.45C0.58 1.45 0 2.03 0 2.9V6.38C0 9.715 2.465 12.47 5.8 12.905V13.05C5.8 17.255 8.7 20.735 12.615 21.605L11.6 24.65H8.265C7.685 24.65 7.105 25.085 6.96 25.665L5.8 29H23.2L22.04 25.665C21.895 25.085 21.315 24.65 20.735 24.65H17.4L16.385 21.605C20.3 20.735 23.2 17.255 23.2 13.05V12.905C26.535 12.47 29 9.715 29 6.38V2.9C29 2.03 28.42 1.45 27.55 1.45ZM5.8 10.005C4.205 9.57 2.9 8.12 2.9 6.38V4.35H5.8V10.005ZM17.4 14.5L14.5 12.905L11.6 14.5L12.325 11.6L10.15 8.7H13.195L14.5 5.8L15.805 8.7H18.85L16.675 11.6L17.4 14.5ZM26.1 6.38C26.1 8.12 24.795 9.715 23.2 10.005V4.35H26.1V6.38Z" fill="white"/>
                                            </svg>
                                            <span><?=$name[$i]?></span>
                                        </a>
                                    </li>
                                <?
                            }
                            ?>
                        </ul>
               </div>
            </div>
        </section>
    <?
}

add_action('get_post_other_champoinshop', 'f_get_post_other_champoinshop');


// $post->post_title
// $post->post_content
// $post->guid
// date('d-m-Y', strtotime($post->post_date));

/**
 *  Get post page news
 */
function f_get_post_news($posts){
    ?>
    <section class="news-section">
        <div class="container">
            <div class="title">
                <h1>Последние новости</h1>
                <span class="line"></span>
            </div>
            <div class="content">
                <div class="wrap">
                   <?
                   
                   foreach ($posts as $post) {
                       ?>
                        <div class="news">
                            <h2 class="news__header"><?=$post->post_title?></h2>
                            <p class="news__date"><?=date('d-m-Y', strtotime($post->post_date));?></p>
                            <p class="news__content"><?=mb_substr($post->post_content, 0, 250)?>...</p>
                            <a href="<?=$post->guid?>" class="news__button">Подробнее</a>
                        </div>
                       <?
                    }
                   
                   ?>
                </div>
            </div>
        </div>
    </section>
    <?
}

add_action('get_post_news', 'f_get_post_news');



function f_get_post_partners() {
    ?>
    
    <section class="partners">
        <div class="content">        

            <a class="block" href="https://rostov.rt.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/rt.png">
            </a>

            <a class="block" href="https://rksi.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/rksi.png">
            </a>

            <a class="block" href="https://www.centrinvest.ru/ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/centr.png">
            </a>

            <a class="block" href="https://rnds.pro/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/zabrodin.png">
            </a>

            <a class="block" href="http://mts.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/mts.png">
            </a>

            <a class="block" href="http://dontr.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/don.png">
            </a>

            <a class="block" href="https://gendalf.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/pendalf.png">
            </a>

            <a class="block" href="https://www.sebbia.ru/ru" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/sebbia.png">
            </a>

            <a class="block" href="https://www.fastreport.ru/ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/fr.png">
            </a>

            <a class="block" href="https://www.accenture.com/ru-ru" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/accenture.png">
            </a>
            
        </div>
    </section>
    
    <?
}

add_action('get_post_partners', 'f_get_post_partners');