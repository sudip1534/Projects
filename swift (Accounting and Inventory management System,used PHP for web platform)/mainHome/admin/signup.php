<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Singup</title>

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




        <a href="../main_home/index.php">  <img src="img/sw.png" alt="Center" style="width:157.394px;height:192.525px;"> </a>


        <div>&nbsp</div>
        <div>&nbsp</div>
        <div>&nbsp</div>
        <form class="login-form" action="customer_validation.php" method="post">
            <div class="login-wrap">
              
                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Company Name" name="company_name" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="First Name" name="first_name" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" autofocus>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Company Type" name="company_type" autofocus>
                </div>
                 <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Account Type" name="account_type" autofocus>
                </div>


                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="text" class="form-control" placeholder="Email" name="email" autofocus>
                </div>
                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>

                <div class="input-group">
                    <span class="input-group-addon"></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password">
                </div>
                
            </label>


                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                <button class="btn btn-danger btn-lg btn-block"><a href="../main_home/index.php">Cancel</a></button>

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
                <a href="">Powered by <b>Javandro</b><br />
                Copyright &copy; 2017 Javandro. All rights reserved.</a>
            </div>
        </div>
    </div>


</body>

</html>
