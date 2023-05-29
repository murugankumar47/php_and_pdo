<?php
$uname=$_POST['name'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","task") or die('db not connected');
			$query="select * from sathish where REGISTERNUMBER=$uname";
			$res=mysqli_query($con,$query);
			if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
			{
			    if($row['password']==$password)
			    {
		        	echo"<script>alert('LOGIN SUCESS');window.location.href='reg.php';<\script>";
			    }
			    else
			    {
			    echo"<script>alert('LOGIN UNSUCESS');window.location.href='reg.php';<\script>";
			    }
			}
			else
		    {
			echo"<script>alert('LOGIN UNSUCESS');window.location.href='reg.php';<\script>";
			}
?>