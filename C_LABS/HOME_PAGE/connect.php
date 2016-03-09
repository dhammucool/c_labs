<?php
$host="localhost";
$uname="root";
$pwd="";
$dbname="c_labs";
$link=@mysql_connect($host,$uname,$pwd)
or die("connection error");

mysql_select_db($dbname)
or die("db connection failed");

?>
