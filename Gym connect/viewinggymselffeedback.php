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


$sql = 'SELECT gym_name,feedback,date_of_feedback FROM feedback where gym_name="Muscle Building"';
$result = $conn->query($sql);
if (!$result) {
	die('Could not get data: ' . mysql_error());
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="viewinggymselffeedback.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>reviews</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Gym Connect</a>
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index_gym_management.php">HOME</a>
				</li>
			</ul>
		</div>
	</nav><br>

	<table border="1" cellspacing="0" class="table table-hover">
		<thead>

			<tr>

				<th scope="col">S_No.</th>
				<th scope="col">FEEDBACK</th>
				<th scope="col">DATE OF FEEDBACK</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 0;
			while ($row = $result->fetch_assoc()) {
				$count = $count + 1;
				echo "<tr> ";
				echo "<td>";
				echo "{$count}";
				echo "</td>";
				echo "<td>";
				echo "{$row['feedback']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['date_of_feedback']}";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>