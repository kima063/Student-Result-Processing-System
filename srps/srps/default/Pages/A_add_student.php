<!DOCTYPE html>
<html>
<head>
	<title>
		Add Teacher
	</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<body>
	<br>
	<span class="label userinfo">Fariha Zohra Prapty</span>
	<img class="img i1"src="added_img\u4.jpg" alt="logged in as:" style="width:55px;height:55px;">
	<br>

	<div>
		<h1>Add Student</h1>
	</div>
	<br>
	<br>
	
	<div class="add_t_form">
		<form action="/action_page.php">
        Student's Name : <input class="in1" type="text" name="tName" value="" required="required" placeholder=" " autofocus required><br>
        Username : <input class="in2" type="text" name="userName" value="" required="required" placeholder=" " autofocus required><br>
        Password : <input class="in3" type="text" name="pw" value="" required="required" placeholder=" " autofocus required><br>
        <br>
        <input class="add_t_btn" type="submit" value="add">
        </form>
	</div>
	<div>
		<p>Students' List</p>
	</div>

	<div>
			<table id="add_st">
			  <tr>
			    <th class="th2">Student's Name</th>
			    <th class="th2">Username</th>
			  </tr>
			  <tr>
			    <td>Fariha Zohra Prapty</td>
			    <td>fzp1234</td>
			  </tr>
			  <tr>
			    <td>Fatema Zohra Prottyasha</td>
			    <td>fzp9547</td>
			  </tr>
			  <tr>
			    <td>Sharmin Naj Mou</td>
			    <td>snm1455</td>
			  </tr>
			  <tr>
			    <td>Maksuda Lima</td>
			    <td>ml4154</td>
			  </tr>
			  <tr>
			    <td></td>
			    <td></td>
			  </tr>
			  <tr>
			    <td></td>
			    <td></td>
			  </tr>
  
            </table>
	</div>

	<br>
		<div>
	        <button class="btn btn1">Update</button>
        </div>

</body>
</html>