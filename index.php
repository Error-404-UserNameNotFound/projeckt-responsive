<?php
	include("header.php");
	
	if (isset($_GET["Projekte"])) {
		include("pages/Projekte.php");
	}
	elseif (isset($_GET["robbie"])) {
		include("pages/robbie.php");
	}
	elseif (isset($_GET["News"])) {
		include("pages/News.php");
	}
	elseif (isset($_GET["impressum"])) {
		include("pages/impressum.php");
	}
	elseif (isset($_GET["stempeluhr"])) {
		include("pages/stempeluhr.php");
	}
	elseif (isset($_GET["Arduinoinfo"])) {
		include("pages/Arduinoinfo.php");
	}
	elseif (isset($_GET["Login"])) {
		include("pages/Login.php");
	}
	elseif (isset($_GET["register"])) {
		include("pages/register.php");
	}
	elseif (isset($_GET["responsiveprojekt"])) {
		include("pages/responsiveprojekt.php");
	}
	else {
		include("pages/startseite.php");
	}
	include("footer.php");
?>
