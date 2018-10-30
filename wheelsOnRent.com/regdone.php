<?php session_start();
$link = mysqli_connect("localhost","root","","wor");

$name=$_SESSION['name'];
$age=$_SESSION['age'];
$gender=$_SESSION['gender'];
$address=$_SESSION['address'];
$city=$_SESSION['city'];

$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql1="INSERT INTO login (phone,email,password) values('$phone','$email','$password')";
$sql2="INSERT INTO basicinfo (name,age,gender,address,city) values('$name','$age','$gender','$address','$city')";

mysqli_query($link, $sql1);
mysqli_query($link, $sql2);

?>