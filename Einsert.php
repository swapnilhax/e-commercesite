<?php
include("connection.php");
if(isset($_POST['inquiry']))
{
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$MobileNo=$_POST['MobileNo'];
$Quantity=$_POST['Quantity'];
if(empty($Name))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into inquiry values('$ID','$Name','$Email','$MobileNo','$Quantity')");
if($query)
{
header("Location:index.html");
}
else
{
echo "failed";
}
}
}
?>
