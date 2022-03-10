<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{echo 'Not Connected to Server';
}

if(!mysqli_select_db($con,'feedback'))
{echo'database not selected';
}


$Name=$_POST['name'];
$Phone=$_POST['phone'];
$Email=$_POST['email'];
$Message=$_POST['msg'];

$sql="Insert into feedback(name,phone,email,message)
values('$Name','$Phone','$Email','$Message')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else 
{echo 'Inserted';
}
//header("Location:/example/comment.html");


?>