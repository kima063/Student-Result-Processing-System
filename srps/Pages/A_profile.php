<?php

$teacher_name = "Alex";
$email = "alex@iut-dhaka.edu";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="Admin_profile.css">
</head>


<body>
    <h1>Admin's Profile</h1>
     <div class="border" style="border-color: black;border-style: solid;margin-right: 30%;margin-left: 30%;margin-bottom: 5%;margin-top: 5%">
    <label class="name">Name: </label>
    <label class="TeacherName"> <?= $teacher_name;?> </label>
    <br><br><br>

    <label class="mail">Email: </label>
    <label class="email"> <?= $email;?> </label>
    <br><br>
    <br><br>
</div>

    <p><a href="changepass.php">Change Password</a></p>

  </form>
</div>

</body>