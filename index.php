<?php

	include("views/header.php");
	
	if ($_GET['page'] ==  'tips.php' ){
		include("views/tips.php");
	}
	else if ($_GET['page'] ==  'about.php' ){
		include("views/about.php");
	}
	else{
	include("views/ocr.php");
	}

	include("views/footer.php");

?>
