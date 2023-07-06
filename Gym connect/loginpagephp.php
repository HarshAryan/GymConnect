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
session_start();
$email = $_POST["myemail"];
$password = $_POST["mypassword"];
$type = $_POST["mytype"];

$sql = "select id,firstname,lastname from userdata where email ='$email' and password ='$password' and type='$type'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {
    $_SESSION['id'] = $row["id"];
    if ($type == "Customer") {
?>
      <meta HTTP-EQUIV="REFRESH" content="0.1; index_user.php">
    <?php
    } else if ($type == "Admin") {
    ?>
      <meta HTTP-EQUIV="REFRESH" content="0.1; index_admin.php">
    <?php
    } else {
    ?>
      <meta HTTP-EQUIV="REFRESH" content="0.1; index_gym_management.php">
  <?php
    }
  }
} else {
  ?>
  <script language="javascript" type="text/javascript">
    alert("Invalid user-id or password")
  </script>
  <meta HTTP-EQUIV="REFRESH" content="0.1; loginpage.php">
<?php
}
$conn->close();
?>