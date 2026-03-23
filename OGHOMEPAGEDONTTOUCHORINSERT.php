<!DOCTYPE html>
<html>
<head>
<title> Main Page </title>
<style>
h1 {
text-align : left;
color:black;
background-color: gray;
border-style:solid;
}
h2 {
text-align : left;
color:black;
background-color: gray;
border-style:solid;
}
h3 {
text-align : left;
color:black;
background-color: gray;
border-style:solid;
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
}
.right-text {
margin-left: auto;
}
</style>
</head>

<body>
<h1> Attendance Monitoring....</h1>
<div class="container">
<h2> Home </h2>
<h2> About Us</h2>
<span class="right-text"><h2> Profile</h2></span>
</div>
<div class = "container2">
<div> 
<h3> Overview </h3>
<p> website tourruuhhhhh </p>
</div>
<div>
<h3> Attendance !</h3>
<p> here attendance </p>
</div>
<div>
<h3>Date !</h3>
<?php
$date = date ( ' F d Y, l');
?>
<?php
echo "<p>Today is " .$date. "</p>";
?>
<h3> Activities ! </h3>
<p> if u can add it on here </p>
<h3> Goodie vibes ! </h3>
<a href="https://youtu.be/dQw4w9WgXcQ?si=DfWek5dT8f1XmErj"> <p> Feeling rather down? Click me! </p></a>
</div>
</div>
</body>
</html>