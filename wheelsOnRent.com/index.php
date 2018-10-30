<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>

<?php


$cfname = $cdob = $cphone = $cgender = $cemail = $cuname = $cpwd = "";

if(isset($_POST['register'])){


if (empty($_POST["fname"])) {
$cfname = "Name is required";
}else {
$fname = $_POST['fname'];
}


$lname =  $_POST['lname'];

if (empty($_POST["dob"])) {
$cdob = "DOB is required";
}else {
$dob =  $_POST['dob'];
}

if (empty($_POST["phone"])) {
$cphone = "phone number is required";
}else {
$phone= $_POST['phone'];
}

if (empty($_POST["M"])) {
$cgender = "gender is required";
}else {
$gender =  $_POST['M'];
}

if (empty($_POST["email"])) {
$cemail = "email is required";
}else {
$email= $_POST['email'];
}

if (empty($_POST["uname"])) {
$cuname = "username is required";
}else {
$uname= $_POST['uname'];
}

if (empty($_POST["pwd"])) {
$cpwd = "password is required";
}else {
$pwd = $_POST['pwd'];
}

$city= $_POST['city'];
$country= $_POST['state'];
$state =$_POST['country'];
if(!empty($fname) && !empty($dob) && !empty($phone) && !empty($gender) && !empty($email) && !empty($pwd)){
mysqli_select_db($con,"userinformation"); 
$query="insert into registerhere values('$fname','$lname','$phone','$gender','$dob','$email','$uname','$pwd','$city','$country','$state')";
if(mysqli_query($con,$query))
{
echo "data inserted successfully<br>";
}
else{
echo "data not inserted".mysqli_error($con);
}
}
}
?>
<center>
<pre>
<h3> Registration form</h3>
<hr>
<form method="post">
First Name :    <input type ="text" name="fname" /><span class = "error">*<?php echo $cfname;?></span> Last Name : <input type ="text" name="lname">

Date of birth : <input type = "text" name = "dob" placeholder = "yyyy-mm-dd" /><span class = "error">*<?php echo $cdob;?></span>

Mobile Number : <input type ="text" name="phone" /><span class = "error">*<?php echo $cphone;?></span>

Gender :        <input type ="radio" name="M" value = "M" default/>Male
	        <input type ="radio" name="M" value = "FM" />Female<span class = "error">*<?php echo $cgender;?></span>

Email :         <input type ="text" name="email" placeholder="abc@gmail.com" /><span class = "error">* <?php echo $cemail;?></span>

User Name :     <input type ="text" name="uname" /><span class = "error">*<?php echo $cuname;?></span>

Password :      <input type ="password" name="pwd" /><span class = "error">*<?php echo $cpwd;?></span>

City :          <input type ="text" name="city"  />

State :         <input type ="text" name="state"  />

Country :       <input type ="text" name="country"/>

<input type ="submit" name="register" value="submit"/>
</form>
</pre>
</center>
</body>