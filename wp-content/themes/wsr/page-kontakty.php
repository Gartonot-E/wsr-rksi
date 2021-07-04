<?
/**
 * Page contacts
 */
?>

<? get_header(); ?>

<section class="contacts">
    <div class="container">
        <div class="title">
            <h1><?=$post->post_content?></h1>
            <span class="line"></span>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="card-list">
                        <div class="card-item">
                            <div class="card-item__img">
                                <? $img = get_field('photo_first'); ?>
                                <img src="<?=$img['url']?>">
                            </div>
                            <div class="card-item__info">                            
                                <p class="header"><? the_field('header_first');?></p>
                                <a href="mailto: <? the_field('mail_first');?>"class="mail">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.8906 3.5625H2.10938C0.943922 3.5625 0 4.51228 0 5.67188V18.3281C0 19.4946 0.950859 20.4375 2.10938 20.4375H21.8906C23.0463 20.4375 24 19.4986 24 18.3281V5.67188C24 4.51434 23.0598 3.5625 21.8906 3.5625ZM21.5952 4.96875C21.1642 5.39742 13.7476 12.775 13.4916 13.0297C13.0931 13.4281 12.5634 13.6475 12 13.6475C11.4366 13.6475 10.9069 13.4281 10.5071 13.0284C10.3349 12.8571 3.00014 5.56097 2.40478 4.96875H21.5952ZM1.40625 18.0419V5.95898L7.48303 12.0037L1.40625 18.0419ZM2.40567 19.0312L8.48006 12.9955L9.51408 14.0241C10.1781 14.6881 11.061 15.0538 12 15.0538C12.939 15.0538 13.8219 14.6881 14.4846 14.0254L15.5199 12.9955L21.5943 19.0312H2.40567ZM22.5938 18.0419L16.517 12.0037L22.5938 5.95898V18.0419Z" fill="#4929A3"/>
                                    </svg>
                                    <? the_field('mail_first');?>
                                </a>
                                <p class="phone"><? the_field('phone_first');?></p>
                                <p class="messengers">
                                    <a href="https://api.whatsapp.com/send?phone=79034075739" target="_blank">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9589 4.00809C17.8539 1.90064 15.0545 0.739525 12.0721 0.738289C5.92662 0.738289 0.925095 5.73968 0.922623 11.8868C0.921799 13.8518 1.43513 15.7701 2.41086 17.4608L0.829102 23.2383L6.73961 21.6878C8.36819 22.5762 10.2017 23.0444 12.0676 23.0449H12.0722C18.217 23.0449 23.2191 18.0431 23.2214 11.8957C23.2227 8.91651 22.064 6.11541 19.9589 4.00809ZM12.0721 21.162H12.0683C10.4055 21.1613 8.77469 20.7145 7.35168 19.8703L7.01344 19.6694L3.50606 20.5895L4.44223 17.1698L4.22182 16.8192C3.29416 15.3438 2.80431 13.6384 2.80513 11.8875C2.80705 6.77816 6.96428 2.62135 12.0758 2.62135C14.551 2.62217 16.8778 3.58732 18.6274 5.33895C20.3769 7.09058 21.3399 9.41886 21.3391 11.895C21.3369 17.0048 17.1799 21.162 12.0721 21.162ZM17.1552 14.2215C16.8767 14.082 15.507 13.4083 15.2515 13.3152C14.9964 13.2222 14.8104 13.1759 14.6249 13.4547C14.4391 13.7335 13.9053 14.3611 13.7427 14.5469C13.5801 14.7328 13.4178 14.7562 13.1391 14.6166C12.8605 14.4772 11.9629 14.1829 10.8988 13.2339C10.0707 12.4952 9.51159 11.5829 9.349 11.3041C9.18667 11.0251 9.34762 10.8888 9.47122 10.7356C9.77279 10.3611 10.0748 9.96845 10.1676 9.78264C10.2606 9.5967 10.214 9.43397 10.1443 9.29458C10.0748 9.15519 9.51764 7.78396 9.28555 7.22599C9.05923 6.68299 8.82976 6.75632 8.65864 6.74781C8.49632 6.73971 8.31051 6.73806 8.12471 6.73806C7.93904 6.73806 7.63719 6.80768 7.38176 7.08674C7.12646 7.36565 6.40686 8.03953 6.40686 9.41076C6.40686 10.782 7.4051 12.1067 7.54436 12.2926C7.68361 12.4786 9.50885 15.2924 12.3034 16.499C12.968 16.7863 13.4869 16.9575 13.8916 17.0859C14.559 17.298 15.1661 17.268 15.6462 17.1964C16.1815 17.1163 17.2943 16.5223 17.5267 15.8717C17.7588 15.2209 17.7588 14.6632 17.689 14.5469C17.6195 14.4307 17.4337 14.3611 17.1552 14.2215Z" fill="#4929A3"/>
                                        </svg>
                                    </a>
                                    <a href="https://t.me/ekomov" target="_blank">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                            <path d="M0.415158 11.196L6.28416 14.121C6.51116 14.233 6.77916 14.225 6.99616 14.098L12.2202 11.061L9.05816 13.863C8.89716 14.006 8.80516 14.21 8.80516 14.425V21.25C8.80516 21.97 9.72416 22.273 10.1552 21.701L12.6922 18.328L18.9662 21.901C19.4062 22.154 19.9702 21.9 20.0722 21.397L23.9852 1.897C24.1022 1.311 23.5192 0.832998 22.9772 1.051L0.477158 9.826C-0.126842 10.062 -0.165842 10.907 0.415158 11.196ZM22.2452 2.947L18.8062 20.084L12.8612 16.698C12.5372 16.513 12.1202 16.595 11.8902 16.899L10.3052 19.006V14.762L18.8562 7.186C19.5332 6.587 18.7552 5.522 17.9822 5.976L6.59216 12.598L2.60016 10.609L22.2452 2.947Z" fill="#4929A3"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0">
                                            <rect width="24" height="24" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="card-item">
                        <div class="card-item__img">
                                <? $img = get_field('photo_second'); ?>
                                <img src="<?=$img['url']?>">
                            </div>
                            <div class="card-item__info">                            
                                <p class="header"><? the_field('header_second');?></p>
                                <a href="mailto:<? the_field('mail_second');?>" class="mail">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21.8906 3.5625H2.10938C0.943922 3.5625 0 4.51228 0 5.67188V18.3281C0 19.4946 0.950859 20.4375 2.10938 20.4375H21.8906C23.0463 20.4375 24 19.4986 24 18.3281V5.67188C24 4.51434 23.0598 3.5625 21.8906 3.5625ZM21.5952 4.96875C21.1642 5.39742 13.7476 12.775 13.4916 13.0297C13.0931 13.4281 12.5634 13.6475 12 13.6475C11.4366 13.6475 10.9069 13.4281 10.5071 13.0284C10.3349 12.8571 3.00014 5.56097 2.40478 4.96875H21.5952ZM1.40625 18.0419V5.95898L7.48303 12.0037L1.40625 18.0419ZM2.40567 19.0312L8.48006 12.9955L9.51408 14.0241C10.1781 14.6881 11.061 15.0538 12 15.0538C12.939 15.0538 13.8219 14.6881 14.4846 14.0254L15.5199 12.9955L21.5943 19.0312H2.40567ZM22.5938 18.0419L16.517 12.0037L22.5938 5.95898V18.0419Z" fill="#4929A3"/>
                                    </svg>
                                    <? the_field('mail_second');?>
                                </a>
                                <a href="tel: +78632850350,1151" class="phone"><? the_field('phone_second');?></a>
                            </div>
                        </div>

                        <div class="card-item contacts__soc-links">
                            <p>Наши соц.сети:</p>
                            <? if (function_exists('dynamic_sidebar')) dynamic_sidebar('soc-links-conacts'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <iframe style="border:0; height: 500px; width: 100%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2710.0933319270425!2d39.70273251600453!3d47.21475607916064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b9a8f82b0a17%3A0xae4b6e608bcebd92!2z0KDQvtGB0YLQvtCy0YHQutC40Lkt0L3QsC3QlNC-0L3RgyDQutC-0LvQu9C10LTQtiDRgdCy0Y_Qt9C4INC4INC40L3RhNC-0YDQvNCw0YLQuNC60Lg!5e0!3m2!1sru!2sru!4v1623998582509!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<? get_footer(); ?>