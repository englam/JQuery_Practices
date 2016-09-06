


<?php

	$name = $_REQUEST["name"];
	$surname = $_REQUEST["surname"];
	$name = utf8_encode($name);
	$surname = utf8_encode($surname);

	$a = "<p>Tab Conetns Test By action_2.php </p>";
	$a .= "Name:" .$name. "</br>";
	$a .= "Surname:" .$surname. "</br>";
	$a = utf8_encode($a);
	echo ($a);



?>