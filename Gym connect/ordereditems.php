<?php
$x = 0;
$arrdata = array();
foreach ($_POST as $key => $value) {
	if (strpos($key, '_') !== false) {
		$iparr = explode("_", $key);

		$arrdata[$x] = $iparr[1];
		$x = $x + 1;
	}
}
$finaldata = '';
for ($x = 0; $x < sizeof($arrdata); $x++) {
	if ($x == sizeof($arrdata) || $x == 0) {
		$finaldata = $finaldata . $arrdata[$x];
	} else {
		$finaldata = $finaldata . "," . $arrdata[$x];
	}
}

//print_r($arrdata);
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "gym_connect");


// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$sql = 'SELECT itemname,description,price FROM products WHERE id in (' . $finaldata . ')';
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="ordereditems.css" alt="" rel="stylesheet">
	<link rel="icon" href="logo.jpeg" type="image/jpeg">
	<title>ordered_items</title>
</head>

<body>

	<div class="list">
	</div>


	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Gym Connect</a>
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index_user.php">HOME</a>
				</li>
			</ul>
		</div>
	</nav><br>

	<table border="1" cellspacing="0" class="table table-hover">
		<thead>

			<tr>
				<th scope="col">ITEMNAME</th>
				<th scope="col">DESCRIPTION</th>
				<th scope="col">PRICE</th>
			</tr>
		</thead>
		<?php
		$total = 0;
		while ($row = mysqli_fetch_array($result)) {
			echo "<tr> ";
			echo "<td>";
			echo "{$row['itemname']}";
			echo "</td>";
			echo "<td>";
			echo "{$row['description']}";
			echo "</td>";
			echo "<td>";
			echo "{$row['price']}";
			$total += number_format($row['price']);
			echo "</td>";
			echo "</tr>";
		}
		//echo "Total = " .$total;
		echo "<tr> ";
		echo "<td>";
		echo "";
		echo "</td>";
		echo "<td>";
		echo "";
		echo "</td>";
		echo "<td>";
		echo "";
		echo "</td>";
		echo "<tr> ";
		echo "<td>";
		echo "";
		echo "</td>";
		echo "<td>";
		echo "TOTAL";
		echo "</td>";
		echo "<td>";
		echo $total;
		echo "</td>";
		?>
	</table>
</body>

</html>