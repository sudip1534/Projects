<?php
	session_start();
	if(isset($_SESSION['a_id']))
		session_unset($_SESSION['a_id']);
	if(isset($_SESSION['a_name']))
		session_unset($_SESSION['a_name']);
	/*echo "<script>
            alert('Logged Out...');
            window.location.href='adminLogin.php';
            </script>";*/
    header('Location: adminLogin.php');
?>