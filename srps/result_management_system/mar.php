<html>
<head>


</head>
<body>

<?php
 session_start();
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 
// this will select the Database sample_db
mysqli_select_db($conn,"student");

//creating marks
			$sql1 = "CREATE TABLE IF NOT EXISTS marks (
			usn VARCHAR(20) NOT NULL,
			sem VARCHAR(20) NOT NULL,
			s1 VARCHAR(20) NOT NULL,
			s1m1 INT(11) NOT NULL,
			s2 VARCHAR(20) NOT NULL,
			s2m2 INT(11) NOT NULL,
			s3 VARCHAR(20) NOT NULL,
			s3m3 INT(11) NOT NULL,
			s4 VARCHAR(20) NOT NULL,
			s4m4 INT(11) NOT NULL,
			s5 VARCHAR(20) NOT NULL,
			s5m5 INT(11) NOT NULL,
			s6 VARCHAR(20) NOT NULL,
			s6m6 INT(11) NOT NULL,
			s7 VARCHAR(20) NOT NULL,
			s7m7 INT(11) NOT NULL,
			s8 VARCHAR(20) NOT NULL,
			s8m8 INT(11) NOT NULL
			)";

		if ($conn->query($sql1) === TRUE) {
		//echo "Table admin_database created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
 


 
// create INSERT query
$x=$_SESSION["usn"];
$sql="INSERT INTO marks (usn,sem,s1,s1m1,s2,s2m2,s3,s3m3,s4,s4m4,s5,s5m5,s6,s6m6,s7,s7m7,s8,s8m8) VALUES ('$x','$_POST[semester]','$_POST[s1]','$_POST[m1]','$_POST[s2]','$_POST[m2]','$_POST[s3]','$_POST[m3]','$_POST[s4]','$_POST[m4]','$_POST[s5]','$_POST[m5]','$_POST[s6]','$_POST[m6]','$_POST[s7]','$_POST[m7]','$_POST[s8]','$_POST[m8]')";

if ($conn->query($sql) === TRUE) {
myFunction("succes");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);
function myFunction($msg)
{
$msg="Your result has been uplaoded to the database";
echo"<script type='text/javascript'> { alert('$msg');} window.location.replace('manage_results.php');</script>";
}
?>

</body>
</html>