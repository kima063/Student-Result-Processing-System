<html>
<title>sign up</title>
<style>
body {
    margin:0;
    padding:0;
    background:url("result/welcome.png") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

form{
position:absolute;
left:68%;
top:5.5%;
}



.image{
  float:left;
}

.form{
  float:left;
}

a{
color: #ffc900 ;
font-size:150.5%;
font-family:impact;
}
</style>

<h3 style="font-family:courier;">
<body bgcolor="#808080">
<font size=4% color="white">
<font size=60%><center>RESULT MANAGEMENT SYSTEM</center></font><br><br>
<font size=4% color="white">

<div class="image">
<br><section>

  <img class="mySlides" src="result/html.png"
  style="width:60%; height:80%; display:block; margin:1%; margin-right:auto; margin-top:-5%; ">
  
<img class="mySlides" src="result/learn.jpg"
  style="width:60%; height:80%; display:block; margin:1%; margin-right:auto; margin-top:-5%;">
</section>

<script>

      
    
    
  
function ValidateEmail() 
{
var x=document.forms["myForm"]["email"].value;
var  x1=parseInt(document.forms["myForm"]["phone"].value);
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))
  {
      x=document.forms["myForm"]["usn"].value;
     if (/^([1][A-Za-z][A-Za-z][0-9][0-9][A-Za-z][A-Za-z][0-9][0-9][0-9])/.test(x))
  {
   
     
     if (/^([1-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/.test(x1) && x1>999999999 && x1<10000000000)
  {
   
    return (true)
  }   else{
    alert("You have entered an invalid Phone!");
    return (false)
    }
  }   else{
    alert("You have entered an invalid USN !"+x);
    return (false)
    }
}
  
 else{
    alert("You have entered an invalid email address!");
    return (false)
    }
}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}

</script></img></div>
<script>
function validatepass(){
if(!ValidateEmail()){
   return false;  
}
else{
 var x=document.forms["myForm"]["pass"].value;
  var y=document.forms["myForm"]["cpass"].value;
  if(x!=y){
     alert("Password not matching");
     return false;
   }
}
}
  </script>
<div class="form">
<form  name="myForm"  action="insert.php" onsubmit="return validatepass()" method="POST">
<fieldset style="width:130%;">
<legend style="font-size:250%;text-align:center;">SIGN UP</legend>
Name: <span style="color:red">*</span><br>
<input type="text" name="name" style="height:30%; width:100%; border-radius:4%;  font-family:courier; font-size:95%" required/><br><br>
USN: <span style="color:red">*</span><br>
<input type="text" name="usn" style="height:30%;width:100%; border-radius:4%; font-family:courier; font-size:95%" required/><br><br>
Email: <span style="color:red">*</span><br>
<input type="text" name="email" style="height:30%;width:100%; border-radius:4%; font-family:courier; font-size:95%" required/><br><br>
Phone: <span style="color:red">*</span><br>
<input type="text" name="phone" style="height:30%;width:100%; border-radius:4%; font-family:courier; font-size:95%" required/><br><br>
Password: <span style="color:red">*</span><br>
<input type="password" name="pass" style="height:30%;width:100%; border-radius:4%; font-family:courier; font-size:95%" required/><br><br>
Confirm Password: <span style="color:red">*</span><br>
<input type="password" name="cpass" style="height:30%;width:100%; border-radius:4%; font-family:courier; font-size:95%" required/><br><br>


<input type="submit" value="submit" style=" font-family:courier; height:100%; width:100%; font-size:105%;color:white;background-color:green;border:2% solid #336600;padding:3% border-radius:4%"/>

<br><br>Already a Member?<a href="login.php">login</a>
</fieldset>
</h3>
</form></div></font>
 <?php
		
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		// Create database
		$sql = "CREATE DATABASE IF NOT EXISTS student";
		if ($conn->query($sql) === TRUE) {
			//echo "Database created successfully";
			
		
		
		$conn->close();
		}
		?>
		
</body>
</html>

 
