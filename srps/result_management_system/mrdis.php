<?php



session_start();
if($_SESSION["active"]!=1){
   header("Location:pro.php");
}



?>
<?php
function check($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8) {
    if($m1==0 && $m2==0  && $m3==0  && $m4==0  && $m5==0  && $m6==0  && $m7==0  && $m8==0){
	$x="No entries found ,setting all the values to 0";
	echo "<script type='text/javascript'>{alert('$x');}</script>";	
}
}
?>
<html>
<title>marks display</title>
<body bgcolor="#808080"><br>
<div id="chartContainer" style="height: 90%; width: 40%;position:absolute;left:58%; top:25%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<center style="font-size:300%; font-family:impact; color:#1997DB  ">Check Your Results</center></font>
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

form1{
position:absolute;
top:25%;
left:2%;
width:55%;
height:90%;
}



table {
position:relative; left:5%;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;

}

td, th {
    border: 2px solid #dddddd;
    text-align: center;
    padding: 10px;
	width:100px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
 $m1=0;
	 		$m2=0;
	 		$m3=0;
	 		$m4=0;
	 		$m5=0;
	 	 	$m6=0;
			$m7=0;
	  		$m8=0;
$present=0;
$x=$_SESSION["usn"];
if(isset($_POST['semester'])){
$s=$_POST['semester'];
$present=1;
}

   
$db = new mysqli("localhost", "root","","student");
            if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
                   }
            else{
            if($present==0){
             $s="1st  sem";  
            $sql="SELECT * FROM `marks` WHERE `usn` =\"$x\"";
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()){
            $s=$row["sem"];
            }
            
            }
			
            $db->close();
            }
            $db = new mysqli("localhost", "root","","student");
            if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
                   }
            else{
      
      
      
             $sql ="SELECT * FROM `marks` WHERE `usn` =\"$x\" AND `sem`=\"$s\"";
              $res =$db->query($sql) or die(mysqli_error($db));
            
               
              
              if($res->num_rows>0){
		
		
                      while($row = $res->fetch_assoc()) {
                      $m1=$row["s1m1"];
	 		$m2=$row["s2m2"];
	 		$m3=$row["s3m3"];
	 		$m4=$row["s4m4"];
	 		$m5=$row["s5m5"];
	 	 	$m6=$row["s6m6"];
			$m7=$row["s7m7"];
	  		$m8=$row["s8m8"];
                   
                   
                   
}
		check($m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8); 
}
			}

$db->close();

?>
<form1>
<form  name="myForm"  action="mrdis.php"  method="POST">
<fieldset style="font-family:courier; font-size:20; color:white;">
USN:
<input type="text" name="name" value= <?php echo $_SESSION["usn"]; ?>  disabled="disabled" style="height:30px; width:240px; border-radius:4px;  font-family:courier; font-size:100%"/>
Semester:
 <select name="semester" id="semo1" style="min-width:160px; min-height:30px; font-family:courier; font-size:20;">
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
<center><input type="submit" value="submit" onclick= "assign()" style=" font-family:courier; height:40px; width:260px; font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px border-radius:4px"/><br></style></center>
</form>
<br>
<center>MARKS CARD</center><br>
 <table bgcolor="white">
  <tr>
    <th>Subjects</th>
    <th>Marks</th>
  </tr>
  <tr>
    <td>Marks1</td>
    <td span id="=marks_1" ><?php echo $m1; ?></td>
  </tr>
   <tr>
    <td>Marks2</td>
    <td span id="marks_2"><?php echo $m2; ?></td>
    
  </tr>
   <tr>
    <td>Marks3</td>
    <td span id="marks_3"><?php echo $m3; ?></td>
 
  </tr>
   <tr>
    <td>Marks4</td>
    <td span id="marks_4"><?php echo $m4; ?></td>
 
  </tr>
   <tr>
    <td>Marks5</td>
    <td span id="marks_5"><?php echo $m5; ?></td>

  </tr>
 <tr>
    <td>Marks6</td>
   <td span id="marks_6"><?php echo $m6; ?></td>

  </tr>
 <tr>
    <td>Marks7</td>
   <td span id="marks_7"><?php echo $m7; ?></td>

  </tr>
 <tr>
    <td>Marks8</td>
    <td span id="marks_8"><?php echo $m8; ?></td>
   
  </tr>
</table>
</fieldset>
</form1>




<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Marks Sheet"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",       
		dataPoints: [
			{ y: <?php echo  $m1; ?> },
			{ y:<?php echo  $m2; ?> },
			{ y: <?php echo  $m3; ?> },
			{ y: <?php echo  $m4; ?> },
			{ y: <?php echo  $m5; ?> },
			{ y: <?php echo  $m6; ?> },
			{ y: <?php echo  $m7; ?> },
			{ y: <?php echo $m8; ?> }
		]
	}]
});
chart.render();

}
</script>
<script>

</script>
<a href="manage_results.php"><input type="button" value="Back" style=" font-family:courier; height:40px; width:260px; font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:3px border-radius:4px"/></a>
</head>
</html>