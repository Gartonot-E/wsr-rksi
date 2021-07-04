<?
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
                            <p class="news__content"><?=mb_substr($post->post_content, 0, 100)?>...</p>
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