<? get_header(); ?>

<?

$start = get_field('date_champ_start');
$end = get_field('date_champ_end');

$web = get_field('medalisty_web');
$web_jun = get_field('medalisty_web_jun');
$set = get_field('medalisty_set');
$m_1c = get_field('medalisty_1c');



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
                        <li>#wsrrostov</li>
                        <li>#wsrrostov</li>
                        <li>#РКСИ_wsrrostov</li>
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
                    <li><span>ИТ-решения для бизнеса на платформе «1С:Предприятие 8»</span><a data-fancybox data-src="#competences_1с" href="javascript:;" class="cs_btn_champ">Подробнее</a></li>
                    <li><span>Сетевое и системное администрирование</span><a data-fancybox data-src="#competences_set" href="javascript:;" class="cs_btn_champ">Подробнее</a></li>
                    <li><span>Веб-дизайн и разработка — Юниоры</span><a data-fancybox data-src="#competences_web_jun" href="javascript:;" class="cs_btn_champ">Подробнее</a></li>
                    <li><span>Веб-дизайн и разработка</span><a data-fancybox data-src="#competences_web" href="javascript:;" class="cs_btn_champ">Подробнее</a></li>
                </ul>

                <div style="display: none;" id="competences_web">
                    <h2>Веб-дизайн и разработка</h2>
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
                    <li><a href="https://drive.google.com/file/d/1DVnb2-wgQAGp3XiDUO7IKL_YAWs6uph2/view" target="_blank" class="cs_btn_champ">Программа чемпионата</a></li>
                    <li><a href="https://drive.google.com/file/d/1ORQzZ-BPSFbKEdCsztoakGg3iohL-7gL/view" target="_blank" class="cs_btn_champ">Деловая программа</a></li>
                </ul>
            </div>

            <div class="documents">
                <h2>Документы</h2>
                <ul>
                    <li><a href="https://drive.google.com/drive/folders/1UX7W1FILHICLMpG7hA9LhX23oKmzRRTk" target="_blank" class="cs_btn_champ">Примерные задания</a></li>
                    <li><a href="https://r1.nubex.ru/s14250-b5a/f806_68/Регламент%20РЧ%202021%20Том%20А%20(с%20изменениями%20от%2017.11.2020).pdf" target="_blank" class="cs_btn_champ">Регламент А</a></li>
                    <li><a href="https://r1.nubex.ru/s14250-b5a/f807_6c/Регламент%20РЧ%202021%20Том%20Б.pdf" target="_blank" class="cs_btn_champ">Регламент Б</a></li>
                    <li><a href="https://worldskills.ru/assets/docs/WSR_OD04_Kodeks_ehtiki_v1.0_RU.pdf" target="_blank" class="cs_btn_champ">Кодекс Этики</a></li>
                </ul>
            </div>

            <div class="medalists">
                <h2>Медалисты</h2>
                
                <div class="medalists_wrapper">
                    <h4 class="medalists_wrapper-title">Веб-дизайн и разработка</h4>
                    <ul>
                        <? $i = 1; foreach ($web as $row) { ?>
                        <li><b><?=$i?> место.</b> <?=$row['fio']?> (<?=$row['obrazovatelnaja_organizacija']?>)</li>
                        <? $i++; } ?>
                    </ul>
                </div>
                
                <div class="medalists_wrapper">
                    <h4 class="medalists_wrapper-title">Веб-дизайн и разработка — Юниоры</h4>
                    <ul>
                        <? $i = 1; foreach ($web_jun as $row) { ?>
                        <li><b><?=$i?> место.</b> <?=$row['fio']?> (<?=$row['obrazovatelnaja_organizacija']?>)</li>
                        <? $i++; } ?>
                    </ul>
                </div>

                <div class="medalists_wrapper">
                    <h4 class="medalists_wrapper-title">Сетевое и системное администрирование</h4>
                    <ul>
                        <? $i = 1; foreach ($set as $row) { ?>
                        <li><b><?=$i?> место.</b> <?=$row['fio']?> (<?=$row['obrazovatelnaja_organizacija']?>)</li>
                        <? $i++; } ?>
                    </ul>
                </div>

                <div class="medalists_wrapper">
                    <h4 class="medalists_wrapper-title">ИТ (программные) решения для бизнеса на платформе «1С:Предприятие 8»</h4>
                    <ul>
                        <? $i = 1; foreach ($m_1c as $row) { ?>
                        <li><b><?=$i?> место.</b> <?=$row['fio']?> (<?=$row['obrazovatelnaja_organizacija']?>)</li>
                        <? $i++; } ?>
                    </ul>
                </div>

                <div class="all_resilt_file">
                    <? if(get_field('link_result_100')){?> <a href="<?the_field('link_result_100')?>" target="_blank" class="cs_btn_champ text-center">Просмотреть все результаты(100 баллов)</a> <? } ?>
                    <? if(get_field('link_result_500')){?> <a href="<?the_field('link_result_500')?>" target="_blank" class="cs_btn_champ text-center mt-3">Просмотреть все результаты(500 баллов)</a> <? } ?>
                </div>
            </div>

            <div class="hronics">
                    <h2>Хроника по дням</h2>
                    <div class="d-flex align-items-start">
                        <?
                            // Поулчаем страницы постов с хроникой дней
                            $post_hronic = get_field('hronics');
                            // Если существует такой пост, то выводим для него табы
                            if($post_hronic){
                                $i = 1;
                                ?>
                                
                                <div class="nav flex-column nav-pills me-3" style="width: 35%;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <? // Перебираем все посты и проверяем, день указанный в посте меньше сегодняшней даты, если да, то выводим этот пост ?>
                                    <? foreach ($post_hronic as $post) { if(strtotime(get_field('date_day', $post_hron->ID)) < strtotime(date('d-m-Y'))){ ?>
                                            <button class="nav-link" style="text-align: left" data-bs-toggle="pill" data-bs-target="#v-pills-<?=$i?>" type="button"><?=$post->post_title?></button>
                                    <? } $i++; } ?>
                                </div>



                                <div class="tab-content w-100" id="v-pills-tabContent">
                                    <? $i = 1; foreach ($post_hronic as $post) { ?>
                                        <div class="tab-pane fade" id="v-pills-<?=$i?>" >
                                            <p><a class="cs_btn_champ" href="<?=get_permalink($post->ID);?>">Откроть полную статью</a></p>
                                            <div class="content_hronic">
                                                <?=$post->post_content?>
                                            </div>
                                        </div>
                                    <? $i++; } ?>
                                </div>
                            <? } ?>
                    </div>
                </div>

            
        
        </div>
        
            
        

    </div>

</section>


<? do_action('get_post_partners'); ?>


<? get_footer(); ?>