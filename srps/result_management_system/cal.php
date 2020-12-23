<html>
<head>
<?php
session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}
$x=$_SESSION["usn"];

?>
</head>
<title>gpa calculator</title>
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
function showInput2(){
  var x1=document.getElementById("marks1").value;
  var x2=document.getElementById("marks2").value;
  var x3=document.getElementById("marks3").value;
  var x4=document.getElementById("marks4").value;
  var x5=document.getElementById("marks5").value;
  var x6=document.getElementById("marks6").value;
  var x7=document.getElementById("marks7").value;
  var x8=document.getElementById("marks8").value;
  var x9=document.getElementById("semester").value;

if(x1==""||x2==""||x3==""||x4==""||x9==""||x5==""||x6==""||x7==""||x8==""){
alert("one or more field are empty");
}

else{

if(x9<1 || x9>8)

{
alert("enter valid semester");
}else{
    showInput1();
    document.getElementById("total").value=parseInt(x1)+parseInt(x2)+parseInt(x3)+parseInt(x4)+parseInt(x5)+parseInt(x6)+parseInt(x7)+parseInt(x8);
    document.getElementById("sgpa").value=((x1*4)+(x2*4)+(x3*4)+(x4*4)+(x5*4)+(x6*4)+(x7*2)+(x8*2))/280;
    
  }

}
}

 function showInput1(){
   
    var x='marks_1';
    var y='marks1';
    var x1='credits_1';
    var y1='grade_1'; 
    showInput(x,y,x1,y1);
    showInput('marks_2','marks2','credits_2','grade_2');
    showInput('marks_3','marks3','credits_3','grade_3');
    showInput('marks_4','marks4','credits_4','grade_4');
    showInput('marks_5','marks5','credits_5','grade_5');
    showInput('marks_6','marks6','credits_6','grade_6');
    showInput('marks_7','marks7','credits_7','grade_7');
    showInput('marks_8','marks8','credits_8','grade_8');
    
   
  }
  
  
 
    function showInput(x,y,x1,y1) {
        document.getElementById(x).innerHTML = 
                    document.getElementById(y).value;
         
             var inputElement =document.getElementById(y).value;
             if (inputElement>89) {
                  document.getElementById(x1).innerHTML = "10";
                  document.getElementById(y1).innerHTML="S+";
              }
             else if (inputElement>79) {
                  document.getElementById(x1).innerHTML = "9";
                  document.getElementById(y1).innerHTML="S";
              }
              else if (inputElement>69) {
                  document.getElementById(x1).innerHTML = "8";
                  document.getElementById(y1).innerHTML="A";
              }
              else if (inputElement>59) {
                  document.getElementById(x1).innerHTML = "7";
                  document.getElementById(y1).innerHTML="B";
              }
              else if (inputElement>49) {
                  document.getElementById(x1).innerHTML = "6";
                  document.getElementById(y1).innerHTML="C";
              }
              else if (inputElement>39) {
                  document.getElementById(x1).innerHTML = "5";
                  document.getElementById(y1).innerHTML="D";
              }
              else if (inputElement>27) {
                  document.getElementById(x1).innerHTML = "4";
                  document.getElementById(y1).innerHTML="E";
              }
              else{
                    document.getElementById(x1).innerHTML = "0";
                    document.getElementById(y1).innerHTML="F";
              }
              
    }
  </script>

</head>
<body bgcolor="#808080"><br>
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
left:3%;
}
form1{
position:absolute;
left:45%;
}
form2{
position:absolute;
top:95%;
left:45%;
}
</style>
<h3 style="font-family:courier;">
<u><center><h1 style="background-color:#19DBBE  ; font-family:impact; font-size:25">
<center><font size=85 style="font-family:impact; color:white;">Calculate your score!!!!!!</font></center><br></h1>
<form>
<fieldset>
<legend style="font-size:30px;text-align:center;color:#33FFD7;">GPA Calculator</legend>

<br><br>
Enter your sem:

