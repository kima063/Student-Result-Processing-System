<html>
<body>
<?php
 session_start();
// Create connection
$conn = new mysqli('localhost','root','');
 $_SESSION["active"]=1;
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 
// this will select the Database sample_db
mysqli_select_db($conn,"student");
 

 

$sql="SELECT * FROM signup  WHERE usn='$_POST[id]' AND pass='$_POST[psd]'";
 $_SESSION["usn"]=$_POST['id'];
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   /* Redirect browser */
header("Location:manage_results.php");
}
 else {
    $message="USERNAME or PASSWORD are wrong";

echo"<script type='text/javascript'> { alert('$message');} window.location.replace('login.php');</script>";
}


 
mysqli_close($conn);
?>
</body>
</html>