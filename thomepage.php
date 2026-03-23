<!DOCTYPE html>
<html>
<head>
<title> Main Page </title>
<style>

body{
font-family:Trebuchet MS;
background-image: url('https://www.shutterstock.com/image-vector/floral-seamless-pattern-blue-white-600nw-2531745513.jpg');
}
h3 {
padding:5px;
text-align : left;
color:white;
background-color:SkyBlue;
border-style:groove;
border-radius:5px;
}
p {
color: black;
}
.container2 {
display: flex;
gap : 200px;
align-items: left;
justify-content: space-between;
background-color: white;
border-style: inset;
}

.right-text {
margin-left: auto;
}

</style>
</head>

<body>
<?php
include 'tnavbar.php';
?>
<div class = "container2">
<div> 
<h3> Help!  </h3>
<p> ? : Have forgotten your password? or Do you have more questions? <br>
Contact : amsassistant2@gmail.com , and our team will send you a response!<br></p>
</div>
<div>
<h3> Attendance !</h3>
<a href="monitoring.php"><p> Monitor your students' attendance here !</p></a>
</div>
<div>
<h3>Date !</h3>
<?php
$date = date ( 'F d Y, l');
?>
<?php
echo "<p><b>Today is " .$date. "</b></p>";
?>
<h3> Goodie vibes ! </h3>
<a href="https://youtu.be/dQw4w9WgXcQ?si=DfWek5dT8f1XmErj"> <p> Feeling rather down? Click me! </p></a>
</div>
</div>
</body>
</html>