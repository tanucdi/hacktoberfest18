<?php
session_start();
if (isset($_SESSION['$f'])) {
    echo '<script> alert("Try Again Bro."); </script>';
}
if(isset($_SESSION["age"])){
    echo '<script> alert("SIGN UP SUCCESSFUL. #LOGIN_NOW "); </script>';
}
session_destroy();
?>
<center>
    <form action="profile.php" method="GET">
        USERNAME : <input type="text" id="uname" name="uname" placeholder="USERNAME" required><br><br>
        PASSWORD : <input type="password" id="pwd" name="pwd" placeholder="PASSWORD" required><br><br>
        <input type="submit" value="PROCEED"><br><br>
        <a href="signup.php">New User ? Sign up here.</a>
    </form>
</center>