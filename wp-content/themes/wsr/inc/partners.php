<?
/**
 *  Get post page partners
 */
function f_get_post_partners() {
    ?>
    
    <section class="partners">
        <div class="content">        

            <a class="block" href="https://rostov.rt.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/rt.png">
            </a>

            <a class="block" href="https://rksi.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/rksi.png">
            </a>

            <a class="block" href="https://www.centrinvest.ru/ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/centr.png">
            </a>

            <a class="block" href="https://rnds.pro/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/zabrodin.png">
            </a>

            <a class="block" href="http://mts.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/mts.png">
            </a>

            <a class="block" href="http://dontr.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/don.png">
            </a>

            <a class="block" href="https://gendalf.ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/pendalf.png">
            </a>

            <a class="block" href="https://www.sebbia.ru/ru" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/sebbia.png">
            </a>

            <a class="block" href="https://www.fastreport.ru/ru/" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/fr.png">
            </a>

            <a class="block" href="https://www.accenture.com/ru-ru" target="_blank">
                <img src="<?=get_template_directory_uri()?>/assets/images/partners/accenture.png">
            </a>
            
        </div>
    </section>
    
    <?
}

add_action('get_post_partners', 'f_get_post_partners');