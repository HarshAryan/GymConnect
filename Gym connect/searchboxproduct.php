<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "gym_connect");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = 'SELECT itemname,description,price FROM products';
$result = $conn->query($sql);
if (!$result) {
  die('Could not get data: ' . mysql_error());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="products_av.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>productnames</title>
</head>

<body>

  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Gym Connect</a>
        <div class="mr-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index_user.php">HOME</a>
          </li>
        </ul>
        <form action="searchboxproduct.php" method="post">
          <input type="textbox" placeholder="Search product name" name="str" required />
          <input type="submit" name="submit" value="Search" />
        </form>
      </div>
    </nav><br>

    <form action="ordereditems.php" method="post">
      <table border="1" cellspacing="0" class="table table-hover">
        <thead>

          <tr>
            <th scope="col">S_No.</th>
            <th scope="col">PRODUCT NAME</th>
            <th scope="col">DESCRIPTION</th>
            <th scope="col">PRICE</th>
            <th scope="col">SELECTION</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_POST['submit'])) {
            $str = mysqli_real_escape_string($conn, $_POST['str']);
            $sql = "SELECT id, itemname,description,price FROM products where itemname like '%$str%'";
            $res = mysqli_query($conn, $sql);
            if (mysqli_num_rows($res) > 0) {
              $count = 0;
              while ($row = mysqli_fetch_assoc($res)) {
                $count = $count + 1;
                echo "<tr> ";
                echo "<td>";
                echo "{$count}";
                echo "</td>";
                echo "<td>";
                echo "{$row['itemname']}";
                echo "</td>";
                echo "<td>";
                echo "{$row['description']}";
                echo "</td>";
                echo "<td>";
                echo "{$row['price']}";
                echo "</td>";
                echo "</td>";
                echo "<td><input type='checkbox' name='checkbox_$count'></td>";
                echo "</tr>";
                echo "</tr>";
              }
            } else {
              echo "No data found";
            }
          }
          ?>
        </tbody>
      </table>
      <div>
        <br>
        <a href="ordereditems.php">
          <input type="submit" class="btn btn-outline-dark" id="sub"></input>
        </a>
      </div>
    </form>

  </body>

</html>