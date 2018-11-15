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
                                            <li><a href="customerProfile.php"><span class="glyphicon glyphicon-user" ></span> Profile</a></li>
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
                        <a href="customerHomePage.php"><img src="images/logo2.png" alt="" style="width:58.2253px;height:71.1844px;"></a>
                        <!-- <h1><a href="customerHomePage.php">Swift <span>javandro</span></a></h1> -->
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
                                                       <li><a href="customerHomePage.php"><h5>&nbsp;&nbsp;&nbsp;&nbsp; All Companies</h5></a></li>
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
                <h3>All Companies</h3>
                <ul style="padding: 10%">
                    <li id="li_s"><a id="li_s" href="customerOrderList.php">Order List</a></li>
                    <li id="li_s"><a id="li_s" href="customerInvoiceList.php">Invoice List</a></li>
                    <li id="li_s"><a id="li_s" href="customerPaymentList.php">Payment List</a></li>
                </ul>
            </nav>

            <div id="mainContent" class="col-lg-9">
                <!--banner-->
                <div class="banner-w3">
                    <div class="demo-1">
                        <div id="example1" class="core-slider core-slider__carousel example_1">
                            <div class="core-slider_viewport">
                                <div class="core-slider_list">
                                    <div class="core-slider_item">
                                        <img src="images/b1.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="core-slider_item">
                                        <img src="images/b2.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="core-slider_item">
                                        <img src="images/b3.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="core-slider_item">
                                        <img src="images/b4.jpg" class="img-responsive" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="core-slider_nav">
                                <div class="core-slider_arrow core-slider_arrow__right"></div>
                                <div class="core-slider_arrow core-slider_arrow__left"></div>
                            </div>
                            <div class="core-slider_control-nav"></div>
                        </div>
                    </div>
                    <link href="css/coreSlider.css" rel="stylesheet" type="text/css">
                    <script src="js/coreSlider.js"></script>
                    <script>
                        $('#example1').coreSlider({
                            pauseOnHover: false,
                            interval: 3000,
                            controlNavEnabled: true
                        });

                    </script>

                </div>
                <!--banner-->
                <!--New-Arrivals-->
                <div class="new-arrivals-w3agile">
                    <div class="container">
                        <h2 class="tittle">New Arrivals</h2>
                        <div id="p_list" class="arrivals-grids">
                           <?php
                                $count=0;
                                $query = "select *
                                    from Inventory natural join Customer_company
                                    where Customer_id='$id'
                                    order by Product_id desc";
                                $result = $conn->query($query);
                                while(($res = $result->fetch_assoc()) && $count<4){
                                    $pid=$res["Product_id"];
                                    $pname=$res["Product_name"];
                                    $num=$res["Quantity_in_hand"];
                                    $cat=$res["Category"];
                                    $price=$res["Sales_Rate"];
                           ?>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div class="grid-arrival">
                                        <figure>
                                            <a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
                                                <?php
                                                    if($cat=="food"){
                                                ?>
                                                <div class="grid-img">
                                                    <img src="images/burger1.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/buger.jpg" class="img-responsive" alt="">
                                                </div>
                                                <?php
                                                    }
                                                    else if($cat=="mobile"){
                                                ?>
                                                <div class="grid-img">
                                                    <img src="images/mobile1.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/mobile.jpeg" class="img-responsive" alt="">
                                                </div>
                                                <?php
                                                    }
                                                    else if($cat=="bike"){
                                                ?>
                                                <div class="grid-img">
                                                    <img src="images/bike1.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/bike.jpg" class="img-responsive" alt="">
                                                </div>
                                                <?php
                                                    }
                                                    else if($cat=="shirt"){
                                                ?>
                                                <div class="grid-img">
                                                    <img src="images/p10.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/p9.jpg" class="img-responsive" alt="">
                                                </div>
                                                <?php
                                                    }
                                                ?>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <!--<div class="ribben1">
                                        <p>SALE</p>
                                    </div>-->
                                    <?php
                                        if($num==0){
                                    ?>
                                    <div class="ribben2">
                                        <p>OUT OF STOCK</p>
                                    </div>
                                    <?php
                                        }
                                    ?>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6><a href="single.php?pid=<?php echo $pid; ?>"><?php echo $pname; ?></a></h6>
                                        <?php
                                            if($cat=="shirt"){
                                        ?>
                                        <span class="size">XL / XXL / S </span>
                                        <?php
                                            }
                                        ?>
                                        <p><!--<del>100.00 BDT</del>--><em class="item_price"><?php echo $price; ?> BDT</em></p>
                                        <a href="addToCart.php?pid=<?php echo $pid; ?>&quantity=1" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $count++;
                                }
                            ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--New-Arrivals-->
                <!--New Products-->
                <div class="product-agile">
                    <div class="container">
                        <h3 class="tittle1"> New Products</h3>
                        <div class="slider">
                            <div class="callbacks_container">
                                <ul class="rslides" id="slider">
                                    <li>
                                        <div class="caption">
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p14.jpg";
                                                        $img2 = "images/p13.jpg";
                                                        $price = "700.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src="<?php echo $img1 ?>" class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src="<?php echo $img2 ?>" class="img-responsive" alt="">
                                                                </div>
                                                        </figure>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><em class="item_price"><?php echo $price ?>BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p15.jpg";
                                                        $img2 = "images/p16.jpg";
                                                        $price = "70.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src="<?php echo $img1; ?>" class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src="<?php echo $img2 ?>" class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>NEW</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p18.jpg";
                                                        $img2 = "images/p17.jpg";
                                                        $price = "70.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?> class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben1">
                                                        <p>SALE</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p20.jpg";
                                                        $img2 = "images/p19.jpg";
                                                        $price = "80.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?> class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>-20%</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="caption">
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p21.jpg";
                                                        $img2 = "images/p22.jpg";
                                                        $price = "90.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?> class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p24.jpg";
                                                        $img2 = "images/p23.jpg";
                                                        $price = "70.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?> class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>NEW</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p26.jpg";
                                                        $img2 = "images/p25.jpg";
                                                        $price = "60.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?> class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>-40%</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 cap-left simpleCart_shelfItem">
                                                <div class="grid-arr">
                                                    <div class="grid-arrival">
                                                        <figure>
                                                            <?php
                                                        // use query to retrieve product info and save in this variables
                                                        $img1 = "images/p10.jpg";
                                                        $img2 = "images/p9.jpg";
                                                        $price = "100.00";
                                                        $proName = "Product Name";
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img1 ?> class="img-responsive" alt="">
                                                                </div>
                                                                <div class="grid-img">
                                                                    <img src=<?php echo $img2 ?>class="img-responsive" alt="">
                                                                </div>
                                                                </a>
                                                        </figure>
                                                    </div>
                                                    <div class="ribben">
                                                        <p>NEW</p>
                                                    </div>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="women">
                                                        <h6>
                                                            <?php
                                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                                        echo $proName ?></a>
                                                        </h6>
                                                        <span class="size">XL / XXL / S </span>
                                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Products-->
                <!-- Best Sellers-->
                <div class="new-arrivals-w3agile">
                    <div class="container">
                        <h3 class="tittle1">Best Sellers</h3>
                        <div class="arrivals-grids">
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div class="grid-arrival">
                                        <figure>
                                            <?php
                                        // use query to retrieve product info and save in this variables
                                        $img1 = "images/p28.jpg";
                                        $img2 = "images/p27.jpg";
                                        $price = "70.00";
                                        $proName = "Product Name";
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                <div class="grid-img">
                                                    <img src="images/p28.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/p27.jpg" class="img-responsive" alt="">
                                                </div>
                                                </a>
                                        </figure>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <div class="ribben1">
                                        <p>SALE</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6>
                                            <?php
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                        echo $proName ?></a>
                                        </h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div class="grid-arrival">
                                        <figure>
                                            <?php
                                        // use query to retrieve product info and save in this variables
                                        $img1 = "images/p30.jpg";
                                        $img2 = "images/p29.jpg";
                                        $price = "80.00";
                                        $proName = "Product Name";
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                <div class="grid-img">
                                                    <img src="images/p30.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/p29.jpg" class="img-responsive" alt="">
                                                </div>
                                                </a>
                                        </figure>
                                    </div>
                                    <div class="ribben2">
                                        <p>OUT OF STOCK</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6>
                                            <?php
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                        echo $proName ?></a>
                                        </h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div class="grid-arrival">
                                        <figure>
                                            <?php
                                        // use query to retrieve product info and save in this variables
                                        $img1 = "images/s2.jpg";
                                        $img2 = "images/s1.jpg";
                                        $price = "70.00";
                                        $proName = "Product Name";
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                <div class="grid-img">
                                                    <img src="images/s2.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/s1.jpg" class="img-responsive" alt="">
                                                </div>
                                                </a>
                                        </figure>
                                    </div>
                                    <div class="ribben1">
                                        <p>SALE</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6>
                                            <?php
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                        echo $proName ?></a>
                                        </h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                                <div class="grid-arr">
                                    <div class="grid-arrival">
                                        <figure>
                                            <?php
                                        // use query to retrieve product info and save in this variables
                                        $img1 = "images/s4.jpg";
                                        $img2 = "images/s3.jpg";
                                        $price = "70.00";
                                        $proName = "Product Name";
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                                <div class="grid-img">
                                                    <img src="images/s4.jpg" class="img-responsive" alt="">
                                                </div>
                                                <div class="grid-img">
                                                    <img src="images/s3.jpg" class="img-responsive" alt="">
                                                </div>
                                                </a>
                                        </figure>
                                    </div>
                                    <div class="ribben">
                                        <p>NEW</p>
                                    </div>
                                    <div class="block">
                                        <div class="starbox small ghosting"> </div>
                                    </div>
                                    <div class="women">
                                        <h6>
                                            <?php
                                        echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                        echo $proName ?></a>
                                        </h6>
                                        <span class="size">XL / XXL / S </span>
                                        <p><em class="item_price"><?php echo $price ?> BDT</em></p>
                                        <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--Best Sellers-->
            </div>
        </div>
    </div>
    <!--copy-->
    <div class="copy-section">
        <div class="container">
            <div class="copy-left">
                <p>&copy; Swift . All rights reserved | Design by <a href="http://w3layouts.com">javandro</a></p>
            </div>
            <div class="copy-right">
                <img src="images/card.png" alt="" />
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--copy-->

    <!--Add company"s name with product name-->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="news-gr">
                        <div class="col-md-5 new-grid1">
                            <img src="images/p5.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 new-grid">
                            <h5>Product Name</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class="color-quality">
                                <div class="color-quality-left">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href="#"><span></span>Red</a></li>
                                        <li><a href="#" class="brown"><span></span>Blue</a></li>
                                        <li><a href="#" class="purple"><span></span>Purple</a></li>
                                        <li><a href="#" class="gray"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class="color-quality-right">
                                    <h6>Quality :</h6>
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus1">&nbsp;</div>
                                            <div class="entry value1"><span>1</span></div>
                                            <div class="entry value-plus1 active">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        $('.value-plus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) + 1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) - 1;
                                            if (newVal >= 1) divUpd.text(newVal);
                                        });

                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <p><del>100.00 BDT</del><em class="item_price"> 70.00 BDT</em></p>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="news-gr">
                        <div class="col-md-5 new-grid1">
                            <img src="images/p7.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 new-grid">
                            <h5>Product Name</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class="color-quality">
                                <div class="color-quality-left">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href="#"><span></span>Red</a></li>
                                        <li><a href="#" class="brown"><span></span>Blue</a></li>
                                        <li><a href="#" class="purple"><span></span>Purple</a></li>
                                        <li><a href="#" class="gray"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class="color-quality-right">
                                    <h6>Quality :</h6>
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus1">&nbsp;</div>
                                            <div class="entry value1"><span>1</span></div>
                                            <div class="entry value-plus1 active">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        $('.value-plus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) + 1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) - 1;
                                            if (newVal >= 1) divUpd.text(newVal);
                                        });

                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <p><del>100.00 BDT</del><em class="item_price"> 70.00 BDT </em></p>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="news-gr">
                        <div class="col-md-5 new-grid1">
                            <img src="images/p10.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 new-grid">
                            <h5>Product Name</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class="color-quality">
                                <div class="color-quality-left">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href="#"><span></span>Red</a></li>
                                        <li><a href="#" class="brown"><span></span>Blue</a></li>
                                        <li><a href="#" class="purple"><span></span>Purple</a></li>
                                        <li><a href="#" class="gray"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class="color-quality-right">
                                    <h6>Quality :</h6>
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus1">&nbsp;</div>
                                            <div class="entry value1"><span>1</span></div>
                                            <div class="entry value-plus1 active">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        $('.value-plus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) + 1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) - 1;
                                            if (newVal >= 1) divUpd.text(newVal);
                                        });

                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <p><del>100.00 BDT</del><em class="item_price"> 70.00 BDT</em></p>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-info">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="news-gr">
                        <div class="col-md-5 new-grid1">
                            <img src="images/p12.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="col-md-7 new-grid">
                            <h5>Product Name</h5>
                            <h6>Quick Overview</h6>
                            <span>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
                            <div class="color-quality">
                                <div class="color-quality-left">
                                    <h6>Color : </h6>
                                    <ul>
                                        <li><a href="#"><span></span>Red</a></li>
                                        <li><a href="#" class="brown"><span></span>Blue</a></li>
                                        <li><a href="#" class="purple"><span></span>Purple</a></li>
                                        <li><a href="#" class="gray"><span></span>Violet</a></li>
                                    </ul>
                                </div>
                                <div class="color-quality-right">
                                    <h6>Quality :</h6>
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus1">&nbsp;</div>
                                            <div class="entry value1"><span>1</span></div>
                                            <div class="entry value-plus1 active">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!--quantity-->
                                    <script>
                                        $('.value-plus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) + 1;
                                            divUpd.text(newVal);
                                        });

                                        $('.value-minus1').on('click', function() {
                                            var divUpd = $(this).parent().find('.value1'),
                                                newVal = parseInt(divUpd.text(), 10) - 1;
                                            if (newVal >= 1) divUpd.text(newVal);
                                        });

                                    </script>
                                    <!--quantity-->
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <p><del>100.00 BDT</del><em class="item_price"> 70.00 BDT</em></p>
                                <div class="add">
                                    <button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Kabuli Chana" data-summary="summary 3" data-price="2.00" data-quantity="1" data-image="images/of2.png">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
