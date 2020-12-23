<html>
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
		
		
		
		//creating signup
		$sql1 = "CREATE TABLE IF NOT EXISTS signup (
			name VARCHAR(50) NOT NULL,
			usn VARCHAR(50) NOT NULL,
			email VARCHAR(50) NOT NULL,
			phone BIGINT(11) NOT NULL,
			pass VARCHAR(50) NOT NULL
			)";

		if ($conn->query($sql1) === TRUE) {
		//echo "Table signup created successfully";
		} else {
		echo "Error creating table: " . $conn->error;
		}
 

 
// create INSERT query

        $_SESSION["usn"]=$_POST['usn'];
        $x=$_SESSION["usn"] ;
         $sql = "SELECT * FROM signup WHERE USN='$x'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
             $message="USN already used";

        echo"<script type='text/javascript'> { alert('$message');} window.location.replace('pro.php');</script>";

            }
    
 else {
$sql="INSERT INTO signup (name,usn,email,phone,Pass) VALUES ('$_POST[name]','$_POST[usn]','$_POST[email]','$_POST[phone]','$_POST[pass]')";
     
 
if ($conn->query($sql) === TRUE) {
    header("Location:login.php"); /* Redirect browser */
	}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);
 }
?>
</body>
</html>