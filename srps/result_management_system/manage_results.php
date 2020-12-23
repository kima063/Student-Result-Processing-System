<html>

<title>RMS</title>

<body bgcolor="#808080">


<u><center><h1 style="background-color:#21618C; font-family:impact; font-size:25%"><br>
<font size=45% color="#00D4FF">SMART way to manage your RESULTS.....</font><br><br><br></center></u></h1>
<a href="LogOut.php"><input type="button" value="LogOut"  style=" width:10%; height:8%; border-radius:5%; font-size:100%; position:absolute; background-color:#1997DB; color:white; left: 88%; bottom:89%;"></a>
<h3 style="font-family:courier;">

<center><a href="1.php"><img src="result/upload.jpg" style="height:32%; width:20%; border-radius:15%;" hspace="20"/></a>
<a href="cal.php"><img src="result/blog.jpg" style="height:32%; width:20%; border-radius:15%;" hspace="20"/></a>
<a href="mrdis.php"><img src="result/book.png" style="height:32%; width:20%; border-radius:15%;" hspace="20"/></a>
<a href="del.php"><img src="result/download (5).jpg" onclick="myFunction()" style="height:32%; width:20%; border-radius:15%;" hspace="20"/></a>

</center>

<br><span style="padding-left:8%;color:white">Upload your result</span>
<span style="padding-left:12%;color:white">Calculate gpa </span>
<span style="padding-left:12%;color:white">Check your results</span>
<span style="padding-left:8%;color:white">Erase your data</span><br><br>


<section>
  <img class="mySlides" src="result/school.jpg"
  style="width:60%; height:60%; display:block; margin-left:auto; margin-right:auto; border-radius:25px">
  <img class="mySlides" src="result/learn.jpg"
  style="width:60%; height:60%; display:block; margin-left:auto; margin-right:auto; border-radius:25px">
  <img class="mySlides" src="result/social.png"
  style="width:60%; height:60%; display:block; margin-left:auto; margin-right:auto; border-radius:25px">
</section>

<script>
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

</script>
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

</style>
</h3></body>
<?php
session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}
$x=$_SESSION["usn"];

?>

</html>
