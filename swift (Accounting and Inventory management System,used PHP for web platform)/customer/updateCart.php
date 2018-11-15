<?php
    session_start();
    include('../mainHome/connection.php');
    $id=$_SESSION['id'];
    $oid=$_GET['oid'];
    $pcode=$_GET['pcode'];
    
    $query="Update Orders
        SET Quantity=1
        where Order_id='$oid' and Customer_id='$id' and Product_code='$pcode'";
    $result=$conn->query($query);
    /*else{
        echo "<script>
            alert('email or password incorrect...');
            window.location.href='../mainHome/login/customerLogin.php';
            </script>";
    }*/
    
    header('Location: cartItems.php');
?>