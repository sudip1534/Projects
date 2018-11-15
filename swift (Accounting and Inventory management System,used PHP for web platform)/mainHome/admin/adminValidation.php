<?php
    session_start();
    include('../connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT *
        FROM Admin_info
    	where Email='$email' AND password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
    	$res=$result->fetch_assoc();
    	$_SESSION['a_id'] = $res["Admin_Id"];
        $_SESSION['a_name'] = $res["Suffix"]." ".$res["First_Name"]." ".$res["Middle_Name"]." ".$res["Last_Name"];
        header("Location: adminHome.php");
    }
    else{
    	echo "<script>
    		alert('email or password incorrect...');
    		window.location.href='adminLogin.php';
    		</script>";
        //echo "Username or password incorrect...";
    }
?>