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
$gym = $_POST["mygym"];
$feedback = $_POST["myfeedback"];
$timezone = date("Y-m-d");
$sql = "INSERT INTO feedback (gym_name,feedback,date_of_feedback) VALUES ('$gym', '$feedback', '$timezone')";

if ($conn->query($sql) === TRUE) {
	//echo "\nNew record created successfully";
?>
	<script language="javascript" type="text/javascript">
		alert("Thanks for your feedback")
	</script>
	<meta HTTP-EQUIV="REFRESH" content="0.1; index_user.php">
<?php
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>