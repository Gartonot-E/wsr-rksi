<? get_header(); ?>

<?

$start = get_field('date_champ_start');
$end = get_field('date_champ_end');



?>

<section class="championshops">
    <div class="container">
        <div class="title">
            <h1><?=$post->post_title?></h1>
            <span class="line"></span>
        </div>
        <div class="content">
            <div class="content_header">
                <div class="date">
                    <p><b>Дата начала чемпионата:</b> <?=$start?></p>
                    <p><b>Дата окончания чемпионата:</b> <?=$end?></p>
                </div>
        
                <? if( get_post_meta($post->ID, 'title', 1)) { ?>
                    <p><b>Ссылка на чемпионат:</b> <a href="<?= get_post_meta($post->ID, 'title', 1); ?>" target="_blank">Смотреть трансляцию</a></p>
                <? } ?>
            </div>
            
    
            <? if(strtotime(date('d-m-Y')) > strtotime($end)) {?>
                <div class="wrapper_result">
                    <h2 >Итоги чемпионата</h2>
                    <div class="result_champ"><?=$post->post_content;?></div>
                </div>
            <? } ?>

            
            <div class="about-champ">
                <h2>О чемпионате</h2>
                <div class="about-champ__content">
                    <?the_field('o_chempionate', $post->ID)?>
                </div>
                <div class="about-champ__hashtags">
                    <ul>
                        <li>#wsrrostov2020</li>
                        <li>#wsrrostov</li>
                        <li>#РКСИ_wsrrostov2020</li>
                    </ul>
                </div>
               <div class="about-champ__logo-min">
                    <? 
                    // Логотип правительства и министерва образования
                    require_once 'logo_min.php';
                    ?>
               </div>
            </div>
            
            <div class="competences">
                <h2>Компетенции</h2>
                <ul>
                    <li>Веб-дизайн и разработка<a data-fancybox data-src="#competences_web" href="javascript:;" class="btn btn-primary">Подробнее</a></li>
                    <li>Веб-дизайн и разработка — Юниоры<a data-fancybox data-src="#competences_web_jun" href="javascript:;" class="btn btn-primary">Подробнее</a></li>
                    <li>Сетевое и системное администрирование<a data-fancybox data-src="#competences_set" href="javascript:;" class="btn btn-primary">Подробнее</a></li>
                    <li>ИТ-решения для бизнеса на платформе «1С:Предприятие 8»<a data-fancybox data-src="#competences_1с" href="javascript:;" class="btn btn-primary">Подробнее</a></li>
                </ul>

                <div style="display: none;" id="competences_web">
                    <h2>Веб-дизайн и разработка!</h2>
                    <p>Сделать 4 модуля, вёрстка, REST API, Игра, WORDPRESS</p>
                </div>

                <div style="display: none;" id="competences_web_jun">
                    <h2>Веб-дизайн и разработка — Юниоры</h2>
                    <p>Сделать 4 модуля, вёрстка, REST API, Игра, WORDPRESS (облегчённое)</p>
                </div>

                <div style="display: none;" id="competences_set">
                    <h2>Сетевое и системное администрирование</h2>
                    <p>Настроить сети и ОС</p>
                </div>

                <div style="display: none;" id="competences_1с">
                    <h2>ИТ-решения для бизнеса на платформе «1С:Предприятие 8»</h2>
                    <p>Настроить 1С предприятия</p>
                </div>
            </div>


            <div class="programms">
                <h2>Программа</h2>
                <ul>
                    <li><a href="https://drive.google.com/file/d/1DVnb2-wgQAGp3XiDUO7IKL_YAWs6uph2/view" target="_blank">Программа чемпионата</a></li>
                    <li><a href="https://drive.google.com/file/d/1ORQzZ-BPSFbKEdCsztoakGg3iohL-7gL/view" target="_blank">Деловая программа</a></li>
                </ul>
            </div>

            <div class="programms">
                <h2>Документы</h2>
                <ul>
                    <li><a href="https://drive.google.com/file/d/1DVnb2-wgQAGp3XiDUO7IKL_YAWs6uph2/view" target="_blank">Примерные задания</a></li>
                    <li><a href="https://drive.google.com/file/d/1ORQzZ-BPSFbKEdCsztoakGg3iohL-7gL/view" target="_blank">Регламент А</a></li>
                    <li><a href="https://drive.google.com/file/d/1ORQzZ-BPSFbKEdCsztoakGg3iohL-7gL/view" target="_blank">Регламент Б</a></li
                    <li><a href="https://drive.google.com/file/d/1ORQzZ-BPSFbKEdCsztoakGg3iohL-7gL/view" target="_blank">Кодекс Этики</a></li>>
                </ul>
            </div>

            
        
        </div>
        
            
        

    </div>

</section>


<? do_action('get_post_partners'); ?>


<? get_footer(); ?>