Sucess! Redirecting...
<?php
$servername = "localhost";
$username = "root";
$password = "GLDaily7";
$dbname = "band";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$class = $_GET["class"];
$Names = $_GET["Name(s)"];
$sql = "INSERT INTO `people` (`Person(s)`, `Class`) VALUES ('$Names', '$class')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  die("Error: " . $sql . "<br>" . $conn->error);
}

$conn->close();
   header("Location: /index.php");
   exit;
?>