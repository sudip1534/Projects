<?php
   include("confi.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Employee_id, Company_ID FROM Login WHERE Employee_id = '$myusername' and Company_ID = 'coid03' and Passward = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
        
         
         header("location: dashboard.php");
         $error = "Your Login Name or Password";
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<style>
    img { 
    
    position: absolute;
    top: 6%;
    left: 44%;
    width: 50%;
    
    margin: 0 auto;
    }


input:focus { box-shadow: inset 0 -5px 66px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

	.btn btn-primary btn-lg btn-block{
		color: white;
	}
.btn-primary {
    color: #fff;
    background-color: #007aff;
    border-color: #007aff;
}


.login-form a {
    color: #fff !important;
}






</style>

</head>
<link rel="icon" href="img/sw.png">
  <body class="login-img3-body">

    
    
  
    <div class="container">




<a href="http://www.w3.org/">  <img src="img/sw.png" alt="Center" style="width:157.394px;height:192.525px;"> </a>

            
        <div>&nbsp</div>
        <div>&nbsp</div>
        <div>&nbsp</div>
      <form class="login-form">        
		<div>
		
			<a href="login_employee.php"  class="btn btn-primary btn-lg btn-block" >Employee Login</a></br>
			<a href="login_customer.php"  class="btn btn-primary btn-lg btn-block" >Customer Login</a></br>
			<a href="login_supplier.php"  class="btn btn-primary btn-lg btn-block">Supplier Login</a></br>
			
			
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Powered by <b>Javandro</b><br />
                Copyright &copy; 2017 Javandro. All rights reserved.</a>
            </div>
        </div>
    </div>


  </body>
</html>
