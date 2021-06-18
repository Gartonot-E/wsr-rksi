/**
 * Скрипт для добавления класса у активной ссылки
 */
window.addEventListener('load', () => {
    /**
     * Function for active link
     */
    document.querySelectorAll('header nav .menu ul li a').forEach( e => {
        if(e.href == window.location.href) e.parentNode.classList.add('active');
    }); 

    /**
     * Function gamburger
     */

    (() => {
        const gamb = document.querySelector('.gamburger');
        const topNav = document.querySelector('header nav .menu ul');
        gamb.addEventListener('click', () => { 
            gamb.classList.toggle('active'); 
            topNav.classList.toggle('active');
        });
    })();

});


