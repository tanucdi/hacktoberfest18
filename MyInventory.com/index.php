<center>
<h1>WELCOME TO MYINVENTORY.COM</H1><br><br><i>
<A href="login.php">LOGIN</a><br><br>
<A href="signup.php">SIGNUP</a></i>
<br><br>
<?php 
$conn = new mysqli("localhost", "root", "", "mi");
if ($conn->connect_error) {
    echo"Connection failed : " . $conn->connect_error;
}
$result = $conn->query("SELECT COUNT(uname) from signup");
$row = $result->fetch_assoc();
echo "Total registered users : ".reset($row);

$conn->close();
?>
<br>
<a href="signup.php">Join the trend !!!</a>
</center>