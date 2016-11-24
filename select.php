<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "Karim";
$password = "password";
$dbname = "myDaycare";


$conn = new mysqli($servername, $username, $password, "Daycare");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$myData = mysql_query($sql, $con) 

$conn->close();
?>
</body>
</html>