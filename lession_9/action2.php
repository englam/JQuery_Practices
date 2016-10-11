


<?php

	#$term = $_REQUEST["term"];
	#$term = utf8_decode ($term);

	$bd = mysqli_connect("localhost", "englam", "englam")
		or die("無法建立資料連接: " . mysqli_connect_error());

	echo "Successful </br>" ;

	mysqli_select_db($bd , "jquery_test")
      or die("開啟資料庫失敗: " . mysqli_error($link));
    echo "Successful </br>";

    #$sql = "SELECT * FROM `books` WHERE 1";

    #SELECT * FROM `books` WHERE id LIKE '1' 

    $sql = "SELECT * FROM `books` WHERE id LIKE '1' ";

    $result = mysqli_query($bd, $sql);

    echo "test".mysqli_num_rows($result)."</br>";

	mysqli_close($bd);

	
	#$bd = mysqli_connect("localhost", "englam", "englam")

/*		
	$ret = mysql_select_db("jquery_test" , $bd);

	$query = sprintf("SELECT * FROM books WHERE title LIKE '%%s%%'",
			mysql_real_escape_string($term));

	$result = mysql_query($query);

	if ($result)
	{

		while ($row = mysql_fetch_assoc($result))
		{
			echo ("<li>" . utf8_encode($row["title"]) . "</li>");
		}

		mysql_free_result($result);
	}

	mysql_close($bd);
*/
?>