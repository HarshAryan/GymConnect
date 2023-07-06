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
$itemname = $_POST["myitemname"];
$description = $_POST["mydescription"];
$price = $_POST["myprice"];
$sql = "INSERT INTO products  (itemname,description,price) VALUES ('$itemname', '$description', '$price')";

if ($conn->query($sql) === TRUE) {
	//echo "\nNew record created successfully";
?>
	<script language="javascript" type="text/javascript">
		alert("New Product Successfully Added")
	</script>
	<meta HTTP-EQUIV="REFRESH" content="0.1; addingproducts.php">
<?php
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>