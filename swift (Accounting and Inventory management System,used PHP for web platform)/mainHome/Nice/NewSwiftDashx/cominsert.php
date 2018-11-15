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
$cn = mysqli_real_escape_string($conn, $_POST['cn']);
$tc= mysqli_real_escape_string($conn, $_POST['tc']);
$ta = mysqli_real_escape_string($conn, $_POST['ta']);

$e= mysqli_real_escape_string($conn, $_POST['e']);
$ph = mysqli_real_escape_string($conn, $_POST['ph']);
$mo = mysqli_real_escape_string($conn, $_POST['mo']);
$fa = mysqli_real_escape_string($conn, $_POST['fa']);
$o = mysqli_real_escape_string($conn, $_POST['o']);
$w = mysqli_real_escape_string($conn, $_POST['w']);
$t = mysqli_real_escape_string($conn, $_POST['t']);
$fn = mysqli_real_escape_string($conn, $_POST['fn']);
$mn = mysqli_real_escape_string($conn, $_POST['mn']);
$ln = mysqli_real_escape_string($conn, $_POST['ln']);
$s = mysqli_real_escape_string($conn, $_POST['s']);
$p = mysqli_real_escape_string($conn, $_POST['p']);
$cp = mysqli_real_escape_string($conn, $_POST['cp']);
$b = mysqli_real_escape_string($conn, $_POST['b']);
$g = mysqli_real_escape_string($conn, $_POST['g']);

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

if($p==$cp) {
$sql = "INSERT INTO company_info (Company_ID,Company_name,Owner_Title,Owner_First_Name, Owner_Middle_Name,Owner_Last_Name,Owner_Suffix,Company_type,Account_type,Email,Phone_number,Mobile,

Fax,Others,Website) VALUES ('$i','$cn','$t', '$fn', '$mn','$ln','$s','$tc','$ta','$e','$ph','$mo','$fa','$o','$w')";

if($conn->query($sql) === TRUE){
  print "Record Added Sucessfully";

 header("location:companyinfo.php");
}
else
{
 echo "Error" . $sql . "<br/>" . $conn->error;
}

$sql4= "INSERT INTO employee_info (Employee_Id,Employee_Title,Employee_First_Name,Employee_Middle_Name,Employee_Last_Name,Employee_Suffix,Company_ID,Email,Phone_number,Mobile,
Designation,Gender,Date_of_Birth) VALUES ('$i','$t','$fn','$mn','$ln','$s','$i','$e','$ph','$mo','owner','$g','$b')";

if($conn->query($sql4) === TRUE){
 //echo "Employee Record Added Sucessfully";
 //header("location:companyinfo.php");
}
else
{
 echo "Error" . $sql4 . "<br/>" . $conn->error;
}

$sql5 = "INSERT INTO login VALUES('$i','$i','$p')";
 
 if($conn->query($sql5) === TRUE){
 //echo "Login Record Added Sucessfully";
 //header("location:companyinfo.php");
}
else
{
 echo "Error" . $sql5 . "<br/>" . $conn->error;
}
 
 
$sql2="INSERT INTO company_address (Company_ID,Street,City_Town,State__Province,Postal_Code,Country,Status) 
VALUES ('$i','$st','$ci','$sta','$pos','$co','Address_1')";

if($conn->query($sql2) === TRUE){
 //echo "Record2 Added Sucessfully";
 //header("location:companyinfo.php");
}
else
{
 echo "Error" . $sql2 . "<br/>" . $conn->error;
}

 
$sql3="INSERT INTO company_address (Company_ID,Street,City_Town,State__Province,Postal_Code,Country,Status) 
VALUES ('$i','$st2','$ci2','$sta2','$pos2','$co2','Address_2')";
 
 if($conn->query($sql3) === TRUE){
 //echo "Record3 Added Sucessfully";
 //header("location:companyinfo.php");
}
else
{
 echo "Error" . $sql3 . "<br/>" . $conn->error;
}
}
else{
	header("location:companyinfo.php");
	echo "password not match with confirm password";
}
$conn->close();
?>