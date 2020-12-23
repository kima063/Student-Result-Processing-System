<?php ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="changepass_final.css">
</head>
<body>
<div class="form-wrapper">
  
  <form action="#" method="post">
    <h3>Change Password</h3>
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Current Password" required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="New Password" required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Confirm Password" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Submit" name="submit" value="submit"></input>
    </div>
</body>
</html>