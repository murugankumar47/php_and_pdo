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
                
                <tbody>
                    <?php
                    $_SERVER="localhost";
                    $uname="root";
                    $pwd="";
                    $db="task";
                    $con=mysqli_connect($_SERVER,$uname,$pwd,$db)or die("db not connected");
                    $name=$_GET['name'];
                    $query="select * from sathish where name=$name";
                    $res=mysqli_query($con,$query);
                    if($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <form method="post"action="upt.php">
                            <label class="form-label">name</label>
                            <input type="text"class="form-control"name="name"value="<?php echo$row[1];?>">
                            <label class="form-label">email</label>
                            <input type="text"class="form-control"name="email"value="<?php echo$row[2];?>">
                            <label class="form-label">email</label>
                            <input type="text"class="form-control"password="password"value="<?php echo$row[3];?>">
                            <label class="form-label">password</label>
                            <input type="text"class="form-control"phoneno="phoneno"value="<?php echo$row[4];?>">
                            <label class="form-label">phoneno</label>
                            <input type="submit"name="update"class="btn btn-primary"value="update"> 
                           <!--<input type="submit"name="download"class="btn btn-primary"value="download">
                            <?php
                    }
                    ?>
                    </form>
                </div>
                </div>
                </body>
                </html>
                    