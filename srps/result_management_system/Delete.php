
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$x=$_SESSION["usn"];


$sql = "DELETE  FROM marks WHERE usn='$x'";

if ($conn->query($sql) === TRUE) {
   $sql = "DELETE  FROM signup WHERE usn='$x'";

if ($conn->query($sql) === TRUE) {
      session_destroy();
      header("Location:signup.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
session_destroy();
?>

</body>
</html>
