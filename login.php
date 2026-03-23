<!DOCTYPE html>
<html>
<head>
<title> Log In </title>
</head>
<body>
<style>

body{
font-family:Trebuchet MS;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
margin:0;
}

.container{
background:white;
padding:40px;
border-radius:8px;
box-shadow:0 4px 15px rgba(0, 0, 0, 0.1);
text-align:center;
}

h1{
color:MidnightBlue;
font-size:24px;
}

form{
text-align: left;
font-size: 14px;
}

input[type="text"]{
width:100%;
padding:8px;
margin-top:5px;
border-radius:4px;
box-sizing:border-box;
}

input[type="submit"]{
width:100%;
background-color:RoyalBlue;
color: white;
padding:12px;
border:none;
border-radius:4px;
font-size:16px;
}

input[type="submit"]:hover {
background-color:MidnightBlue;
}

a{
text-decoration:none;
color:RoyalBlue;
font-size:13px;
display:block;
margin-top:15px;
}

a:hover {
text-decoration:underline;
}

</style>
<div class="container">
<h1> Log In! </h1>

<form method ="POST">
Username:<br>
<input type="text" name="username"><br><br>
Password:<br>
<input type="text" name="password"><br><br>
<input type="submit" name="login" value="Login">
</form>
<a href="register.php"><p>Don't have an account yet? Register here!</p></a>
<?php
session_start();
include "amsdb.php";

if(isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM users
	WHERE username='$username'
	AND password='$password'";
	
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	
	var_dump($_SESSION['user_id']);
	if($row){
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];

    if($row['role']=="Adviser"){
        header("Location: thomepage.php");
    } elseif($row['role']=="Admin"){
        header("Location: adminhomepage.php");
    } else {
        header("Location: homrpagew.php");
    }
    exit();
}
}
?>
</body>
</html>