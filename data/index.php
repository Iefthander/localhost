<!-- Настройки php для смены темы сайта -->
<?php 
session_start();
?>
<html>
<?php
	if (!isset($_SESSION["theme"])) {
		$_SESSION["theme"] = "main";
	}
	?>

	<head>
		<!-- подключение файлов стилей -->
	
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
		<!-- Меню сайта -->
		<header>
		<div class="hor-menu">
				<ul>
					<li><a href="https://example.com"><b> Поддержка<b></a></li>
					<li><a href="https://example.com"><b> Доставка<b></a></li>
					<li><a href="https://example.com"><b> Контакты<b></a></li>
					<li><a href="https://example.com"><b> Главная<b></a></li>
				</ul>
			</div>
		<!-- Лого сайта в виде фото -->
			<div class="logo">
				<p align="left"><img src="\img\giro.png" class="logo-img"></p>
			</div>
			<div class="hor-menu"></div>
			</header>
		
	</head>
	
	
	<body>
	<!-- Блок со слайдером -->
	<section class="cr-container">				
    <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked />
    <label for="select-img-1" class="cr-label-img-1"></label>
 
    <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
    <label for="select-img-2" class="cr-label-img-2"></label>
 
    <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
    <label for="select-img-3" class="cr-label-img-3"></label>
 
    <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
    <label for="select-img-4" class="cr-label-img-4"></label>
 
    <div class="clr"></div>	
    <div class="cr-bgimg">
		<!-- Блок со слайсами разметки слайдера -->
        <div>
            <span>Slice 1 - Image 1</span>
            <span>Slice 1 - Image 2</span>
            <span>Slice 1 - Image 3</span>
            <span>Slice 1 - Image 4</span>
        </div>
        <div>
            <span>Slice 2 - Image 1</span>
            <span>Slice 2 - Image 2</span>
            <span>Slice 2 - Image 3</span>
            <span>Slice 2 - Image 4</span>
        </div>
        <div>
            <span>Slice 3 - Image 1</span>
            <span>Slice 3 - Image 2</span>
            <span>Slice 3 - Image 3</span>
            <span>Slice 3 - Image 4</span>
        </div>
        <div>
            <span>Slice 4 - Image 1</span>
            <span>Slice 4 - Image 2</span>
            <span>Slice 4 - Image 3</span>
            <span>Slice 4 - Image 4</span>
        </div>
    </div>
	<!-- Содержимое слайдера -->
    <div class="cr-titles">
        <h3><span>Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</span></h3>
        <h3><span>Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</span></h3>
        <h3><span>Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</span></h3>
        <h3><span>Гарантия действует в течении 3 лет!</span></h3>
    </div>
</section>
<body>
<!-- Перевод сайта в темную тему -->
<div class="theme-button" id="theme-button">Сменить тему</div>
<main class="main">
				<article class="main_content">
					<p><!-- lorem120 --></p>
				</article>
			</main>
			<script src="themes.js"></script>
<!-- Блок с товарами -->
<h1>    Товары</h1>
<!-- Фильтр товаров -->
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Все</button>
  <button class="btn" onclick="filterSelection('cars')"> Сигвеи</button>
  <button class="btn" onclick="filterSelection('animals')"> Самокаты</button>
  <button class="btn" onclick="filterSelection('fruits')"> Гироскутеры</button>
</div>
<!-- Название, цена и ссылки на фото товаров -->
<div class="container">
  <div class="filterDiv cars"><a href="https://ibb.co/dk9WJpq"> Minirobot Mini PRO 36V Белый<br><a> 15990 рублей</div>
  <div class="filterDiv cars"><a href="https://ibb.co/TMH4zM0"> Ninebot Mini<br><a> 22900 рублей</div>
  <div class="filterDiv cars"><a href="https://ibb.co/RY6pcnk">Hili E+<br><a> 39900 рублей</div>
  <div class="filterDiv animals"><a href="https://ibb.co/5vdH8k2">Yamato PES MINI<br><a> 15900 рублей</div>
  <div class="filterDiv animals"><a href="https://ibb.co/Kx6dpQX">KUGOO S2 (Jilong)<br><a> 14900 рублей</div>
  <div class="filterDiv fruits"><a href="https://ibb.co/9YdhgCN">Smart Balance 6.5" Ver. 1<br><a>  8990 рублей</div>
  <div class="filterDiv fruits"><a href="https://ibb.co/ypZpjrH">KIWANO KO-X ES03<br><a> 18900 рублей</div>
