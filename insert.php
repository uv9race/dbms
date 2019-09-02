<?php
$sid= $_POST['sid'];
$name=$_POST['name'];
$address=$_POST['address'];
$dbconn=mysqli_connect('localhost','root','','abcd');
$sql="insert into student(sid,name,address) values('$sid','$name','$address')";
$run=mysqli_query($dbconn,$sql);
if(!$run)
{
	echo "error";
}
   else
{
	echo "row inserted";
}
?>