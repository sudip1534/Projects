<?php
session_start();
require 'supplier_login.php';
$email = $_POST['email'];
$password = $_POST['password'];


$conn = mysqli_connect("localhost", "root", "", "swift");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}


$query = "SELECT *
    FROM supplier_info
	where Email='$email' AND password='$password'";
$result = $conn->query($query);
if($result->num_rows==1){
	$res=$result->fetch_assoc();
    $cid=$res["Company_ID"];
	$_SESSION['id'] = $res["Supplier_id"];
    $_SESSION['name'] = $res["Suffix"]." ".$res["First_Name"]." ".$res["Middle_Name"]." ".$res["Last_Name"];
    $query = "SELECT Company_name
        FROM company_info
        where Company_ID='$cid'";
    $result = $conn->query($query);
    $res=$result->fetch_assoc();
    $_SESSION['cname'] = $res["Company_name"];
 	header("Location: supplier_home.php");
}
else{
	echo "<script>
		alert('email or password incorrect...');
		window.location.href='supplier_login.php';
		</script>";
    //echo "Username or password incorrect...";
}
?>