</div>
<!-- Скрипт фильтра товаров -->
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<!-- Блок с особенностями -->
<h1 align="center"><big><big><b><br> -Особенности- <b><h2><big><big><big><big> <style type="text/css">
   h1 { 
    font-size: 120%; 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
   }
 </style>
	<div class="os">
	<!-- Фотографии и особенности товара -->
	<img align="left" src="\img\elsam.png" class="os-img">
	<span class="os-text"><small><small><small><small><small><small><br>Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.</span>
	</div>
	<div class="os">
	<img align="left" src="\img\giroskuter-smart-balance-off-road-s-prilozheniem-app-samobalans-cherniy-500x500-1000x1000.png" class="os-img">
	<span class="os-text"><small><small><small>Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.

Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.

Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.</span>
	</div>
<div class="os">
	<img align="left" src="\img\segway-ninebot-2-500x500.png" class="os-img">
	<span class="os-text"><br><br>Сигвей - средство передвижения для одного человека, которое держит равновесие с помощью специальной автобалансирующей системы. Это своеобразный электрический скутер, самостоятельно удерживающий равновесие. Сигвеи бесшумны в работе, не загрязняют окружающую среду, работают на электрической энергии, накопленной батареей аккумуляторов.</span>
	</div>
	<!-- Блок с персоналом компании -->
<div class="personal"><h1 align="center"><big><b> -Персонал- <b><h2>
<p align="center"><small><small><small><small>Иванов Иван Иванович – квалифицированный специалист сервисного центра My Gyro.<br><br>

Пупкин Василий Васильевич – старший консультант My Gyro.<br><br>

Захаров Андрей Борисович – менеджер-консультант My Gyro.</p> </div>
<div class="personal"><h1 align="center"><b><big><big><big> -Бренды- <b><h2>
<p align="center"><small><small><small><small>Smart;
Wmotion;
Ninebot;
Segway.</p></div>

	</body>
	<!-- Блок с описанием трудоустройства -->
	<div class="work">
	<h1 align="center"><big><big><big><b> -Трудоустройство- <b><h2>
	<img align="center" src="\img\personal.png" class="work-img">
	<span class="os-text"><br><br><small><small><small><small><small>Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</span>
	</div>
	<div class="onas">
	<!-- Блок с описанием компании -->
	<h1 align="center"><b><big><big><big> -О нас- <b><h2>
	<span class="onas-text"><small><small><small><small><small><b>Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.<br>Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</b></span>
	</div>
	<div class="forma">
	<!-- Блок с подпиской на рассылку -->
	<div class="pod">
	<h1 align="center"><b><big><big><big> -Подписаться- <b><h2> </div>
				<!-- Формочка для заполнения для подписки -->
				<input type="text" required placeholder="Ваше имя">
				<input type="text" required placeholder="E-mail">
				<!-- Фото подписки -->
				<p align="center"><img src="\img\50-502293_blue-subscribe-png-subscribe-button-png-blue-transparent.png" class="form-img"></p>
			</div>
<!-- Блок с телефоном компании -->
<div class="number">
				<!-- Сам номер -->
				<p align="center"><big> <br><b><small><small><small><small><span> Телефон: +7 351 111 22 33 <big><big></span> <b><big> <p>
				<!-- Фото значка вызова по номеру компании -->
				<p align="left"><img src="\img\kisspng-telephone-call-symbol-smartphone-ringing-phone-5acb8cf91a1852.6270689415232893371069.png" class="number-img"></p>
			</div>
			 <div style="height:0px"></div>
<!-- Кнопка поднятия вверх -->
   <a href="#" title="Вернуться к началу страницы" class="topNubex"><img src="\img\back.png" class="img-top"></a>
</html>