<?php

session_start();
$conn = new mysqli("localhost", "root", "", "mi");
if ($conn->connect_error) {
    echo"Connection failed : " . $conn->connect_error;
}
$name = $_SESSION["name"];
$gender = $_SESSION["gender"];
$age = $_SESSION["age"];
$uname = $_GET["uname"];
$pwd = $_GET["pwd"];

$sql = "INSERT INTO signup (name,age,gender,uname,pwd) VALUES('$name','$age','$gender','$uname','$pwd')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/MyInventory.com/login.php');
} else {
    header('Location: http://localhost/MyInventory.com/signup2.php');
}
$conn->close();

?>

