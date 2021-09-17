/*код записи выбранной темы в сессию*/
<?php 
session_start(); 


if (isset($_GET["theme"])) {
	$theme = $_GET["theme"];
	
	if ($theme = "main" | | $theme == "dark") {
		$_SESSION	["theme"] = $theme;
	}

}
?>