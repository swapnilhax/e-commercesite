
<?php 

 session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}


?>

<center><h1><a href="../Edisplay.php">Click here</a> To Display Order Inquiry Detail.
<Br>
<a href="contactdisplay.php">Click here</a> Contact form Detail
</h1>
</center>