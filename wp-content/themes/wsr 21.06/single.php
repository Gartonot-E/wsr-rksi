<? get_header(); ?>

<div class="container">

<?
foreach ($posts as $post) {
    ?>
        <h1><?=$post->post_title?></h1>
        <p><?=$post->post_content?></p>
    <?
}
?>

</div>