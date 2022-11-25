<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

/*

*/
$email='john@example.com';
/*

*/
$sql = "SELECT * FROM MyGuests WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows >0) {
  echo "OK<br>";
} else {
  echo "Error: " . $conn->error;
}
echo '<hr>';
var_dump($result);
echo '<hr>';

while($row = $result->fetch_assoc()) {
  echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"];
  echo " Email:".$row["email"]. "<br>";
}

/*

*/
$conn->close();

?>