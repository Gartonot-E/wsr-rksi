<?
/**
 * Page volontjory
 */
?>

<? get_header(); ?>

<section class="volontjory-page">
    <div class="container">
        <div class="title">
            <h1><?=$post->post_title?></h1>
            <span class="line"></span>
        </div>
        <div class="content">
            <div class="text">
                <h3 class="title_text">Важность волонтёрства</h3>
                <?=$post->post_content?>
            </div>
            <div class="tasks">
                <h3 class="title_task">Задачи</h3>
                <ul>
                    <li>Встретить участников</li>
                    <li>Провести участников</li>
                    <li>Следить за порядком</li>
                </ul>
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
            <div class="photo-list">
                <h3 class="title_task">Наши волонтёры</h3>
                <div class="images">
                    <img src="<?=get_template_directory_uri()?>/assets/images/volan1.jpg">
                    <img src="<?=get_template_directory_uri()?>/assets/images/volan2.jpg">
                    <img src="<?=get_template_directory_uri()?>/assets/images/volan3.jpg">
                </div>
            </div>
            <div class="form-order">
                <h3 class="title_task">Заявка на участие в волонтёрстве</h3>
                <?= do_shortcode('[contact-form-7 id="259" title="Контактная форма 1"]')?>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>