<?php
	session_start();
	if(isset($_SESSION['id']))
		session_unset();
	session_destroy();
	echo "<script>
            alert('Logged Out...');
            window.location.href='supplier_login.php';
            </script>";
?>