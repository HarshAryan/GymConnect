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
$category = $_POST["mycategory"];
$gym_name = $_POST["mygym_name"];
$address = $_POST["myaddress"];
$city = $_POST["mycity"];
$state = $_POST["mystate"];
$phone_no = $_POST["myphone_no"];
$sql = "INSERT INTO gym  (category,gym_name,address,city,state,phone_no) VALUES ('$category', '$gym_name', '$address', '$city','$state','$phone_no')";

if ($conn->query($sql) === TRUE) {
	//echo "\nNew record created successfully";
?>
	<script language="javascript" type="text/javascript">
		alert("New Gym Successfully Added")
	</script>
	<meta HTTP-EQUIV="REFRESH" content="0.1; addinggym.php">
<?php
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>