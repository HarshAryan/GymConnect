<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="addinggym.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addinggym</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Gym Connect</a>
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index_admin.php">HOME</a>
                </li>
            </ul>
        </div>
    </nav><br>

    <div class="form">
        <form action="addinggymphp.php" method="post">
            <h3>Enter the details to add a new gym:</h3>
            <div>
                <label> CATEGORY </label><br>
                <select name="mycategory">
                    <option value="Platinium"> Platinium </option>
                    <option value="Gold"> Gold </option>
                    <option value="Silver"> Silver </option>
                </select><br><br>
            </div>
            <div class="mb-3">
                <label for="gym_name" class="form-label">GYM NAME</label>
                <input type="text" class="form-control" placeholder="Gym name" name="mygym_name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">ADDRESS</label>
                <input type="text" class="form-control" placeholder="Address" name="myaddress">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">CITY</label>
                <input type="text" class="form-control" placeholder="City" name="mycity">
            </div>
            <div>
                <label> STATE </label><br>
                <select name="mystate">
                    <option value="Andhra Pradesh"> Andhra Pradesh </option>
                    <option value="Arunachal Pradesh"> Arunachal Pradesh </option>
                    <option value="Assam"> Assam </option>
                    <option value="Bihar"> Bihar </option>
                    <option value="Chhattisgarh"> Chhattisgarh </option>
                    <option value="Goa"> Goa </option>
                    <option value="Gujarat"> Gujarat </option>
                    <option value="Haryana"> Haryana </option>
                    <option value="Himachal Pradesh"> Himachal Pradesh </option>
                    <option value="Jammu and Kashmir"> Jammu and Kashmir </option>
                    <option value="Jharkhand"> Jharkhand </option>
                    <option value="Karnataka"> Karnataka </option>
                    <option value="Kerala"> Kerala </option>
                    <option value="Madhya Pradesh"> Madhya Pradesh </option>
                    <option value="Maharashtra"> Maharashtra </option>
                    <option value="Manipur"> Manipur </option>
                    <option value="Meghalaya"> Meghalaya </option>
                    <option value="Mizoram"> Mizoram </option>
                    <option value="Nagaland"> Nagaland </option>
                    <option value="Odisha"> Odisha </option>
                    <option value="Punjab"> Punjab </option>
                    <option value="Rajasthan"> Rajasthan </option>
                    <option value="Sikkim"> Sikkim </option>
                    <option value="Tamil Nadu"> Tamil Nadu </option>
                    <option value="Telangana"> Telangana </option>
                    <option value="Tripura"> Tripura </option>
                    <option value="Uttar Pradesh"> Uttar Pradesh </option>
                    <option value="Uttarakhand"> Uttarakhand </option>
                    <option value="West Bengal"> West Bengal </option>
                </select><br><br>
            </div>
            <div class="mb-3">
                <label for="phone_no" class="form-label">PHONE NO.</label>
                <input type="text" class="form-control" placeholder="Phone no" name="myphone_no">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Add ">
            </div>

        </form>

    </div>
</body>

</html>