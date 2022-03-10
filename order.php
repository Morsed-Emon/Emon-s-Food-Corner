<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'online_order'))
{echo'database not selected';
}


$Name=$_GET['username'];
$Phone=$_GET['phone'];
$Email=$_GET['email'];
$Address=$_GET['address'];
$Food=$_GET['food'];
$Quantity=$_GET['quantity'];
$Date=$_GET['date'];
$Payment=$_GET['payment'];

$Account_Number=$_GET['account'];
$Pin_Number=$_GET['pwd'];



$sql="Insert into online_order(name,phone,email,address,food,quantity,date,payment,Account_Number,Pin_Number)
values('$Name','$Phone','$Email','$Address','$Food','$Quantity','$Payment','$Date','$Account_Number','$Pin_Number')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else 
{echo 'Inserted';
}
//header("Location:/example/order.html");


?>