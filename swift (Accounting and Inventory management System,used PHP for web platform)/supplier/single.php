<?php
/**
 * Created by PhpStorm.
 * User: Fatima Islam Mouri
 * Date: 30-Nov-17
 * Time: 11:26 AM
 */
?>
<?php
$img1 = $_GET['img1'];
$img2 = $_GET['img2'];
$price = $_GET['price'];
$proName = $_GET['proName'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Swift</title>
    <!--css-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <!--css-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/imagezoom.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>

    <!--mycart-->
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
                    if(starbox.hasClass('random')) {
                        var val = Math.random();
                        starbox.next().text(' '+val);
                        return val;
                    }
                })
            });
        });
    </script>
    <!--//End-rate-->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
            });
        });
    </script>

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
                    <li><a href=""> <span class="glyphicon glyphicon-check"></span>Checkout</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/propic.jpg" alt=" "> </a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <ul class="multi-column-dropdown">
                                        <li><a href="" ><span class="glyphicon glyphicon-user" ></span> Profile</a></li>
                                        <li><a href=""><span class="glyphicon glyphicon-envelope" ></span> Massages</a></li>
                                        <li><a href=""><span class="glyphicon glyphicon-log-out" ></span> log out</a></li>
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
                    <h1><a href="cstmrHomePg.php">Swift <span>javandro</span></a></h1>
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Wallets</a></li>
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Watches</a></li>
                                                    <li><a href=""> Underwear </a></li>
                                                    <li><a href="">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="">Sunglasses</a></li>
                                                    <li><a href="">Wallets,Bags</a></li>
                                                    <li><a href="">Footwear</a></li>
                                                    <li><a href="">Watches</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="images/woo.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-3">
                                        <div class="row">
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu1</h6>
                                                    <li><a href="">Clothing</a></li>
                                                    <li><a href="">Wallets</a></li>
                                                    <li><a href="">Shoes</a></li>
                                                    <li><a href="">Watches</a></li>
                                                    <li><a href=""> Underwear </a></li>
                                                    <li><a href="">Accessories</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <h6>Submenu2</h6>
                                                    <li><a href="">Sunglasses</a></li>
                                                    <li><a href="">Wallets,Bags</a></li>
                                                    <li><a href="">Footwear</a></li>
                                                    <li><a href="">Watches</a></li>
                                                    <li><a href="">Accessories</a></li>
                                                    <li><a href="">Jewellery</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="images/woo3.jpg" alt=" "/></a>
                                            </div>
                                            <div class="col-sm-3  multi-gd-img">
                                                <a href="products1.html"><img src="images/woo4.jpg" alt=" "/></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<b class="caret"></b></a>
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
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informations<b class="caret"></b></a>
                                    <ul class="dropdown-menu multi-column columns-2">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <ul class="multi-column-dropdown" style="padding-left: 15px">
                                                    <li><a href="">Order List</a></li>
                                                    <li><a href="">Invoice List</a></li>
                                                    <li><a href="">Payment</a></li>
                                                </ul>
                                            </div>
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
                    </ul> <!-- cd-header-buttons -->
                    <div id="cd-search" class="cd-search">
                        <form action="#" method="post">
                            <input name="Search" type="search" placeholder="Search...">
                        </form>
                    </div>
                </div>
                <div class="header-right2">
                    <div class="cart box_1">
                        <a href="#checkout.html">
                            <h3> <div class="total">
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
<!--banner-->
<div class="banner1">
    <div class="container">
        <h3><a href="cstmrHomePg.php">Home</a> / <span>Single</span></h3>
    </div>
</div>
<!--banner-->

<!--content-->
<div class="content">
    <!--single-->
    <div class="single-wl3">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-9 single-grid">
                    <div clas="single-top">
                        <div class="single-left">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb=<?php echo $img1 ?> >
                                        <div class="thumb-image"> <img src=<?php echo $img1 ?> data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
                                    <li data-thumb=<?php echo $img2 ?> >
                                        <div class="thumb-image"> <img src=<?php echo $img2 ?> data-imagezoom="true" class="img-responsive"> </div>
                                    </li>
