<?

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