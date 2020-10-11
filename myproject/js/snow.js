//создание снежинки
//// // = document.createElement('div');

////.classList.add('snowflake');

////.style.left = Math.round(Math.random()*100) + '%';

//добавление снежинки на страницу (конец документа);
 
//создаем интервал создания снежинок
// создаем ограничение по количеству снежинок
//$counter = 0;
//создаем свою функцию генерации снежинок
//function createFlake(){
    //// // = document.createElement('div');

        //flake.classList.add('snowflake');

        //.style.left = Math.round(Math.random()*100) + '%';
        //добавляем обработчик событий
        //.addEventListener('click', function() {
            //.remove();
            //createFlake();
        //});

        //document.body.appendChild(//);
//}

// flakeInterval = setInterval (function()
//{
    ////if (counter<=10)
    //{ createFlake();
        //counter++;

    //}else{
        //clearInterval(flakeInterval);
    //}
   

//},2000)

let countFlake = 0;
let countFlakeKill = 0;

//создаем массив различных изображений для снежинок

let flakesArr = [
    "f1.png",
    "f2.png",
    "f3.png",
    "f4.png",
    "f5.png",
    "f6.png",
    "f7.png",
    "f8.png",
    "f9.png",
    "f10.png"
];

// создаем окно для подсчета удаленных снежинок
// создаем окно для подсчета сбитых снежинок

let windowCountFlakeKill = document.createElement('div');

// создаем заголовок и текст для вставки в окно

let flakeKillText = document.createElement('h4');
flakeKillText.textContent = "Уничтожено снежинок";
let flakeKillCount = document.createElement('p');
flakeKillCount.textContent = "0";

// задаем размеры и стили окна

windowCountFlakeKill.classList.add('windowCountFlakeKill');

// выводим окно на страницу с заголовком и счетчиком

document.body.appendChild(windowCountFlakeKill);
windowCountFlakeKill.prepend(flakeKillText); //заголовок
windowCountFlakeKill.append(flakeKillCount); //счетчик

//меняем рандомно размеры элемента
function SizeRandom(min, max) {
    return Math.round(Math.random() * (max - min + 1)) + min + 'px';
}

// функция генерации снежинок
function createFlake() {
    // 1. Создать элемент
    let flake = document.createElement('div');

    // 2. Изменяем элемент
    flake.classList.add('snowflake');

    //вставляем рандомно из массива ссылки на картинки 
    let flakesWay = flakesArr[Math.round(Math.random() * (flakesArr.length - 1))];
    flake.style.background = `url('img/flakesArr/${flakesWay}') center center / contain no-repeat`;

    //вывод элемента в различных частях экрана

    flake.style.left = Math.round(Math.random()*100) + '%';

    //генерируем снежинки рандомного размера
    let flakeWidht = flake.style.width = SizeRandom(25, 60);
    flake.style.height = flakeWidht;

    // $().click(function(){}) обработчик событий при клике на снежинку

    flake.addEventListener('click', function() {
        flake.remove(); // или this.remove();
        countFlakeKill++;
        //вывод удаленных элеметов на экран
        flakeKillCount.innerText = countFlakeKill;
        // рекурсия вызов повторной функции внутри себя
        createFlake();
    });

    // 3. вывести элемент на страницу
    document.body.appendChild(flake);
}

let flakeInterval = setInterval(function() {
    //накладываем ограничения на количество снежинок
    if (countFlake < 10) {
        createFlake();
        countFlake++;
    } else {
        clearInterval(flakeInterval);
    }
    
}, 2352)