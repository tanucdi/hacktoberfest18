<?php session_start(); 
 $_SESSION["name"]=$_GET["name"];
$_SESSION["age"]=$_GET["age"];
$_SESSION["gender"]=$_GET["gender"]; ?>
<center>
<form action="signup3.php" method="GET">
USERNAME : <input type="text" id="uname" name="uname" required><br><br>
PASSWORD : <input type="password" id="pwd" name="pwd" required><input type="button"<br><br>
<input type="submit" value="submit">
</form>
</center>
