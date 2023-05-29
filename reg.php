<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body style ="background-color:aqua;">
<main>
    <form action="p.php" method="POST" style="background-color: palegoldenrod;" >
        <h1>REGISTRATION FORM</h1>
        <div>
            <label for="name">NAME:</label>
            <input type="text" name="name" id="name">             
        </div>
        <div>
            <label for="email">E-MAIL:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">PASSWORD:</label>
            <input type="password" name="password" id="password">
        </div>
        
        <div>
            <label for="phonenumber">MOBILE NUMBER:</label>
            <input type="phoneno" name="phoneno" id="phoneno">
        </div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I Agree
                with the
                <a href="#" title="Term of Services">Term of Services</a>
            </label>
        </div>
        <button type="submit">REGISTER</button>
        <footer>Already a Member? <a href="reg.php">LOGIN HERE</a></footer>
    </form>
</main>
</body>
</html>