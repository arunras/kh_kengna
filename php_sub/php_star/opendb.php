<?php
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to the database!');
	mysql_select_db($dbname);
	mysql_query('SET NAMES utf8');
?>