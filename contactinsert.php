<?php
include("connection.php");
if(isset($_POST['feedback']))
{
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Message=$_POST['Message'];
if(empty($Name)||empty($Message))
{
echo "fields are empty";
}				
else
{
$query=mysql_query("insert into feedback values('$ID','$Name','$Email','$Message')");
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
