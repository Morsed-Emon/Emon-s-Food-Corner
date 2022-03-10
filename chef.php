<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'restaurant'))
{
	echo'database not selected';
}


$username=$_GET['username'];
$Email_Address=$_GET['email'];
$Phone_Number=$_GET['phone'];
$Have_You_any_Experience_of_Such_Job=$_GET['experience'];
$Why_should_we_choose_you=$_GET['quality'];

$sql="Insert into chef(username,email,phone,experience,quality )
values('$username','$Email_Address','$Phone_Number','$Have_You_any_Experience_of_Such_Job','$Why_should_we_choose_you')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}

else 
{
	echo 'Inserted';
}
//header("Location:/example/login.html");


?>