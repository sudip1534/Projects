<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();
        if(isset($_SESSION['id']))
            header("Location: ../../customer/customerHomePage.php");
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login</title>

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



            input:focus {
                box-shadow: inset 0 -5px 66px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2);
            }

    </style>

</head>
<link rel="icon" href="img/sw.png">

<body class="login-img3-body">




    <div class="container">




        <a href="../homePage.php">  <img src="img/sw.png" alt="Center" style="width:157.394px;height:192.525px;"> </a>


        <div>&nbsp</div>
        <div>&nbsp</div>
        <div>&nbsp</div>
        <form class="login-form" action="../../customer/customerValidation.php" method="post">
            <div class="login-wrap">
                <p class="login-img"><i class="icon_lock_alt"></i></p>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_profile"></i></span>
                    <input type="text" class="form-control" placeholder="Email" name="email" autofocus required>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>


                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                <button class="btn btn-danger btn-lg btn-block"><a href="../homePage.php">Cancel</a></button>

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
