<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

/*

*/
$nombre='John';
$email='john@example.com';
$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('$nombre', 'Doe', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


/*

*/
$conn->close();

?>