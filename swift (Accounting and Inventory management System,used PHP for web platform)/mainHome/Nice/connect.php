<?php
session_start();
?>

<?php
$userid = $_POST['user'];
$password = $_POST['pass'];

$_SESSION['user'] = $userid;    // change if used anywhere or any other name

$conn = mysqli_connect("localhost", "root", "", "swift");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}

$query = "SELECT * FROM users where id='".$userid."' AND password='".$password."'";
$result = $conn->query($query);

if($result->num_rows==1){

    $res = "";
    $resE="";
    while($row = $result->fetch_assoc()){
        $res = $res .$row["id"]."</br>";
        $resE = $resE .$row["type"]."</br>";
    }
    if(strpos($resE, "c") !== false){
        echo $res;
//        header("Location: homePgOfCustomer.php");
        exit();
    }
    elseif(strpos($resE, "t") !== false) {
        echo $res;
//        header("Location: homePgOfTemporaryCustomer.php");
        exit();
    }
    else{
        echo $_SESSION['user'];
//        header("Location: homePgOfSupplier.php");
        exit();
    }
}
else{
    echo "Username or password incorrect.";
    echo "<script>
             alert('Username or password incorrect.');
             window.history.go(-1);
     </script>";
}
?>