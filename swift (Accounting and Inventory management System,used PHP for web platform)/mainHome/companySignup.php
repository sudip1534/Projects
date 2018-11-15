<?php
include('connection.php');
$c_name = $_POST['c_name'];
//$title = $_POST['title'];
$f_name = $_POST['f_name'];
//$m_name = $_POST['m_name'];
$l_name = $_POST['l_name'];
/*$suffix = $_POST['suffix'];
$c_type = $_POST['c_type'];
$a_type = $_POST['a_type'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$postal_code = $_POST['postal_code'];
$country = $_POST['country'];
*/$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
//$phone = $_POST['phone'];
$mobile = $_POST['mobile'];
/*$fax = $_POST['fax'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$salary = $_POST['salary'];
$birth = $_POST['birth'];
$other = $_POST['other'];
$website = $_POST['website'];
*/
$plan = $_POST['plan'];
if($password!=$c_password){
    echo "<script>
        alert('Password mismatched');
        window.location.href='homePage.php';
        </script>";
    //echo "Password mismatched";
    exit;
}

/*$query="select Email
    from Company_info
    where Email='$email'";
    $result=$conn->query($query);
if($result->num_rows>=1){
    echo "<script>
        alert('Email already exists');
        window.location.href='homePage.php';
        </script>";
    //echo "Enter different username";
    exit;
}*/

/*$query = "INSERT INTO company_info (`Company_name`, `Owner_Title`, `Owner_First_Name`, `Owner_Middle_Name`, `Owner_Last_Name`, `Owner_Suffix`, `Company_type`, `Account_type`, `Email`, `Phone_number`, `Mobile`, `Fax`, `Others`, `Website`, `Status`, `Price_Plan`) VALUES ('$c_name','$title','$f_name','$m_name','$l_name','$suffix','$c_type','$a_type','$email','$phone','$mobile','$fax','$other','$website','Temporary','$plan')";*/
$query = "INSERT INTO company_info (`Company_name`, `Owner_First_Name`, `Owner_Last_Name`, `Email`, `Mobile`, `Status`, `Price_Plan`) VALUES ('$c_name','$f_name','$l_name','$email','$mobile','Temporary', '$plan')";
if(!mysqli_query($conn,"$query")){
    echo "<script>
        alert('Email already exists');
        window.location.href='homePage.php';
        </script>";
    //echo "Email already exists";
}
else{
    $query="SELECT max(Company_ID)
    FROM company_info";
    $result=$conn->query($query);
    $res=$result->fetch_assoc();
    $cid=$res['max(Company_ID)'];
        
    /*$query="INSERT INTO `company_address`(`Company_ID`, `Street`, `City_Town`, `State__Province`, `Postal_Code`, `Country`, `Status`) VALUES ('$cid','$street','$city','$state','$postal_code','$country','Temporary')";*/

    $query="INSERT INTO `company_address`(`Company_ID`, `Status`) VALUES ('$cid','Temporary')";
    $result=$conn->query($query);

    /*$query = "INSERT INTO `employee_info`(`Company_ID`, `Employee_Title`, `Employee_First_Name`, `Employee_Middle_Name`, `Employee_Last_Name`, `Employee_Suffix`, `Email`, `Phone_Number`, `Mobile`, `Designation`, `Gender`, `Salary`, `Date_of_Birth`) VALUES ('$cid','$title','$f_name','$m_name','$l_name','$suffix','$email','$phone','$mobile','$designation','$gender','$salary','$birth')";*/

    $query = "INSERT INTO `employee_info`(`Company_ID`, `Employee_First_Name`, `Employee_Last_Name`, `Email`, `Mobile`) VALUES ('$cid','$f_name','$l_name','$email','$mobile',)";
    $res=$conn->query($query);
    
    $query="SELECT max(Employee_Id)
    FROM employee_info";
    $result=$conn->query($query);
    $res=$result->fetch_assoc();
    $eid=$res['max(Employee_Id)'];
    
    /*$query = "INSERT INTO `employee_address`(`Company_ID`, `Employee_Id`, `Street`, `City_Town`, `State__Province`, `Postal_Code`, `Country`, `Status`) VALUES ('$cid','$eid','$street','$city','$state','$postal_code','$country','Temporary')";*/

    $query = "INSERT INTO `employee_address`(`Company_ID`, `Employee_Id`, `Status`) VALUES ('$cid','$eid','Temporary')";
    $res=$conn->query($query);
    
    $query = "INSERT INTO `login`(`Employee_Id`, `Company_ID`, `Passward`) VALUES ('$eid','$cid','$password')";
    $res=$conn->query($query);
    
    echo "<script>
        alert('Request Sent.... Check your email for details.... Thank you.......!');
        window.location.href='homePage.php';
        </script>";
}	
?>