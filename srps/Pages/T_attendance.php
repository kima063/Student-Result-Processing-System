<!DOCTYPE html>
<html>
<head>
	<title>Attendance</title>
	<link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<body>
  <br>
  <span class="label userinfo">Fariha Zohra Prapty</span>
  <img class="img i1"src="added_img\u0.jpg" alt="logged in as:" style="width:55px;height:55px;">
  <br>
  <br>

  <img class="img i2"src="added_img\p4.png" alt="course" style="width:50px;height:50px;">
  <div class="custom-select course">
      <select>
        <option value="0">Select Course</option>
        <option value="1">CSE 4123</option>
        <option value="2">CSE 4124</option>
        <option value="3">SWE 4123</option>
        <option value="4">EEE 4123</option>
        <option value="5">MATH 4123</option>
      </select>
    </div>  

    <br>
    <br>

    <img class="img i3"src="added_img\p5.png" alt="semester" style="width:50px;height:50px;">
    <div class="custom-select semester">
      <select>
        <option value="0">Select Semester</option>
        <option value="1">Winter Semester</option>
        <option value="2">Summer Semester</option>
      </select>
    </div>

    <br>
    <br>

    <img class="img i4"src="added_img\p6.png" alt="year" style="width:50px;height:50px;">
    <div class="custom-select year">
      <select>
        <option value="0">Select Year</option>
        <option value="1">2018</option>
        <option value="2">2019</option>
      </select>
    </div>



<br>
<br>
    <div>
      <h1>Attendance</h1>
    </div>
<br>

    <h2>Number of Working Days:</h2>
  
    <div class="att_form">
    <input type="text" name="days" required="required" placeholder=" " autofocus required></input>
    </div>
<br>
<br>

<div>
	<table id="attendance">
  <tr>
    <th class="th1">Student ID</th>
    <th class="th2">Name</th>
    <th class="th3">Days of Presence</th>
    <th class="th4">Marks</th>
  </tr>
  <tr>
    <td>321354</td>
    <td>Alice</td>
    <td>30</td>
    <td>10</td>

  </tr>
  <tr>
    <td>321354</td>
    <td>George</td>
    <td>40</td>
     <td>20</td>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>

  </tr>
  <tr>
    <td></td>
    <td></td>
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