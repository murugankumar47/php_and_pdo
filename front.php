<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>front</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<form method="post"action="ins.php">
		<label for="name">name</label>
		<input type="text"id="name"name="name"><br>
		<label for="email">email</label>
		<input type="text"id="email"name="email"><br>
		<label for="password">password</label>
		<input type="text"id="password"name="password"><br>
		<label for="phoneno">phoneno</label>
		<input type="text"id="phoneno"name="phoneno"><br>
		<button type="submit"class="btn btn-primary">submit</button>
	</form>
</body>
</html>