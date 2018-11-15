<?php
    session_start();
    include('../mainHome/connection.php');
    $id=$_SESSION['id'];
    $pid = $_GET['pid'];
    $quan = $_GET['quantity'];

    $query = "SELECT Order_id, Status
        FROM Orders
        where Customer_id='$id' and Status='cart'
        order by Order_id desc
        limit 0,1";
    $result = $conn->query($query);
    if($result->num_rows==1){
        $res=$result->fetch_assoc();
        $oid=$res["Order_id"];
    }
    else{
        $query = "SELECT max(Order_id)
            FROM Orders
            where Customer_id='$id'";
        $result = $conn->query($query);
        if($result->num_rows==1){
            $res=$result->fetch_assoc();
            $oid=$res["max(Order_id)"];
            $oid++;
        }
        else{
            $oid=1;
        }
    }
    $query = "SELECT Product_code, Company_ID, Sales_Rate
            FROM Inventory
            where Product_id='$pid'";
        $result = $conn->query($query);
        if($result->num_rows==1){
            $res=$result->fetch_assoc();
            $pcode=$res["Product_code"];
            $cid=$res["Company_ID"];
            $price=$res["Sales_Rate"];
        }
        
        $query="INSERT INTO Orders(`Order_id`,`Customer_id`,`Product_code`,`Unit_price`,`Quantity`,`Status`) VALUES ('$oid','$id','$pcode','$price','$quan','cart')";
        $result=$conn->query($query);
    /*else{
        echo "<script>
            alert('email or password incorrect...');
            window.location.href='../mainHome/login/customerLogin.php';
            </script>";
    }*/

    header('Location: customerHomePage.php#p_list');
?>