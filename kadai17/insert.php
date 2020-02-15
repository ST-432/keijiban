<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","");
$pdo -> exec("insert into 4each_keijiban(handlename,title,comments)
	values('".$_POST['ind_handlename']."','".$_POST['ind_title']."','".$POST_['ind_comments']."');");

	header("Location:http://localhost/kadai17/index.php");
	?>