<?php

$student_name = "Sharmin Mou";
$student_id = "170042074";
$email = "sharminnaj@iut-dhaka.edu";
$gpa = "3.51";
$cgpa = "3.4";


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Student_academic_record.css">
</head>

<p class="groove">
<body>
    <h1>Academic Record</h1>
<label class="name">Student Name: </label>
    <label class="StudentName"> <?= $student_name;?> </label>
    <br><br>

    <label class="ID">Student ID: </label>
    <label class="StudentID"> <?= $student_id;?> </label>
    <br><br>

    <label class="mail">Email: </label>
    <label class="email"> <?= $email;?> </label>
    <br><br>
    <br><br>

     <label class="result">Result: </label></p>
    <br><br>



  <table width="200">
  <tr>
    <th>Serial No</th>
    <th>Course ID</th>
    <th>Course Title</th>
    <th>Credit</th>
    <th>GPA</th>
  </tr>
  <tr>
    <td>01</td>
    <td>CSE 4301</td>
    <td>Structured Programming</td>
    <td>3</td>
    <td>5</td>
  </tr>
  <tr>
    <td>02</td>
    <td>CSE 4303</td>
    <td>Linear Algebra</td>
    <td>3</td>
    <td>4.5</td>
  </tr>
  <tr>
    <td>03</td>
    <td>CSE 4302</td>
    <td>Structured Programming lab</td>
    <td>1.5</td>
    <td>5</td>
  </tr>
  <tr>
   <td>04</td>
    <td>CSE 4304</td>
    <td>Object Oriented Programming</td>
    <td>3</td>
    <td>5</td>
  </tr>
  <tr>
    <td>05</td>
    <td>CSE 4301</td>
    <td>Theory of Computation</td>
    <td>3</td>
    <td>4.58</td>
  </tr>
  <tr>
    <td>06</td>
    <td>CSE 4301</td>
    <td>Database Management System</td>
    <td>3</td>
    <td>4.8</td>
  </tr>
</table>
<br><br>

<label class="FinalResult">Final Result: </label>
  <br><br>

<label class="gpa">GPA: </label>
<label class="g"> <?= $gpa;?> </label>
  <br><br>
 <label class="cgpa">CGPA: </label>
 <label class="c"> <?= $cgpa;?> </label>
 <br><br>

  </form>

</body>