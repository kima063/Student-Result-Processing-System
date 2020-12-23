<html>

<title>gpa calculator</title>
<head>
<?php
session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}


?>

</head>
<body bgcolor="#808080"><br>
<style>

form{
position:absolute;
left:10px;
}
form1{
position:absolute;
left:700px;
}
form2{
position:absolute;
top:575px;
left:800px;
}
</style>
<h3 style="font-family:courier;">
<u><center><h1 style="background-color:LightGray; font-family:impact; font-size:25">
<center><font size=85 style="font-family:impact; color:#00D4FF;">Calculate your score!!!!!!</font></center><br></h1>
<form>
<fieldset>
<legend style="font-size:30px;text-align:center;color:#33FFD7;">GPA Calculator</legend>
&nbsp;&nbsp;&nbsp;&nbsp;Your name:
&nbsp;&nbsp;<input type="text" name="name" style="height:30px; width:240px; border-radius:4px;  font-family:courier; font-size:17px" disabled/>&nbsp;&nbsp;
<br><br>
Enter your sem:

<select name="Sem" style="min-width:120px; min-height:30px; font-family:courier; font-size:20; border-radius:4px;" >
    <option>select--</option>
    <option>--select--</option>
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
  </select><br><br>

<br><br><center>**Enter your marks**</center><br>


<center><input type="text" placeholder="marks1" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required/>
&nbsp;&nbsp;<input type="text" placeholder="marks2" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required/></center>
<br><br>

<center><input type="text" placeholder="marks3" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required/>
&nbsp;&nbsp;<input type="text" placeholder="marks4" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required/></center>
<br><br>
<center><input type="text" placeholder="marks5" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required/>
&nbsp;&nbsp;<input type="text" placeholder="marks6" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required/></center>
<br><br>
<center><input type="text" placeholder="marks7" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px; " required/>
&nbsp;&nbsp;<input type="text" placeholder="marks8" style="height:30px; width:140px; border-radius:4px;  font-family:courier; font-size:17px" required/></center>
<br><br>
<center>
<input type="submit" value="calculate" style=" font-family:courier; height:40px; width:160px; font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px border-radius:4px"/></center>


</form></h3>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 250%;

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
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td>Marks2</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td>Marks3</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td>Marks4</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
   <tr>
    <td>Marks5</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td>Marks6</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td>Marks7</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
 <tr>
    <td>Marks8</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>
</form1>

<form2>
<h2 style="font-family:courier;">
<fieldset>

<legend style="font-size:30px;text-align:center;color:#33FFD7;">Results</legend>
Total:<input type="text" name="total" style="height:30px; width:200px; border-radius:4px;  font-family:courier; font-size:17px; " disabled/>
SGPA:<input type="text" name="sgpa" style="height:30px; width:200px; border-radius:4px;  font-family:courier; font-size:17px; " disabled/>
</fieldset></h2>
</form2>

</body>

</html>
