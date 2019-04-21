<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactdata";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$result = "INSERT INTO contact (`name`, `email`, `comment`) VALUES ('$name', '$email', '$comment')";
	if ($conn->query($result) === TRUE) {
		echo "New record created successfully";
	} else {
    echo "Error: " . $result . "<br>" . $conn->error;
  }

$conn->close();
?>