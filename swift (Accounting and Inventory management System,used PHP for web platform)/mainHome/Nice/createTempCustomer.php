<?php
session_start();
?>

<?php
$userid = $_POST['user'];
$password = $_POST['pass'];
$mail = $_POST['mail'];

$conn = mysqli_connect("localhost", "root", "", "swift");

if($conn->connect_errno > 0){
    die("Unable to connect: ". $conn->connect_error);
}

$query = "insert into Customer_info";  // insert query for temporary customer
$result = $conn->query($query);

if($result->num_rows==1){
    // pop up window write inserted
}
else{
    echo "<script>
             alert('Try Again please');
             window.history.go(-1);
     </script>";
}
?>