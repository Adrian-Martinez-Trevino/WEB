<?php

$name = $_POST["name"];
$message = $_POST["message"];
$email = $_POST["email"];
$terms = filter_input(INPUT_POST, "terms", FILTER_VALIDATE_BOOL);


$host = "database-1.czpxnsvu61mj.us-east-2.rds.amazonaws.com";
$dbname = "SOdatabase";
$username = "admin";
$password = "Azulperr*68";

$connect = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()){
	die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO SOdatabase.information1(name, message, email) VALUES(?, ?, ?)";

$stmt = mysqli_stmt_init($connect);

if(! mysqli_stmt_prepare($stmt, $sql)){
	die(mysql_error($connect));
}

mysqli_stmt_bind_param($stmt, "sss", $name, $message, $email);

mysqli_stmt_execute($stmt);

echo "Information was saved sucessfully!";

?>

<meta http-equiv = "refresh" content = "2;index.html">