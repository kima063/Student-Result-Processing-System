<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


<head>
  <title>Marks entry</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>



<div class="container">
  <h1>Students' marks entry</h1>

  <form action="/action_page.php">

    <label for="id">Student ID:</label>
    <input type="text" id="sid" name="stid" placeholder="full Student id..">  
    
    <label for="quiz1">Quiz 1:</label>
    <input type="text" id="q1" name="quiz1" placeholder="obtained marks of quiz 1..">

    <label for="quiz2">Quiz 2:</label>
    <input type="text" id="q2" name="quiz2" placeholder="obtained marks of quiz 2..">

    <label for="quiz3">Quiz 3:</label>
    <input type="text" id="q3" name="quiz3" placeholder="obtained marks of quiz 3..">

    <label for="quiz4">Quiz 4:</label>
    <input type="text" id="q4" name="quiz4" placeholder="obtained marks of quiz 4..">

    <label for="attendance">Days Present:</label>
    <input type="text" id="attd" name="attdnce" placeholder="no. of days present..">

    <label for="mid">Mid Exam:</label>
    <input type="text" id="mid" name="mid" placeholder="obtained marks of mid exam..">

    <label for="semf">Semester Final Exam:</label>
    <input type="text" id="semf" name="semf" placeholder="obtained marks of semester final exam..">

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
