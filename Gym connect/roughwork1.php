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


$sql = 'SELECT sno,category,gym_name,address,city,state,phone_no FROM gym';
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gymnames</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Gym Connect</a>
			<div class="mr-auto"></div>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">HOME</a>
				</li>
			</ul>
			<form action="searchboxgymnamesphp.php" method="post">
				<input type="textbox" placeholder="Search gym name, city, state,category" name="str" required />
				<input type="submit" name="submit" value="Search" />
			</form>
		</div>
	</nav><br>


	<table border="1" cellspacing="0" class="table table-hover">
		<thead>

			<tr>

				<th scope="col">S_No.</th>
				<th scope="col">CATEGORY</th>
				<th scope="col">GYM NAME</th>
				<th scope="col">ADDRESS</th>
				<th scope="col">CITY</th>
				<th scope="col">STATE</th>
				<th scope="col">PHONE NO.</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$count = 0;
			while ($row = $result->fetch_assoc()) {
				$count = $count + 1;
				echo "<tr> ";
				echo "<td>";
				echo "{$row['sno']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['category']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['gym_name']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['address']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['city']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['state']}";
				echo "</td>";
				echo "<td>";
				echo "{$row['phone_no']}";
				echo "</td>";
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>