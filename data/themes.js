/*скрипт с изменением темы сайта*/
const btn = document.getElementById( "theme-button");
const link = document.getElementById( "theme-link");

btn.addEventListener("click", ChangeTheme);
/*функция изменения темы сайта*/
function ChangeTheme(){
	let mainTheme = "main.css"; /*основная тема*/
	let darkTheme = "dark.css"; /*заменяемая тема*/
	let currTheme = link.getAttribute("href");
	let theme;
	
	if (currTheme === mainTheme) {
		currTheme = darkTheme;
		theme = "dark";
	} else {
		currTheme = mainTheme;
		theme = "main";
	}
	
	link.setAttribute( "href", currTheme);
	
	Save(theme);
}
/*функция сохранения темы*/
function Save(theme) {
	let Request = new XMLHttpRequest();
	Reequest.open("GET", "themes.php?theme=" + theme, true);
	Request.send();
}