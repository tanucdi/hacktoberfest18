<?php session_start();

$_SESSION['name']= $_POST['name'];
$_SESSION['age']=$_POST['age'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['address']=$_POST['address'];
$_SESSION['city']=$_POST['city'];
?>
<center><h1>REGISTER2</h1>
    <form action="regdone.php" method="post">
        PHONE : <input type="text" name="phone" id="phone" required placeholder="*" ><BR><BR>
        EMAIL : <input type="text" name="email" id="email"><BR><BR>
        PASSWORD : <input type="password" name="password" id="password" required placeholder="*" ><BR><BR>
        CONFIRM PASSWORD : <input type="password" name="password2" id="password2" required placeholder="*" ><BR><BR>
        
        <input type="submit" value="REGISTER">
    </form>