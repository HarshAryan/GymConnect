<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="fillfeedback.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback filling form</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Gym connect</a>
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index_user.php">HOME</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <div class="form">
        <form action="fillfeedbackphp.php" method="post">


            <h3>SHARE YOUR EXPERIENCE</h3>
            <h3>(Please give genuine feedback)</h3>
            <div>
                <label> SELECT THE GYM: </label><br>
                <select name="mygym">
                    <option value="Muscle Building"> Muscle Building </option>
                    <option value="Muscle Fitness"> Muscle Fitness </option>
                    <option value="Fittness Freak"> Fittness Freak </option>
                    <option value="Be Healthy"> Be Healthy </option>
                    <option value="Old Gym"> Old Gym </option>
                    <option value="Healthy Life"> Healthy Life </option>
                    <option value="Golden"> Golden </option>
                    <option value="Platinium"> Platinium </option>
                </select><br><br>
            </div>
            <div class="mb-3">
                <label for="feedback" class="form-label">COMMENTS</label>
                <input type="text" class="form-control" placeholder="Type your feedback" name="myfeedback">
            </div>
            <div>
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
</body>

</html>