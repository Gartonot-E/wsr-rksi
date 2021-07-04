<?

// Добавляем в тему поодержку меню
register_nav_menus();


// Добавляем в тему поодержку виджеты
register_sidebar(array(
    'name' => 'Соц.сети',
    'id'   => 'soc-links'
));

// Добавляем свой виджет для соц.сетей
register_sidebar(array(
    'name' => 'Соц.сети | контакты',
    'id'   => 'soc-links-conacts'
));