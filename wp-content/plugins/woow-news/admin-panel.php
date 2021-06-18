<?
// Сохраняем значение из поля в глобальный массив переменных
if($_POST['submit']) {
    update_site_option('_news_string', $_POST['text']);
}



/**
 * Функция для вывода формы в админке
 */
function woow_news_setings() {
    ?>
    <!-- Заголовок -->
    <h1><?=get_admin_page_title()?></h1>
    <p>Напишите текст в поле, для отображения уведомления в шапке</p>
    
    <!-- Форма -->
    <form method="POST">
        <textarea class="textarea" style="width: 40%; resize: none; padding: 20px;" name="text" rows="5"><?=@get_option('_news_string')?></textarea>
        <p class="sizeText"><span class="avalible">0</span>/<span class="maxlength">0</span></p>
        <? submit_button(); ?>
    </form>

    <!-- Подключаем скрипт -->
    <script src="<?=plugins_url();?>/woow-news/script.js"></script>
    <?
}

// Добавляем меню в админку через хук admin_menu
add_action('admin_menu', function () {
    add_menu_page('Woow news [настройки]', 'Woow news', 'manage_options', 'woow-news-setigns', 'woow_news_setings', '', 4);
});