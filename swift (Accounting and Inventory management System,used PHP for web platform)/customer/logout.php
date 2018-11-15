<?php
	session_start();
	if(isset($_SESSION['id']))
		session_unset($_SESSION['id']);
    if(isset($_SESSION['name']))
		session_unset($_SESSION['name']);
	/*echo "<script>
            alert('Logged Out...');
            window.location.href='../mainHome/login/customerLogin.php';
            </script>";*/
    header('Location: ../mainHome/login/customerLogin.php');
?>