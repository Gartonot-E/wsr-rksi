<?

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