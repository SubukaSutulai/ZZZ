var myJSON = JSON.parse(data);
var carImg = document.querySelectorAll(".selection-car");
var sec = 0;
var min = 0;

carImg[0].src = myJSON[0].img; //ссылка на картинку машинки 1 из JSON
carImg[1].src = myJSON[1].img; //ссылка на картинку машинку 2 из JSON
carImg[2].src = myJSON[2].img; //ссылка на картинку машинку 3 из JSON

var car = document.querySelector(".car");// Получаем машину на игровом поле
var selectedCars = {}; //Объект выбранной машины
var timer = document.querySelector("#timer");//Получаем тег с таймером
var isStartGame = false; // Переменная для начала игры
var speedCar = 0; //скорость машинки
var carIsDown = false; //Если едем вниз
var carIsUp = false;//Если едем наверх
//Функция для выбора машинки
function selectCar(count)
{
    carImg[0].className = "selection-car";//Сбрасываем класс если машинки выделены, у всех 3-х
    carImg[1].className = "selection-car";
    carImg[2].className = "selection-car";
    carImg[count].className = "selection-car selected-car"; //Присваевам выделенный класс выбранно   машинке
    document.querySelector(".w-100").disabled=false; //Делаем кнопку активной

    selectedCars.name = myJSON[count].name; //В пустой объект записываем выбранные данные из JSON
    selectedCars.url = myJSON[count].img;

}
//Начала игры
function start()
{
    document.querySelector(".screen").style.display = "none"; //Прячем экран начальный
    document.querySelector("#nameCar").innerHTML = selectedCars.name;//Передаем имя машинки
    document.querySelector(".car").src = selectedCars.url;//Передаем ссфлку на выбранную машинку
    //Слушатели события нажатия клавиш
    document.addEventListener("keydown", keyDownCar, false);//Нажатая клавиша
    document.addEventListener("keyup", keyUpCar, false);//Отпускание клавиш


    isStartGame = true;
    //Отсчет секундомера
    setInterval(function()
    
    {
        

        if(sec>59)
        {
            sec = 0;
            min++;
        }
        if(min<10)
        {
            if(sec<10)
            {
                timer.innerHTML = "0" + min + ":0" + sec;
            }   
            else
            {
                timer.innerHTML = "0" + min + ":" + sec;
            } 
        }
        else
        { if(sec<10)
            {
                timer.innerHTML = min + ":0" + sec;
            }   
            else
            {
                timer.innerHTML = min + ":" + sec;
            } 
        }
        sec++;
    }, 1000);
}
//Функция игровой логики
setInterval(logigGame, 10);
var positionXDoroga = 0;//Положение дороги
function logigGame()
{
    if(isStartGame)
    {
        var doroga = document.querySelector(".game-zone");
        doroga.style.backgroundPositionX = positionXDoroga + "px";
        positionXDoroga-=5;

        //Перемещение авто
        if(carIsUp && carIsDown == false)
        {
            car.style.transform = "translateY(" + speedCar + "px)";
            speedCar-=5;
        }
        if(carIsDown && carIsUp == false)
        {
            car.style.transform = "translateY(" + speedCar + "px)";
            speedCar+=5;
        }

        //Условия не выход за границу игрового поля
        if(speedCar>25)
        {
            speedCar = 25;
        }
        if(speedCar<-250)
        {
            speedCar = -250;
        }
    }

}
//Функции которые запускаются когда жмет клавиши на клавиатуре

function keyDownCar(e)
{

    var keyCode = e.keyCode; // Получаем код нажатых клавиш на клавиатуре
    if(keyCode == 87 || keyCode == 38)
    {
        carIsUp = true;
    // car.style.transform = "translateY(" + speedCar + "px)";
    // speedCar-=15;
    }
    if(keyCode == 83 || keyCode == 40)
    {
        carIsDown = true;
    // car.style.transform = "translateY(" + speedCar + "px)";
    // speedCar+=15;
    }
}
function keyUpCar(e)
{
    var keyCode = e.keyCode; // Получаем код нажатых клавиш на клавиатуре
    if(keyCode == 87 || keyCode == 38)
    {
        carIsUp = false;
    }
    if(keyCode == 83 || keyCode == 40)
    {
        carIsDown = false;
    }
}
