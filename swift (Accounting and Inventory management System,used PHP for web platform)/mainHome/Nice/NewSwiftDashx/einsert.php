<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "swift";
 
//Creating connection for mysqli
 
$conn = new mysqli($server, $user, $pass, $dbname);
 
//Checking connection
 
if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}
$i = mysqli_real_escape_string($conn, $_POST['i']);
$t = mysqli_real_escape_string($conn, $_POST['t']);
$fn = mysqli_real_escape_string($conn, $_POST['fn']);
$mn = mysqli_real_escape_string($conn, $_POST['mn']);
$ln = mysqli_real_escape_string($conn, $_POST['ln']);
$s = mysqli_real_escape_string($conn, $_POST['s']);
$p = mysqli_real_escape_string($conn, $_POST['p']);
$cp = mysqli_real_escape_string($conn, $_POST['cp']);
$g = mysqli_real_escape_string($conn, $_POST['g']);
$b = mysqli_real_escape_string($conn, $_POST['b']);
$ad= mysqli_real_escape_string($conn, $_POST['ad']);
$rd = mysqli_real_escape_string($conn, $_POST['rd']);
$e= mysqli_real_escape_string($conn, $_POST['e']);
$ph = mysqli_real_escape_string($conn, $_POST['ph']);
$mo = mysqli_real_escape_string($conn, $_POST['mo']);

$st = mysqli_real_escape_string($conn, $_POST['st']);
$ci = mysqli_real_escape_string($conn, $_POST['ci']);
$sta = mysqli_real_escape_string($conn, $_POST['sta']);
$pos = mysqli_real_escape_string($conn, $_POST['pos']);
$co = mysqli_real_escape_string($conn, $_POST['co']);

if($p==$cp) {
$sql = "INSERT INTO employee_info  VALUES ('$i','$t','$fn','$mn','$ln','$s','$p','011151','$e','$ph','$mo','new','$g',30000.00,'$b','$ad','$rd')";
 
 
 if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}
 
$sql2="INSERT INTO employee_address (Employee_Id,Street,City_Town,State_Province,Postal_Code,Country,Status) 
VALUES ('$i','$st','$ci','$sta','$pos','$co','Billing_Address')";
 
if($conn->query($sql2) === TRUE){
 echo "Record2 Added Sucessfully";
}
else
{
 echo "Error" . $sql2 . "<br/>" . $conn->error;
}
 }
else{
	
	echo "password not match with confirm password";
}

$conn->close();
?>