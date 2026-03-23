<!DOCTYPE html>
<html>
<head>
<title> Register </title>
</head>
<body>

<style>

body{
font-family:Trebuchet MS;
display:flex;
flex-direction:column;
align-items:center;
justify-content:center;
min-height:100vh;
margin:0;
}

h1{
color:MidnightBlue;
}

form{
padding:30px;
border-radius:8px;
box-shadow:0 4px 15px rgba(0,0,0,0.1);
width:300px;
}

input[type="text"]{
width:100%;
padding:10px;
margin-top:5px;
border-radius:4px;
box-sizing:border-box;
}

input[type="submit"]{
width:100%;
background-color:RoyalBlue;
color:white;
border:none;
padding:12px;
border-radius:4px;
cursor:pointer;
}

input[type="submit"]:hover{
background-color:MidnightBlue;
}

a:hover{
text-decoration:underline;
}

</style>

<h1> STUDENT REGISTRATION</h1>

<form method ="POST">
Username:<br>
<input type="text" name="username"><br><br>
LRN:<br>
<input type="text" name="lrn"><br><br>
Password:<br>
<input type="text" name="password"><br><br>
<input type="submit" name="register" value="Register">

<a href="login.php"><p>Accidental Click? Go back!</p></a>
</form>

<?php
include "amsdb.php";

if(isset($_POST['register'])) {
	$username=$_POST['username'];
	$lrn=$_POST['lrn'];
	$password=$_POST['password'];
	
	$sql="INSERT INTO users(username,lrn,password,role)
	VALUES('$username','$lrn','$password','student')";
	
	mysqli_query($conn,$sql);
	
	echo "Registered Successfully!";
    echo '<a href="login.php"><p> Ready to Log in? Click me!</p></a>';
}
?>
</body>
</html>