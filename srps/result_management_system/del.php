<html>
<head>
<title>Erase data</title>
<?php

session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}



?>
</head>
<body bgcolor="#808080">

<center><class="w3-border"  style=" width:40%; height:30%; border-radius:50px; position:absolute; left: 450px;bottom:300px;background-color:white;" />
<img src="del.jpg" style=" width:5%; height:10%; border-radius:100px; position:absolute; left: 675px; bottom:450px;" />
</center>



<script>
function myFunction() {
     var txt;
    if (confirm("All your stored results will be deleted?")) {
        txt = "You pressed OK!";
window.location = 'Delete.php';
    } else {
        txt = "You pressed Cancel!";
    }
}
</script>
<form action="Delete.php" method="POST">
<input type="button" value="Delete" onclick="myFunction()" style=" width:10%; height:10%; border-radius:10px; font-size:20px; position:absolute; background-color:#1997DB; color:white; left: 520px; bottom:320px;">

<a href="manage_results.php"><input type="button" value="Cancel" style=" width:10%; height:10%; border-radius:10px; font-size:20px; position:absolute; background-color:#1997DB; color:white; left: 765px; bottom:320px;"></a>
</form>
<style>
body {
    margin:0;
    padding:0;
    background:url("result/delete.png") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.container {
    position: relative;
    text-align: center;
    font-family:Times New Roman;
    top:-100px;
    left:-10px;
    font-size:18px;
    color: black;
}
.centered {
    position: absolute;
    left: 57%;
	margin-top:5%;
	margin-left:-7%;
    transform: translate(-50%, 1350%);
}

</style>
<div class="container">
<div class="centered" style="top:40%;">All your data will be deleted permanently.Do you want to continue?</div>
</div>

</body>
</html>