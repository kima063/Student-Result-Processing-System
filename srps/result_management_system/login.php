<html>
      <title>Login</title>   
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    margin:0;
    padding:0;
    background:url("result/welcome.png") ;
    -webkit-background-size: cover;
    
    
    
}
 html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}



/* Add styles to the form container */
.container {
    position: absolute;
    right: 1%;
    top:-53%;
    border-radius:20%;
    margin: 20%;
    max-width: 300%;
    padding: 16%;
    
}

/* Full-width input fields */
input[type=text], input[type=password],input[type=submit] {
    width: 100%;
    padding: 3%;
    margin: 5% 0 5% 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}



.btn:hover {
    opacity: 1;
}
<script>
function check(){
   if(document.getElementById("psd").value == "psd") {

        return true;
   }
   else {    
        alert("wrong keyword entry");
        return false;
   }
 }
a{
color: #00ffa6;
}

</script>
</style>
</head>
    <body bgcolor="#808080">
             <div class="bg-img">  
  <form name="myForm" action="log.php" onsubmit="return check()" method="POST">
    <div class="container">
<fieldset style="float: left; width: 100%; background-color:#34495E;">
<h3 style="font-family:courier;"> 
<font size=45><legend style="font-size:90%;text-align:center;color:white;">LOGIN</legend></font> 
                 <input type="text" name ="id" placeholder="ENTER USER ID" style="height:50%; width:100%; border-radius:10%;  font-family:courier; font-size:100%"  required>
                  <input type="password" name="psd" placeholder="ENTER PASSWORD" style="height:50%; width:100%; border-radius:10%;  font-family:courier; font-size:100%" required><br>
                  <input type="submit" value="LOG IN" style="height:50%; width:100%; border-radius:10%;  font-family:impact; font-size:200%; color:white; background-color:#33FFD7;"> </h3>
          </fieldset>     
</div>  
             </form>

    </div>
   </body>
</html>