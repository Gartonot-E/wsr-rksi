<? get_header(); ?>

<div class="container">

<?
foreach ($posts as $post) {
    ?>
        <h1><?=$post->post_content?></h1>
    <?
}
?>

</div>