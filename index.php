<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td {
		    border: 1px solid black;
		}
	</style>
</head>
<body>

	<?php
		$servername = "172.25.0.3";
		$username = "root";
		$password = "sqlsql123";
		$dbname = "Trucorp";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT id, nama, kantor FROM Users";
		$result = $conn->query($sql);
		$users = $result->num_rows;
		
		echo "Jumlah User: ".$users."<br>";

		if ($result->num_rows > 0) {
		    echo "<table><tr><th>ID</th><th>Name</th><th>Kantor</th></tr>";
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			echo "<tr>
			<td>" . $row["id"]. "</td>
			<td>" . $row["nama"]. "</td>
			<td>" . $row["kantor"]. "</td></tr>";
		    }
		    echo "</table>";
		    
		} else {
		    echo "Tidak ada data";
		}
		
		$conn->close();
	?> 

</body>
</html>