<!--                                    can use xtra img using query -->
                                </ul>
                            </div>
                        </div>
                        <div class="single-right simpleCart_shelfItem">
                            <h4><?php echo $proName ?></h4>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <p class="price item_price"> <?php echo $price ?> BDT</p>
                            <div class="description">                 <!--  use query for product description -->
                                <p><span>Quick Overview : </span> In cursus faucibus tortor eu vestibulum. Ut eget turpis ac justo porta varius. Donec vel felis ante, ac vehicula ipsum. Quisque sed diam metus. Quisque eget leo sit amet erat varius rutrum vitae dapibus lectus. Vivamus et sapien ante. Suspendisse potenti. Fusce in tellus est, ac consequat.</p>
                            </div>
                            <div class="color-quality">
                                <h6>Quantity :</h6>
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus1">&nbsp;</div>
                                        <div class="entry value1"><span>1</span></div>
                                        <div class="entry value-plus1 active">&nbsp;</div>
                                    </div>
                                </div>
                                <!--quantity-->
                                <script>
                                    $('.value-plus1').on('click', function(){
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
                                        divUpd.text(newVal);
                                    });

                                    $('.value-minus1').on('click', function(){
                                        var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
                                        if(newVal>=1) divUpd.text(newVal);
                                    });
                                </script>
                                <!--quantity-->
                            </div>
                            <div class="women">
                                <span class="size">XL / XXL / S </span>
                                <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                  <!--Recent Products-->
                <div class="col-md-3 single-grid1">
                    <h3>Recent Products</h3>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.php"><img class="img-responsive " src="images/r.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">productName</a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1">  100.00 BDT</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.php"><img class="img-responsive " src="images/r1.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">productName </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1">  200.00 BDT</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.php"><img class="img-responsive " src="images/r2.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">productName </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1">  120.00 BDT</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="recent-grids">
                        <div class="recent-left">
                            <a href="single.php"><img class="img-responsive " src="images/r3.jpg" alt=""></a>
                        </div>
                        <div class="recent-right">
                            <h6 class="best2"><a href="single.html">productName </a></h6>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <span class=" price-in1"> 450.00 BDT</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <!--Product Description-->
            <div class="product-w3agile">
                <h3 class="tittle1">Product Description</h3>
                <div class="product-grids">
                    <div class="col-md-4 product-grid">

                        <img class="img-responsive " src="images/woo2.jpg" alt="">
                    </div>
                    <div class="col-md-8 product-grid1">
                        <div class="tab-wl3">
                            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                    <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                        <div class="descr">
                                            <h4><?php echo $proName ?> , productdescription</h4>           <!--  use query for product description -->
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                                            <div class="video">
                                                <iframe src="https://player.vimeo.com/video/22158502" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                            </div>
                                            <ul>
                                                <li> Twin button front fastening</li>
                                                <li> Length:65cm</li>
                                                <li> Regular fit</li>                     <!-- specfic descriptions    use query-->
                                                <li> Notched lapels</li>
                                                <li> Internal pockets</li>
                                                <li> Centre-back vent </li>
                                                <li> Material : Outer: 40% Linen &amp; 40% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
                                            </ul>
                                            <p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                        <div class="descr">
                                            <div class="reviews-top">
                                                <div class="reviews-left">
                                                    <img src="images/men3.jpg" alt=" " class="img-responsive">
                                                </div>
                                                <div class="reviews-right">
                                                    <ul>
                                                        <li><a href="#">Admin</a></li>
                                                        <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                    </ul>
                                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="reviews-bottom">
                                                <h4>Add Reviews</h4>
                                                <p>Your email address will not be published. Required fields are marked *</p>
                                                <p>Your Rating</p>
                                                <div class="block">
                                                    <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                </div>
                                                <form action="#" method="post">
                                                    <label>Your Review </label>
                                                    <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                                    <div class="row">
                                                        <div class="col-md-6 row-grid">
                                                            <label>Name</label>
                                                            <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                                        </div>
                                                        <div class="col-md-6 row-grid">
                                                            <label>Email</label>
                                                            <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <input type="submit" value="SEND">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!--Product Description-->
        </div>
    </div>
    <!--single-->

    <!-- Best Sellers-->
    <div class="new-arrivals-w3agile">
        <div class="container">
            <h3 class="tittle1">Best Sellers</h3>
            <div class="arrivals-grids">
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <?php
                                // use query to retrieve product info and save in this variables
                                $img1 = "images/p28.jpg";
                                $img2 = "images/p27.jpg";
                                $price = "70.00";
                                $proName = "Product Name";
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                <div class="grid-img">
                                    <img  src="images/p28.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img  src="images/p27.jpg" class="img-responsive"  alt="">
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
                            <h6><?php
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                echo $proName ?></a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <?php
                                // use query to retrieve product info and save in this variables
                                $img1 = "images/p30.jpg";
                                $img2 = "images/p29.jpg";
                                $price = "80.00";
                                $proName = "Product Name";
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                <div class="grid-img">
                                    <img  src="images/p30.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img  src="images/p29.jpg" class="img-responsive"  alt="">
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
                            <h6><?php
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                echo $proName ?></a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><em class="item_price"><?php echo $price ?> BDT</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <?php
                                // use query to retrieve product info and save in this variables
                                $img1 = "images/s2.jpg";
                                $img2 = "images/s1.jpg";
                                $price = "70.00";
                                $proName = "Product Name";
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                <div class="grid-img">
                                    <img  src="images/s2.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img  src="images/s1.jpg" class="img-responsive"  alt="">
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
                            <h6><?php
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                echo $proName ?></a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><del>100.00 BDT</del><em class="item_price"><?php echo $price ?> BDT</em></p>
                            <a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                    <div class="grid-arr">
                        <div  class="grid-arrival">
                            <figure>
                                <?php
                                // use query to retrieve product info and save in this variables
                                $img1 = "images/s4.jpg";
                                $img2 = "images/s3.jpg";
                                $price = "70.00";
                                $proName = "Product Name";
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">" ?>
                                <div class="grid-img">
                                    <img  src="images/s4.jpg" class="img-responsive" alt="">
                                </div>
                                <div class="grid-img">
                                    <img  src="images/s3.jpg" class="img-responsive"  alt="">
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
                            <h6><?php
                                echo "<a href=\"single.php? img1=$img1 &amp; img2=$img2 &amp; price=$price &amp; proName=$proName\">";
                                echo $proName ?></a></h6>
                            <span class="size">XL / XXL / S </span>
                            <p ><em class="item_price"><?php echo $price ?> BDT</em></p>
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
<!--content-->
<!--copy-->
<div class="copy-section">
    <div class="container">
        <div class="copy-left">
            <p>&copy; Swift . All rights reserved | Design by <a href="http://w3layouts.com">javandro</a></p>
        </div>
        <div class="copy-right">
            <img src="images/card.png" alt=""/>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--copy-->

</body>
</html>
