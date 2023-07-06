<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="signup.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpg" type="image/jpeg">
    <title>signup_page</title>
</head>

<body>
    <div class="form">
        <form action="signupphp.php" method="post">
            <h2>Gym Connect</h2>
            <h3>Enter the details:</h3>
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name:</label>
                <input type="text" class="form-control" placeholder="Your first name" name="myfirstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name:</label>
                <input type="text" class="form-control" placeholder="Your last name" name="mylastname">
            </div>
            <div class="mb-3">
                <label for="phone_no" class="form-label">Phone No.:</label>
                <input type="text" class="form-control" placeholder="Your phone no" name="myphone_no">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth:</label>
                <input type="date" class="form-control" placeholder="Your DOB" name="mydob">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" placeholder="Your email" name="myemail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" placeholder="Password" name="mypassword">
            </div>
            <div>
                <a href="aftersignup.html">
                    <input class="btn btn-primary" type="submit" value="SignUp">
                </a>
            </div>
        </form>
    </div>
</body>

</html>