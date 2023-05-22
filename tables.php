<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
	<title>History</title>
</head>
<body>
	<main>
		<section class="table_header">
			<h1>Information</h1>
		</section>
		<section class="table_body">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
					</tr>
				</thead>
				<?php

				$conn = mysqli_connect("database-1.czpxnsvu61mj.us-east-2.rds.amazonaws.com","admin","Azulperr*68","SOdatabase");
				if($conn-> connect_error){
					die("Connection failed:". $conn-> connect_error);
				}

				$sql = "SELECT id, name, email, message from information1";
				$result = $conn-> query($sql);

				if($result-> num_rows > 0){
					while ($row = $result-> fetch_assoc()){
						echo "<tr><td>". $row["id"] ."</td><td>". $row["name"] ."</td><td>". $row["email"] ."</td><td>". $row["message"] ."</td></tr>";
					}
					echo "</table>";
				}else{
					echo "0 result";
				}
				$conn-> close();
				?>
			</table>
		</section>
		<a href="index.html">Regresar</a>
	</main>
</body>
</html>