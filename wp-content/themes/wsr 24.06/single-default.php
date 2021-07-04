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
               <div class="container">
                    <h1><a href="/novosti">НОВОСТИ</a> / <?=$post->post_title?></h1>
                </div>
                <div class="overlay">
                    <img src="<?=$img?>">
                </div>
            </div>
            <div class="content">
                <div class="before_more">
                    <?=get_extended($post->post_content)['main']?> 
                </div>   
                <hr>
                <div class="after_more">
                    <?=get_extended($post->post_content)['extended']?>
                </div>                
            </div>
        <?
    }
    ?>

    </div>
</section>