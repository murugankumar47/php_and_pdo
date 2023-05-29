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
<body style ="background-color: aqua;">
<main>
<form action="fetup.php" method="POST" style = "background-color: palegoldenrod;">
       
        <h1>REGISTRATION FORM</h1>
        <div>
            <label for="firstname">NAME:</label>
            <input type="text" name="name" id="firstname">
        </div>
        
        <div>
            <label Sfor="password">PASSWORD:</label>
            <input type="password" name="password" id="password">
        </div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I Agree
                with the
                <a href="#" title="Term of Services">Term of Services</a>
            </label>
        </div>
        <button type="submit">REGISTER</button>
    
    </form>
</main>
</body>
</html>