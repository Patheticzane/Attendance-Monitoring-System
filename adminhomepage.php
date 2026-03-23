<!DOCTYPE html>
<html>
<head>
<title> Main Page </title>
<style>

body{
font-family:Trebuchet MS;
background-image: url('https://www.shutterstock.com/image-vector/floral-seamless-pattern-blue-white-600nw-2531745513.jpg');
}

h1 {
text-align : center;
background-color: MidnightBlue;
color:white;
border-style:ridge;
padding:40px;
}

h2 {
padding:10px;
text-align : left;
color:white;
background-color: RoyalBlue;
border-style:groove;
border-radius:5px;
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

.container {
display: flex;
gap : 20px;
align-items: left;
justify-content: space-between;
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
<h1> Attendance Monitoring... Welcome Admin.<h1>
<div class="container">
<a href="homrpagew.php" style="text-decoration: none;"><h2> ✦ Student's Home </h2></a>
<a href="thomepage.php" style="text-decoration: none;"><h2> ✦ Teacher's Home </h2></a>
<a href="aboutus.php" style="text-decoration: none;"><h2> ✦ About Us</h2></a>
<a href="login.php" style="text-decoration: none;"><span class="right-text"><h2> Log Out</h2></span></a>
</div>
<div class = "container2">
<div> 
<h3> Help! </h3>
<p> ? : Have forgotten your password? or Do you have more questions? <br>
Contact : amsassistant2@gmail.com , and our team will send you a response!<br></p>
</div>
<div>
<h3> Attendance !</h3>
<a href="monitoring.php"><p> Monitor student's attendance !</p></a>
<a href="attendfdance.php"><p> Recording of student's attendance here !</p></a>
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