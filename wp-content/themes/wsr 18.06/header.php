<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?bloginfo()?></title>

    <!-- Fancybox 3 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- My Style -->
    <link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/style.css">
    <? wp_head(); ?>
</head>
<body>


    
<!-- Header -->
<header>
    <nav>
        <div class="container">
            <div class="logo">
                <a href="/" >world<span>skills</span></a>
            </div>
            <div class="menu">
                <? wp_nav_menu('menu=top-menu'); ?>
            </div>  
            <div class="soc-links">
                <? if (function_exists('dynamic_sidebar')) dynamic_sidebar('soc-links'); ?>
            </div>
            <div class="gamburger">
                <span class="line"></span>
            </div>
        </div>
    </nav>
</header>