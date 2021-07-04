<? get_header(); ?>

<style>
    body {
        background: #eee;;
    }
</style>

<section class="single-page">
    <div class="container">

    <?
    foreach ($posts as $post) {
        
        if(get_field('wrapper_header_img')['url']) {
            $img = get_field('wrapper_header_img')['url'];
        } else {
            $img = get_template_directory_uri()."/assets/images/wrapper_header_img.png";
        }

        

        ?>

            <div class="wrapper-header">
                <div class="overlay">
                    <img src="<?=$img?>">
                </div>
            </div>
            <div class="content">
                <p class="cs_content_title"><a href="/novosti">НОВОСТИ</a> / <?=$post->post_title?></p>
                <div>
                    <?=$post->post_content;?>
                </div>
            </div>
        <?
    }
    ?>

    </div>
</section>