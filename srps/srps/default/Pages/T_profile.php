<?php

$teacher_name = "Faisal Hussain";
$email = "faisal@iut-dhaka.edu";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Teacher_profile.css">
</head>


<body>
    <h1>Teacher's Profile</h1>

    <label class="name">Teacher Name: </label>
    <label class="TeacherName"> <?= $teacher_name;?> </label>
    <br><br><br>

    <label class="mail">Email: </label>
    <label class="email"> <?= $email;?> </label>
    <br><br><br>
     

  <label class="courses">Courses:</label>
<ul class="a">
  <li>Structured Programming</li>
  <li>Linear Algebra</li>
  <li>Structured Programming lab</li>

</ul> 
    <br><br>

    <p><a href="changepass.php">Change Password</a></p>

  </form>
</div>

</body>