// Максимальная длина вводимого текста
maxLength = 100;

/**
 * Собираем переменные:
 * - Поле с текстом
 * - Сколько символов уже введено
 * - Сколько максимум символов
 */
const textInput = document.querySelector('.textarea');
const aval = document.querySelector('.avalible');
const maxL = document.querySelector('.maxlength');

/**
 * В начальное значение введённых
 * символов вставляем кол-во, взятое из поля с текстом
 * 
 * В максимальное поле - вставляем максимальное значение
 * 
 * Для поля с текстом выставляем атрибут с максимальной длиной символов
 */
aval.innerHTML = maxLength-textInput.value.length; 
maxL.innerHTML = maxLength;
textInput.setAttribute('maxlength', maxLength);


/**
 * Слушаем поле с тектом и отслеживаем каждый введённый символ
 * 
 * Если символов более 100, прекращай ввод и уведомляем пользователя
 * Иначе продолжаем вводить
 * 
 * Каждый введёный новый элемент, отслеживается и подставляется в поле - "возможно ещё ввести символов"
 */
textInput.addEventListener('input', e => {
    if(e.target.value.length >= maxLength) {
        textInput.style.border = "1px solid red";
        alert("Достигнут лимит по длине текста");
    } else {
        textInput.style.border = "none";
    }

    aval.innerHTML = maxLength-e.target.value.length;
});