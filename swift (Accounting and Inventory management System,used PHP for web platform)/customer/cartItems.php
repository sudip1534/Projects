<!DOCTYPE HTML>
<html>

<head>
    <?php
        session_start();
        include('../mainHome/connection.php');
        if(!isset($_SESSION['id']))
            header("Location: ../mainHome/login/customerLogin.php");
        $id=$_SESSION['id'];
        $name=$_SESSION['name'];
    ?>
        <title>Swift</title>
        <!--css-->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/myStyle.css" rel="stylesheet">
        <!--css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
        <script src="js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <!--search jQuery-->
        <script src="js/main.js"></script>
        <!--search jQuery-->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function() {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });

        </script>
        <!--mycart-->
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
        <!-- cart -->
        <script src="js/simpleCart.min.js"></script>
        <!-- cart -->
        <!--start-rate-->
        <script src="js/jstarbox.js"></script>
        <link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function() {
                jQuery('.starbox').each(function() {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function(event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });

        </script>
        <!--//End-rate-->

        <style>
            #pgend {
                position: fixed;
                left: 0;
                bottom: 0;
            }

        </style>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-left">
                    <a href="#"> Help : <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> swift@javandro.com </a>
                </div>
                <div class="top-right">
                    <ul>
                        <li><a href="cartItems.php"> <span class="glyphicon glyphicon-check"></span>Checkout</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/propic.jpg" alt=" "> </a>
                            <ul class="dropdown-menu multi-column columns-2">
                                <div class="row">
                                    <div class="col-md-9">
                                        <ul class="multi-column-dropdown">
                                            <li><a href="cstmrProfile.php"><span class="glyphicon glyphicon-user" ></span> Profile</a></li>
                                            <li><a href=""><span class="glyphicon glyphicon-envelope" ></span> Massages</a></li>
                                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out" ></span> log out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="heder-bottom">
            <div class="container">
                <div class="logo-nav">
                    <div class="logo-nav-left">
                        <h1><a href="customerHomePage.php">Swift <span>javandro</span></a></h1>
                    </div>
                    <div class="logo-nav-left1">
                        <nav class="navbar navbar-default">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav">
                                    <!-- Mega Menu -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-2">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <ul class="multi-column-dropdown">
                                                        <li>
                                                            <a href="customerHomePage.php">
                                                                <h5>&nbsp;&nbsp;&nbsp;&nbsp; All Companies</h5>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            $count=0;
                                                            $query = "select Company_ID, Company_name
                                                                from Customer_company natural join Company_info
                                                                where Customer_id='$id'
                                                                order by Company_name
                                                                limit $count,1";
                                                            $result = $conn->query($query);
                                                            while ($result->num_rows==1){
                                                                $res = $result->fetch_assoc();
                                                                $cid=$res["Company_ID"];
                                                                $cname=$res["Company_name"];
                                                        ?>
                                                            <li><a href="customerCompanyPage.php?cid=<?php echo $cid; ?>&cname=<?php echo $cname; ?>">&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $cname; ?></a></li>
                                                            <?php
                                                            $count++;
                                                            $query = "select Company_ID, Company_name
                                                                from Customer_company natural join Company_info
                                                                where Customer_id='$id'
                                                                order by Company_name
                                                                limit $count,1";
                                                                $result = $conn->query($query);
                                                            }
                                                        ?>
                                                    </ul>
                                                </div>
                                                <!--<div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="images/woo2.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="images/woo3.jpg" alt=" "/></a>
                                            </div>-->
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category<b class="caret"></b></a>
                                        <ul class="dropdown-menu multi-column columns-3">
                                            <div class="row">
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Audio & Videos</h6>
                                                        <li><a href="">TVs</a></li>
                                                        <li><a href="">Camera</a></li>
                                                        <li><a href="">Smart Phone</a></li>
                                                        <li><a href="">Tablet</a></li>
                                                        <li><a href=""> MP3/mp4</a></li>
                                                        <li><a href="">Home Theater</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Computing</h6>
                                                        <li><a href="">Computer Accessories</a></li>
                                                        <li><a href="">Laptop </a></li>
                                                        <li><a href="">WIFI</a></li>
                                                        <li><a href="">Storages</a></li>
                                                        <li><a href="">Printers</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Home & Living</h6>
                                                        <li><a href="">Furniture</a></li>
                                                        <li><a href="">Bedding</a></li>
                                                        <li><a href="">Appliences</a></li>
                                                        <li><a href="">Car</a></li>
                                                        <li><a href="">Bike</a></li>
                                                        <li><a href="">Books</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-sm-3  multi-gd-img">
                                                    <ul class="multi-column-dropdown">
                                                        <h6>Health</h6>
                                                        <li><a href="">Medicine</a></li>
                                                        <li><a href="">Medical Equipment</a></li>
                                                        <li><a href="">Fitness</a></li>
                                                        <li><a href="">Skin Care</a></li>
                                                        <li><a href="">Personal Care</a></li>
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </ul>
                                    </li>
                                    <li><a href="">Mail Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="logo-nav-right">
                        <ul class="cd-header-buttons">
                            <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                        </ul>
                        <!-- cd-header-buttons -->
                        <div id="cd-search" class="cd-search">
                            <form action="#" method="post">
                                <input name="Search" type="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                    <div class="header-right2">
                        <div class="cart box_1">
                            <a href="cartItems.php">
                                <h3>
                                    <div class="total">
                                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                    <img src="images/bag.png" alt="" />
                                </h3>
                            </a>
                            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
    <!--header-->

    <div class="container-fluid">
        <div class="row">
            <nav id="sideNav" class="col-lg-3">
                <h3>Cart</h3>
                <ul style="padding: 10%">
                    <li id="li_s"><a id="li_s" href="customerOrderList.php">Order List</a></li>
                    <li id="li_s"><a id="li_s" href="customerInvoiceList.php">Invoice List</a></li>
                    <li id="li_s"><a id="li_s" href="customerPaymentList.php">Payment List</a></li>
                </ul>
            </nav>

            <div id="mainContent" style="padding: 5px 15px;">
                <div class="container">
                    <h2>Cart List</h2>
                    <p></p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th style="color: black">Product Name</th>
                                <th style="color: black">Quantity</th>
                                <th style="color: black">Product Price </th>
                                <th style="color: black">Total Price</th>
                                <th style="color: black">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "select *
                                    from Orders
                                    where Customer_id='$id' and Status='cart'
                                    order by Order_id desc";
                                $result = $conn->query($query);
                                $count=0;
                                while ($res = $result->fetch_assoc()){
                                    $pcode=$res["Product_Code"];
                                    $price=$res["Unit_price"];
                                    $quantity=$res["Quantity"];
                                    $oid=$res["Order_id"];
                                    $query = "SELECT Product_name
                                        FROM Inventory
                                        where Product_code='$pcode'";
                                    $resu = $conn->query($query);
                                    if($resu->num_rows==1){
                                        $res=$resu->fetch_assoc();
                                        $pname=$res["Product_name"];
                                    }
                            ?>
                                <tr>
                                    <td><?php echo $pname; ?></td>
                                    
                                    <form action="" name="update" method="post">
                                    <td><input id="quan" type="number" onchange="quantity(this.value)" value="<?php echo $quantity; ?>" name="quantity" min="1"></td>
                                    </form>

                                    <td><?php echo $price; ?></td>
                                    <td><span id="total"><?php echo $price*$quantity; ?></span></td>
                                    <td>
                                    
                                    <button type="submit" form="update" name="up" class="glyphicon glyphicon-refresh"></button>
                                    <form action="" name="update" method="post">
                                    <button type="submit" name="del" class="glyphicon glyphicon-remove"></button>
                                    </form>

                                    <script type="text/javascript">
                                        function quantity(val) {
                                            if (val == null || val < 1) {
                                                document.getElementById('quan').value = 1;
                                            }

                                    </script>
                                    
                                    <?php
                                        if(isset($_POST['up'])){
                                            $q=$_POST['quantity'];
                                            $query="Update Orders
                                                SET Quantity=$q
                                                where Order_id='$oid' and Customer_id=$id and Product_code=$pcode";
                                            $conn->query($query);
                                    ?>
                                    <?php
                                        }
                                        else if(isset($_POST['del'])){
                                            $query="Delete from Orders
                                                where Order_id='$oid' and Customer_id=$id and Product_code=$pcode";
                                            $conn->query($query);   
                                        }
                                    ?>
                                    
                                    </td>
                                </tr>
                            <?php
                                $count++;
                                }
                            ?>
                        </tbody>
                    </table>
                    <?php
                        if($count>0){
                    ?>
                        <a href="order.php?oid=<?php echo $oid; ?>"><button class="btn btn-success btn-sm">Order</button></a>
                        <a href="emptyCart.php?oid=<?php echo $oid; ?>"><button class="btn btn-danger btn-sm" >Empty Cart</button></a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
