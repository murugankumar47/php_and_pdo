<?php
$server="localhost";
$uname="root";
$pwd="";
$db="task";
$con=mysqli_connect($server,$uname,$pwd,$db)or die('db not connected');
$name=$_GET['name'];
$query="delete from sathish where name=$name";
if($res=mysqli_query($con,$query))
{
    echo"<script>alert('deleted successfully');
    window.location.href='fetupd.php';</script>";
}
else
{
    echo"<script>alert(' not deleted successfully')</script>"; 
}
?>
