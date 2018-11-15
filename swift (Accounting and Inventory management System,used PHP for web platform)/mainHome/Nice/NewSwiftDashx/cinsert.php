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
$p = mysqli_real_escape_string($conn, $_POST['cp']);
$cp = mysqli_real_escape_string($conn, $_POST['p']);
$e= mysqli_real_escape_string($conn, $_POST['e']);
$ph = mysqli_real_escape_string($conn, $_POST['ph']);
$mo = mysqli_real_escape_string($conn, $_POST['mo']);
$fa = mysqli_real_escape_string($conn, $_POST['fa']);
$o = mysqli_real_escape_string($conn, $_POST['o']);
$w = mysqli_real_escape_string($conn, $_POST['w']);
$st = mysqli_real_escape_string($conn, $_POST['st']);
$ci = mysqli_real_escape_string($conn, $_POST['ci']);
$sta = mysqli_real_escape_string($conn, $_POST['sta']);
$pos = mysqli_real_escape_string($conn, $_POST['pos']);
$co = mysqli_real_escape_string($conn, $_POST['co']);
$st2 = mysqli_real_escape_string($conn, $_POST['st2']);
$ci2 = mysqli_real_escape_string($conn, $_POST['ci2']);
$sta2 = mysqli_real_escape_string($conn, $_POST['sta2']);
$pos2= mysqli_real_escape_string($conn, $_POST['pos2']);
$co2 = mysqli_real_escape_string($conn, $_POST['co2']);
$pre = mysqli_real_escape_string($conn, $_POST['pre']);
$shi = mysqli_real_escape_string($conn, $_POST['shi']);
if($p==$cp) {
$sql = "INSERT INTO customer_info (Customer_id,Title, First_Name, Middle_Name,Last_Name,Suffix,email,phone_num,password,mobile,
fax,other,website,Preffered_payment,Shipping_Way) VALUES ('$i','$t', '$fn', '$mn','$ln','$s','$e','$ph','$p','$mo','$fa','$o','$w','$pre','$shi')";

if($conn->query($sql) === TRUE){
 echo "Record Added Sucessfully";
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}

 
$sql2="INSERT INTO customer_address (Customer_id,Street,City_Town,State_Province,Postal_Code,Country,Status) 
VALUES ('$i','$st','$ci','$sta','$pos','$co','Billing_Address')";

if($conn->query($sql2) === TRUE){
 echo "Record2 Added Sucessfully";
}
else
{
 echo "Error" . $sql2 . "<br/>" . $conn->error;
}

 
$sql3="INSERT INTO customer_address (Customer_id,Street,City_Town,State_Province,Postal_Code,Country,Status) 
VALUES ('$i','$st2','$ci2','$sta2','$pos2','$co2','Shipping_Address')";
 
 if($conn->query($sql3) === TRUE){
 echo "Record3 Added Sucessfully";
}
else
{
 echo "Error" . $sql3 . "<br/>" . $conn->error;
}
}
else{
	
	echo "password not match with confirm password";
}
$conn->close();
?>