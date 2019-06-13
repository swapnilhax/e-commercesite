
<?php 

 session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

include('../connection.php');
$sql=mysql_query("select * from feedback");
while($row=mysql_fetch_array($sql))
	

{
?>
<html>
<style>
body { background-image:url("images1/book3.jpg");
</style>
<center>
<table border='1'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Message</th>
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
echo $row['Message'];
?>"</td>
</tr>
</table>
</center>
<?php
}
?>
</body>
Congratulation! You have logged into password protected page. <a href="logout.php">Click here</a> to Logout.
<br>
<br>
<br>
</html>