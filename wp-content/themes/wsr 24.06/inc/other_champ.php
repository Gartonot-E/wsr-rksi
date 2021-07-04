<?

/**
 * Get post page others championship
 */
function f_get_post_other_champoinshop() {
    $url_link[] = get_permalink(132);
    $url_link[] = get_permalink(140);
    $url_link[] = get_permalink(142);
    $url_link[] = get_permalink(144);
    $url_link[] = get_permalink(146);
    $url_link[] = get_permalink(148);
    $name = ['2021', '2020', '2019', '2018', '2017', '2016'];

    ?>
        <section class="all_championship">
            <div class="container">
                <div class="title">
                    <h1>Все чемпионаты</h1>
                    <span class="line"></span>
                </div>
            </div>
            <div class="line-bg">
               <div class="container">
                    <ul>
                            <?
                                $i = 0;
                            foreach($url_link as $url){
                                ?>
                                    <li>
                                        <a href="<?=$url?>">
                                            <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M27.55 1.45H23.2V0H5.8V1.45H1.45C0.58 1.45 0 2.03 0 2.9V6.38C0 9.715 2.465 12.47 5.8 12.905V13.05C5.8 17.255 8.7 20.735 12.615 21.605L11.6 24.65H8.265C7.685 24.65 7.105 25.085 6.96 25.665L5.8 29H23.2L22.04 25.665C21.895 25.085 21.315 24.65 20.735 24.65H17.4L16.385 21.605C20.3 20.735 23.2 17.255 23.2 13.05V12.905C26.535 12.47 29 9.715 29 6.38V2.9C29 2.03 28.42 1.45 27.55 1.45ZM5.8 10.005C4.205 9.57 2.9 8.12 2.9 6.38V4.35H5.8V10.005ZM17.4 14.5L14.5 12.905L11.6 14.5L12.325 11.6L10.15 8.7H13.195L14.5 5.8L15.805 8.7H18.85L16.675 11.6L17.4 14.5ZM26.1 6.38C26.1 8.12 24.795 9.715 23.2 10.005V4.35H26.1V6.38Z" fill="white"/>
                                            </svg>
                                            <span><?=$name[$i]?></span>
                                        </a>
                                    </li>
                                <?
                                $i++;
                                }
                            ?>
                        </ul>
               </div>
            </div>
        </section>
    <?
}

add_action('get_post_other_champoinshop', 'f_get_post_other_champoinshop');