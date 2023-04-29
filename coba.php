<?php
// Connect to MySQL database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Generate a random number
$random_number = rand(1, 100);

// Insert the random number into MySQL database
$sql = "INSERT INTO numbers (number) VALUES ('$random_number')";
mysqli_query($conn, $sql);

// Retrieve the random number from MySQL database
$sql = "SELECT number FROM numbers ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$stored_number = $row['number'];

// Output the random number
echo "Generated number: $random_number<br>";
echo "Stored number: $stored_number";

?>