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
//echo "Connected successfully";
$type = "Customer";
$firstname = $_POST["myfirstname"];
$lastname = $_POST["mylastname"];
$phone_no = $_POST["myphone_no"];
$date_of_birth = $_POST["mydob"];
$email = $_POST["myemail"];
$password = $_POST["mypassword"];
$sql = "INSERT INTO userdata  (type,firstname,lastname,phone_no,date_of_birth,email,password) VALUES ('$type', '$firstname', '$lastname', '$phone_no','$date_of_birth','$email','$password')";

if ($conn->query($sql) === TRUE) {
	//echo "\nNew record created successfully";
?>
	<script language="javascript" type="text/javascript">
		alert("Successfully signed up")
	</script>
	<meta HTTP-EQUIV="REFRESH" content="0.1; loginpage.php">
<?php
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>