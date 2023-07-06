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


$sql = 'SELECT id, itemname,description,price FROM products';
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
	<link href="products_av2.css" rel="stylesheet">
	<link rel="icon" href="logo.jpeg" type="image/jpeg">
	<title>products_av</title>
</head>

<body>
	<h1 id="SJ">Gym Connect</h1>

	<div>
		<form action="searchboxproduct.php" method="post">
			<input type="textbox" placeholder="Search gym name, city, state,category" name="str" required />
			<input type="submit" name="submit" value="Search" />
		</form>
	</div><br>

	<form action="ordereditems.php" method="post">


		<div>
			<img src="black_bk.jpg" alt="" class="image">
		</div>


		<table border="1" cellspacing="0" class="table table-hover">
			<thead>

				<tr>

					<th scope="col">S_No.</th>
					<th scope="col">ITEMNAME</th>
					<th scope="col">DESCRIPTION</th>
					<th scope="col">PRICE</th>
					<th scope="col">SELECTION</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$count = 0;
				while ($row = $result->fetch_assoc()) {
					$count = $count + 1;
					echo "<tr> ";
					echo "<td>";
					echo "{$row['id']}";
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
					echo "<td><input type='checkbox' name='checkbox_$count'></td>";
					echo "</tr>";
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