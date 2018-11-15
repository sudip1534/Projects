<?php
    session_start();
    include('../mainHome/connection.php');
    $id=$_SESSION['id'];
    $oid=$_GET['oid'];
    
    $query="Delete from Orders
        where Order_id='$oid' and Customer_id='$id'";
    $result=$conn->query($query);
    /*else{
        echo "<script>
            alert('email or password incorrect...');
            window.location.href='../mainHome/login/customerLogin.php';
            </script>";
    }*/
    
    header('Location: customerOrderList.php');
?>