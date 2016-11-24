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
// Create database
$sql = "CREATE DATABASE Daycare";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}
$parent = "CREATE TABLE MyParent (
parent_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
phone_number VARCHAR(15) NOT NULL,
address VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
zip VARCHAR(10) NOT NULL,
child_fname VARCHAR(50) NOT NULL,
child_lname VARCHAR(50) NOT NULL
)";
$child = "CREATE TABLE MyChild (
child_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
child_fname VARCHAR(30) NOT NULL,
child_lname VARCHAR(30) NOT NULL,
phone_number VARCHAR(15) NOT NULL,
address VARCHAR(50) NOT NULL,
city VARCHAR(50) NOT NULL,
zip VARCHAR(10) NOT NULL,
parent_fname VARCHAR(50) NOT NULL,
parent_lname VARCHAR(50) NOT NULL,
allergies VARCHAR(50),
child_dob DATE NOT NULL
)";
if ($conn->query($parent) === TRUE) {
    echo "Table MyParent created successfully";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
if ($conn->query($child) === TRUE) {
    echo "Table MyChild created successfully";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}
?>
</body>
</html>