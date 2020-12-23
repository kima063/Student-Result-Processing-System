<html>

<head>
<?php
session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}
$x=$_SESSION["usn"];

?>
<script language="JavaScript">
 function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value="";
  }
 function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode < 48 || charCode > 57)&&(charCode!=8))
        return false;

    return true;
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

#txtstyle{
	height:30px;
	width:200px;
	
	font-size:23px;
	font-family:Georgia Bold;
	border-radius:6px;
	border:solid:1px black;
	padding-left:4px;
}
#semo{

		font-family:Georgia Bold;
	   font-size:33px;
           color: white;
	 

}

#semo1{
		height:20px;
		width:100px;
		font-family:Georgia Bold;
		font-size:15px;
}
#semo2{
		height:30px;
		width:150px;
		font-family:Impact;
		font-size:20px;
		
}


</style>
<title>uploader</title>
</head>
<body bgcolor="#808080">

<center>
<style>
form{
position:absolute;
left:28%;
}
</style>
<h3 style="font-family:courier;">

<form action="mar.php" method="POST">
<fieldset>
<legend style="font-size:40px;text-align:center;"><font color="white">UPLOAD YOUR RESULT</font></legend>
  <b id="semo">Choose semester&nbsp;&nbsp;:</b>&nbsp;&nbsp;
  
  <select name="semester" id="semo1" style="min-width:160px; min-height:30px; font-family:courier; font-size:20;" >
    <option>select--</option>
    <option>1st sem</option>
    <option>2nd sem</option>
    <option>3rd sem</option>
    <option>4th sem</option>
    <option>5th sem</option>
    <option>6th sem</option>
    <option>7th sem</option>
    <option>8th sem</option>
  </select><br><br>


     
  <input type="text" name="s1" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m1" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s2" placeholder="Subject Name or ID" id="txtstyle"  required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m2" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s3" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m3" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s4" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m4" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s5" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m5" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s6" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m6" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s7" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m7" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>
  <input type="text" name="s8" placeholder="Subject Name or ID" id="txtstyle" required>&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="m8" placeholder="Marks" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="txtstyle" maxlength="3" required>
  <br><br><br>

  <input type="submit" name="sub" value="Upload" id="semo2" style="color:white; background-color:green; border-radius:8px;">
</fieldset>
</form> </h3>
</center>
<script>
var 

