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


$sql = 'SELECT sno,gym_name,feedback,date_of_feedback FROM feedback';
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
  <link href="viewreviews.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>searchfeedback</title>
</head>

<body>

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
        <form action="searchboxgymfilterphp.php" method="post">
          <input type="textbox" placeholder="Enter gym name or date" name="str" required />
          <input type="submit" name="submit" value="Search" />
        </form>
      </div>
    </nav><br>
    </form><br>
    <table border="1" cellspacing="0" class="table table-hover">
      <thead>
        <tr>
          <th scope="col">S_No.</th>
          <th scope="col">GYM NAME</th>
          <th scope="col">FEEDBACK</th>
          <th scope="col">DATE OF FEEDBACK</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_POST['submit'])) {
          $str = mysqli_real_escape_string($conn, $_POST['str']);
          $sql = "SELECT sno,gym_name,feedback,date_of_feedback FROM feedback 
                where gym_name like '%$str%' or date_of_feedback like '%$str%'";
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
              echo "{$row['gym_name']}";
              echo "</td>";
              echo "<td>";
              echo "{$row['feedback']}";
              echo "</td>";
              echo "<td>";
              echo "{$row['date_of_feedback']}";
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "No data found";
          }
        }
        ?>
      </tbody>
    </table>


  </body>

</html>