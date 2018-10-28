<?php

$conn = new mysqli("localhost","id5871094_drogo9191","drogo9191","id5871094_iot");
if($conn->connect_error)
{	echo "error";
}
$f=$_GET['f'];
$t=$_GET['t'];
$z=$_GET['z'];

$conn->query("DELETE FROM value");
$sql = "INSERT INTO value VALUES('$f','$z','$t')";
$conn->query($sql);

$sql="SELECT * FROM value";
$res=$conn->query($sql);
$row=$res->fetch_assoc();

echo $t." ".$f." ".$z;

$conn->close();

echo header('Location : https://etaxcom.000webhostapp.com/select.php')
?>

