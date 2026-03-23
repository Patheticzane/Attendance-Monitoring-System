<?php
session_start();
include "amsdb.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

if(isset($_POST['submit_attendance'])){
    $status = $_POST['status'];

    $sql = "INSERT INTO att(student_user_id, status) VALUES ('$user_id', '$status')";

    if(mysqli_query($conn, $sql)){
        echo "<p>Attendance recorded successfully!</p>";
    } else {
        echo "<p>Error inserting attendance: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Attendance</title>
<style>
body{
    font-family: Trebuchet MS;
    display:flex;
    flex-direction:column;
    align-items:center;
    margin-top:50px;
}
form{
    display:flex;
    flex-direction:column;
    gap:15px;
    min-width:300px;
    padding:25px;
    border-radius:8px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}
select, input[type="submit"]{
    padding:10px;
    border-radius:4px;
}
input[type="submit"]{
    background-color:RoyalBlue;
    color:white;
    border:none;
    cursor:pointer;
}
input[type="submit"]:hover{
    background-color:MidnightBlue;
}
</style>
</head>
<body>

<h1>Attendance for <?php echo htmlspecialchars($username); ?></h1>

<form method="POST">
    <label>Status:</label>
    <select name="status">
        <option value="Present">Present</option>
        <option value="Absent">Absent</option>
    </select>
    <input type="submit" name="submit_attendance" value="Submit Attendance">
</form>

<br>
<a href="homrpagew.php">Back to Homepage> →</a>

</body>
</html>