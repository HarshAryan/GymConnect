<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="loginpage.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg" type="image/jpeg">
    <title>login_page</title>
</head>

<body>
    
    <div class="form">
        <form action="loginpagephp.php" method="post">
            <h2>Gym Connect</h2>
            <h3>Enter the details:</h3>
            <div class="mb-3">
                <label for="Email" class="form-label">Email-id:</label>
                <input type="text" class="form-control" placeholder="Email-id" name="myemail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Password" name="mypassword">
            </div>
            <div>
                <label> Login as: </label><br>
                <select name="mytype">
                    <option value="Admin"> Admin </option>
                    <option value="Gym management"> Gym Management </option>
                    <option value="Customer"> Customer </option>
                </select><br><br>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Sign In">
            </div>
        </form>
    </div>
    <div class="button">
        <a href="signup.php"> or SignUp</a>
    </div>
</body>
</html>
