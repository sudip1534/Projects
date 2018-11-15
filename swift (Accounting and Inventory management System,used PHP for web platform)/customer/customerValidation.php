<?php
    session_start();
    include('../mainHome/connection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT *
        FROM customer_info
        where Email='$email' AND password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        $res=$result->fetch_assoc();
        $cid=$res["Company_ID"];
        $_SESSION['id'] = $res["Customer_id"];
        $_SESSION['name'] = $res["Suffix"]." ".$res["First_Name"]." ".$res["Middle_Name"]." ".$res["Last_Name"];
        header("Location: customerHomePage.php");
    }
    else{
        echo "<script>
            alert('email or password incorrect...');
            window.location.href='../mainHome/login/customerLogin.php';
            </script>";
        //echo "Username or password incorrect...";
    }
?>