<?php
	include('../connection.php');
	$cid=$_GET['cid'];
	$grant=$_GET['grant'];
	if($grant=='yes'){
		$query="update Company_info
				set Status = 'Permanent'
				where Company_ID = '$cid'";
	    $result=$conn->query($query);
	    /*echo "<script>
            alert('approved...');
            window.location.href='adminHome.php';
            </script>";*/
	}
	else{
		$query="delete from Company_info
				where Company_ID = '$cid'";
	    $result=$conn->query($query);
	    /*echo "<script>
            alert('Deleted...');
            window.location.href='adminHome.php';
            </script>";*/
	}
	header("Location: adminHome.php");
?>