&nbsp;<input type="text" id="semester" min="1" max="8" step ="1" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" name="name" style="height:30px; width:240px; border-radius:4px;  font-family:courier; font-size:17px" disablsed/>&nbsp;&nbsp;

<br><br><center>**Enter your marks**</center><br>


<center><input type="number" id="marks1" min="0" max="100" step ="1" onkeypress="return isNumberKey(event)" onchange="handleChange(this);" placeholder="marks1"  style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required />
&nbsp;&nbsp;<input type="number"  id="marks2" min="0" maxlength=100 step =1 onkeypress="return isNumberKey(event)" onchange="handleChange(this);" placeholder="marks2" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required /></center>
<br><br>

<center><input type="number" min="0" maxlength="100" step ="1" placeholder="marks3"  onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="marks3" min=0 max=100 placeholder="marks3" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px;" required />
&nbsp;&nbsp;<input type="number" min="0" maxlength="100" step ="1"  onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="marks4" placeholder="marks4" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required /></center>
<br><br>
<center><input type="number"  min="0" maxlength="100" step ="1"  onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="marks5" placeholder="marks5" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required />
&nbsp;&nbsp;<input type="number" min="0" maxlength="100" step ="1"  onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="marks6" placeholder="marks6" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required /></center>
<br><br>
<center><input type="number"  min="0" maxlength=100 step =1  onkeypress="return isNumberKey(event)"  onchange="handleChange(this);" id="marks7" placeholder="marks7" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required />
&nbsp;&nbsp;<input type="number" min="0" max=length100 step =1  onkeypress="return isNumberKey(event)" onchange="handleChange(this);" id="marks8" placeholder="marks8" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required /></center>
<br><br>
<center>
<input type="button" value="calculate" style=" font-family:courier; height:40px; width:160px; font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px border-radius:4px" onclick="showInput2();"/></center>


</form></h3>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 200%;
    
}

td, th {
    border: 2px solid #dddddd;
    text-align: center;
    padding: 10px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<form1>
<br><br><br>
<table bgcolor="white">
  <tr>
    <th>Subjects</th>
    <th>Marks</th>
    <th>Credits</th>
    <th>Grade</th>
  </tr>
  <tr>
    <td>Marks1</td>
    <td span id="marks_1"></td>
    <td span id="credits_1" ></td>
    <td span id="grade_1"></td>
  </tr>
   <tr>
    <td>Marks2</td>
    <td span id="marks_2"></td>
    <td span id="credits_2" ></td>
    <td span id="grade_2"></td>
    
  </tr>
   <tr>
    <td>Marks3</td>
    <td span id="marks_3"></td>
    <td span id="credits_3" ></td>
    <td span id="grade_3"></td>
  </tr>
   <tr>
    <td>Marks4</td>
    <td span id="marks_4"></td>
    <td span id="credits_4" ></td>
    <td span id="grade_4"></td>
  </tr>
   <tr>
    <td>Marks5</td>
    <td span id="marks_5"></td>
    <td span id="credits_5" ></td>
    <td span id="grade_5"></td>
  </tr>
 <tr>
    <td>Marks6</td>
   <td span id="marks_6"></td>
    <td span id="credits_6" ></td>
    <td span id="grade_6"></td>
  </tr>
 <tr>
    <td>Marks7</td>
   <td span id="marks_7"></td>
    <td span id="credits_7" ></td>
    <td span id="grade_7"></td>
  </tr>
 <tr>
    <td>Marks8</td>
    <td span id="marks_8"></td>
    <td span id="credits_8" ></td>
    <td span id="grade_8"></td>
  </tr>
</table>
</form1>

<form2>
<h2 style="font-family:courier;">
<fieldset>

<legend style="font-size:30px;text-align:center;color:#33FFD7;">Results</legend>
Total:<input type="text" id="total" name="total" style="height:30px; width:200px; border-radius:4px;  font-family:courier; font-size:17px; " disabled/>
SGPA:<input type="text" id="sgpa" name="sgpa" style="height:30px; width:200px; border-radius:4px;  font-family:courier; font-size:17px; " disabled/>
</fieldset></h2>
</form2>

</body>

</html>
