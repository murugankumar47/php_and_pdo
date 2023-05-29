<?php
$server="localhost";
$username="root";
$pwd="";
$db="task";
$con=mysqli_connect($server,$username,$pwd,$db) or die("db not conncted");
$name=$_POST['name'];
$password=$_POST['password'];
$query="insert into sathish values('$name','$password')";
if($res=mysqli_query($con,$query))
{
    echo"<script> alert<'data saved');
    window.location.href='fetupd.php';
    </script>";
}
else
{
    echo"<script> alert<'data unsaved');
    window.location.href='fetupd.php';
    </script>";
}
?>