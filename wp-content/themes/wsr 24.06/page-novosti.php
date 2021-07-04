<?
/**
 * Page news
 */
?>

<? get_header(); ?>
<style>
    body { background: #eee; }
</style>
<section class="news-page">
    <div class="container">
    <section class="news-section">
        <div class="title">
            <h1>Новости</h1>
            <span class="line"></span>
        </div>
        <div class="content">
            <div class="wrap">
                <?

                $posts = get_posts(array(
                    'numberposts' => -1,
                    'category'    => '4',
                    'post_type'   => 'post',
                    'order'       => 'DESC',
                ));
                
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
    </section>
    </div>
</section>

<? get_footer(); ?>