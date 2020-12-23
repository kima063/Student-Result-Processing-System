<?php

$student_name = "Sharmin Mou";
$student_id = "170042074";
$email = "sharminnaj@iut-dhaka.edu";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Student_profile.css">
</head>


<body>
    <h1>Student's Profile</h1>

    <label class="name">Student Name: </label>
    <label class="StudentName"> <?= $student_name;?> </label>
    <br><br><br>

    <label class="ID">Student ID: </label>
    <label class="StudentID"> <?= $student_id;?> </label>
    <br><br><br>

    <label class="mail">Email: </label>
    <label class="email"> <?= $email;?> </label>
    <br><br><br>
     

  <label class="courses">Courses:</label>
<ul class="a">
  <li>Structured Programming</li>
  <li>Linear Algebra</li>
  <li>Structured Programming lab</li>
  <li>Theory of Computation</li>
  <li>Database Management System</li>

</ul> 
    <br>
    <br>
    <br>
    <br>


    <p><a href="changepass.php">Change Password</a></p>

  </form>
</div>

</body>