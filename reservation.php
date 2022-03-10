<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'feedback'))
{echo'database not selected';
}


$Name=$_POST['name'];
$Mobile=$_POST['mobile'];
$Total_Customers=$_POST['customer'];
$Date=$_POST['date'];
$Time=$_POST['time'];

$sql="Insert into reservation(Name,Mobile,Total_Customers,Date,Time)
values('$Name','$Mobile','$Total_Customers','$Date','$Time')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else 
{echo 'Inserted';
}
//header("Location:/example/comment.html");


?>