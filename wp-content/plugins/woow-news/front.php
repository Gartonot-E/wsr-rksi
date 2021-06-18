<?
/**
 * Функция вывода на хук woow_news
 */
function view_woow_news() { 
?>    
    <div class="woow-news">
        <div class="container">
            <p><?=get_option('_news_string')?></p>
        </div>
    </div>
<?
}

// Образаемся к хуку
add_action('woow_news', 'view_woow_news', 20);