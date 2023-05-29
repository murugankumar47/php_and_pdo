<?php
$server="localhost";
$uname="root";
$pwd="";
$db="task";
$con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];
$query="update sathish set 'email='$email',password='$password',phoneno='$phoneno'where name=$name";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('update successfully')</script>";
}
else
{
    echo"<script>alert(' not update successfully')</script>"; 
}
?>
