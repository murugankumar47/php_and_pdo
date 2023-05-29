<?php
$server="localhost";
$username="root";
$pwd="";
$db="task";
$con=mysqli_connect($server,$username,$pwd,$db) or die("db not conncted");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$phoneno=$_POST['phoneno'];
$query="insert into sathish values('$name','$email','$password','$phoneno')";
if($res=mysqli_query($con,$query))
{
    echo"<script> alert<'data saved');
    window.location.href='reg.php';
    </script>";
}
else
{
    echo"<script> alert<'data unsaved');
    window.location.href='reg.php';
    </script>";
}
?>