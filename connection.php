<?php
$host_name="localhost";
$user="root";
$password="";
$db="test";
$conn=mysql_connect($host_name,$user,$password)or die("could not connect".mysql_error());
mysql_select_db($db,$conn);
?>