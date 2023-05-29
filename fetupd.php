<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>front</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>PHONENO</th>
                </thead>
                <tbody>
                    <?php
                    $server="localhost";
                    $uname="root";
                    $pwd="";
                    $db="task";
                    $con=mysqli_connect($server,$uname,$pwd,$db)or die("db not connected");
                    $query="select * from sathish";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_array($res))
                    {
                        $name=$row[0];
                        echo"<tr>";
                        echo"<td>".$row[0]."</td>";
                        echo"<td>".$row[1]."</td>";
                        echo"<td>".$row[2]."</td>";
                        echo"<td>".$row[3]."</td>";
                        echo"<td><a href='update1.php?name=$name'class='btn btn-success'>update</a></td>";
                        echo"<td><a href='DEL.php?name=$name'class='btn btn-success'>delete</a></td>";
                        echo"</tr>";
                    }
                    ?>
                    </tbody>
                    </table>
                    </div>
                    </div>
                    </body>
                    </html>
