<?php
session_start();
include('../mainHome/connection.php');
//$title = $_POST['title'];
$f_name = $_POST['f_name'];
//$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
/*
$suffix = $_POST['suffix'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal_code = $_POST['postal_code'];
$country = $_POST['country'];
*/
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
//$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
/*
$fax = $_POST['fax'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$salary = $_POST['salary'];
$birth = $_POST['birth'];
$other = $_POST['other'];
$website = $_POST['website'];
$payment = $_POST['payment'];
$shipping = $_POST['shipping'];
*/

if($password!=$c_password){
    echo "<script>
        alert('Password mismatched');
        window.location.href='../mainHome/homePage.php';
        </script>";
    //echo "Password mismatched";
    exit;
}

/*$query="select Email
    from customer_info
    where Email='$email'";
    $result=$conn->query($query);
if($result->num_rows>=1){
    echo "<script>
        alert('Email already exists');
        window.location.href='../mainHome/homePage.php';
        </script>";
    //echo "Enter different username";
    exit;
}*/

/*$query = "INSERT INTO `customer_info`(`Company_ID`,`Company_name`, `Title`, `First_Name`, `Middle_Name`, `Last_Name`, `Suffix`, `Email`, `phone_num`, `password`, `mobile`, `fax`, `other`, `website`, `Preffered_payment`, `Shipping_Way`, `Status`) VALUES ('$cid','$c_name','$title','$f_name','$m_name','$l_name','$suffix','$email','$phone','$password','$mobile','$fax','$other','$website','$payment','$shipping','Temporary')";*/

$query = "INSERT INTO `customer_info`(`First_Name`, `Last_Name`, `Email`, `password`, `mobile`, `Status`) VALUES ('$f_name','$l_name','$email','$password','$mobile','Temporary')";

if(!mysqli_query($conn,"$query")){
echo "<script>
    alert('Email already exists');
    window.location.href='../mainHome/homePage.php';
    </script>";
//echo "Email already exists";
}
else{
    $query="SELECT max(Customer_id)
    FROM customer_info";
    $result=$conn->query($query);
    $res=$result->fetch_assoc();
    $cus_id=$res['max(Customer_id)'];

    /*$query="INSERT INTO `customer_address`(`Company_ID`, `Customer_id`, `Street`, `City_Town`, `State__Province`, `Postal_Code`, `Country`, `Status`) VALUES ('$cid','$cus_id','$street','$city','$state','$postal_code','$country','Temporary')";*/

    $query="INSERT INTO `customer_address`(`Customer_id`, `Status`) VALUES ('$cus_id','Temporary')";
    $result=$conn->query($query);
    
    foreach ($_POST['c_id'] as $cid){
        $query = "INSERT INTO `Customer_company`(`Company_ID`,`Customer_id`) VALUES ('$cid','$cus_id')";
        $result=$conn->query($query);
    }
    
    /*echo "<script>
        alert('Request Sent.... Check your email for details.... Thank you.......!');
        window.location.href='../mainHome/homePage.php';
        </script>";*/
    
    $_SESSION['id'] = $cus_id;
    $_SESSION['name'] = $f_name." ".$l_name;
	header("Location: customerHomePage.php");
}
?>