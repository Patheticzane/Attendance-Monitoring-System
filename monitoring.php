<?php
session_start();
include "amsdb.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance History</title>
<style>
body{
    font-family: Trebuchet MS;
    display:flex;
    flex-direction:column;
    align-items:center;
    margin-top:50px;
}
table{
    border-collapse:collapse;
    margin-top:20px;
    min-width:500px;
}
th, td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
}
th{
    background-color:MidnightBlue;
    color:white;
}
tr:nth-child(even){
    background-color:#f2f2f2;
}
a{
    margin-top:20px;
    text-decoration:none;
    color:RoyalBlue;
}
a:hover{
    text-decoration:underline;
}
</style>
</head>

<body>

<h1>Attendance History</h1>

<p><b>User: <?php echo htmlspecialchars($_SESSION['username']); ?></b></p>

<table>
    <tr>
        <th>Student Name</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

<?php
$sql = "SELECT att.status, att.date, users.username 
        FROM att 
        JOIN users ON att.student_user_id = users.id
        ORDER BY att.date DESC";

$result = mysqli_query($conn, $sql);
if(!$result){
    die("Query Failed: " . mysqli_error($conn));
}
echo "User ID: " . $user_id;
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['username']) . "</td>";
        echo "<td>" . $row['status'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No attendance records found</td></tr>";

}
?>

</table>

<a href="thomepage.php">← Back to Homepage</a>

</body>
</html>