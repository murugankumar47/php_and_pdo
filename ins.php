<?php
$server="localhost";
$uname="root";
$pwd="";
$db="task";
$con=mysqli_connect($_server,$uname,$pwd,$db)or die("db not connected");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno '];
$query="insert into sathish values('$name','$email','$password','$phoneno')";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('data saved');
	window.location.href='front.php';
	</script>";
}
else
{
	echo"<script>alert('data not saved');
	window.location.href='front.php';
	</script>";
}
?>