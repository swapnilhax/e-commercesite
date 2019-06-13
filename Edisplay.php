<?php

session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location: SJlogin/login.php");
	exit;
}

include('connection.php');
$sql=mysql_query("select * from inquiry");
while($row=mysql_fetch_array($sql))
	

{
?>
<html>
<style>

</style>
<center>
<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>MobileNo</th>
<th>Quantity</th>
</tr>
<tr>
<td>"<?php
echo $row['ID'];
?>"</td>

<td>"<?php
echo $row['Name'];
?>"</td>
<td>"<?php
echo $row['Email'];
?>"</td>
<td>"<?php
echo $row['MobileNo'];
?>"</td>
<td>"<?php
echo $row['Quantity'];
?>"</td>
</tr>
</table>
</center>
<?php
}
?>
</body>
<center><h1><a href="index.html">Click here</a> Logout And Goto Main Home Page
<br>
<br>
<br>
</html>