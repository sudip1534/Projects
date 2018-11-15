<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include('connection.php');
    ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="HTML CSS Bootstrap">
        <meta name="author" content="Zarin Wamia">


        <title>Swift</title>
        <link rel="icon" href="images/logo2.png" sizes="32x32">

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- bootstrap theme -->
        <link href="css/bootstrap-theme.css" rel="stylesheet">
        <!--external css-->
        <!-- font icon -->
        <link href="css/elegant-icons-style.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <!-- Custom styles -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            /* Full-width input fields */

            input[type=text],
            input[type=password],
            input[type=number],
            select,
            option {
                width: 90%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            /* Set a style for all buttons */

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            /* Extra styles for the cancel button */

            .cancelbtn {
                padding: 14px 20px;
                background-color: #f44336;
            }

            /* Float cancel and signup buttons and add an equal width */

            .cancelbtn,
            .signupbtn {
                float: left;
                width: 45.4%;
            }

            /* Add padding to container elements */

            /*.container {
            padding: 16px;
        }*/

            /* The Modal (background) */

            .modal {
                display: none;
                /* Hidden by default */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.4);
                /* Black w/ opacity */
                padding-top: 60px;
            }

            /* Modal Content/Box */

            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto;
                /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%;
                /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */

            .close {
                position: absolute;
                right: 35px;
                top: 15px;
                color: #000;
                font-size: 40px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }

            /* Clear floats */

            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }

            /* Change styles for cancel button and signup button on extra small screens */

            @media screen and (max-width: 300px) {
                .cancelbtn,
                .signupbtn {
                    width: 100%;
                }
            }

            /*start signup form*/

            .control-label {
                float: left;
                width: 30%;
            }

            .form-control {
                float: left;
                width: 70%;
            }

            /*end signup form*/

        </style>

</head>

<body>

    <!-- Company SignUp -->
    <div id="id01" class="modal">
        <form class="modal-content animate" method="post" action="companySignup.php">
            <div id="edit-profile" class="tab-pane">
                <section class="panel">
                    <div class="panel-body bio-graph-info">
                        <h1> Company Info</h1>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Company Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="c_name" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Owner's Title</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="title" placeholder=" " required>
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="f_name" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Middle Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="m_name" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="l_name" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Suffix</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="suffix" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Company Type</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="c_type" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Street</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="street" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">City/Town</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="city" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">State</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="state" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Postal Code</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="postal_code" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="country" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Account Type</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="a_type" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirm Password</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="c_password" name="c_password" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="phone" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="mobile" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Fax</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="fax" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Website</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="website" placeholder="http://www.demowebsite.com ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Designation</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="designation" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Gender</label>
                            <div class="col-lg-6">
                                <select name="gender" id="">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Salary</label>
                            <div class="col-lg-6">
                                <input type="number" name="salary" class="form-control" min="0">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Date of Birth</label>
                            <div class="col-lg-6">
                                <input type="date" class="form-control" name="birth" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Other Info</label>
                            <div class="col-lg-10">
                                <textarea name="other" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Price Plan</label>
                            <div class="col-lg-6">
                                <select name="plan" id="">
                                        <option value="Simple">Simple</option>
                                        <option value="Standard">Standard</option>
                                        <option value="Premeium">Premeium</option>
                                    </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
    <!-- Customer SignUp -->
    <div id="id02" class="modal">
        <form class="modal-content animate" method="post" action="../customer/customerSignup.php">
            <!--<div class="container">

                <label><b>Company Name</b></label><br>
                <select name="company_name">
                <?php
                    $count=0;
                    $query = "select Company_ID, Company_name
                        from company_info
                        order by Company_name
                        limit $count,1";
                    $result = $conn->query($query);
                    while ($result->num_rows==1){
                        $res = $result->fetch_assoc();
                        $cid=$res["Company_ID"];
                        $cname=$res["company_name"];
                ?>
                    <option value="<?php echo $cid;?>" required><?php echo $cname;?></option>
                <?php
                $count++;
                $query = "select Company_ID, Company_name
                        from company_info
                        order by Company_name
                        limit $count,1";
                    $result = $conn->query($query);
                }
                ?>
                </select><br>

                <label><b>Email</b></label><br>
                <input type="text" placeholder="Enter Email" name="email" required><br>

                <label><b>Password</b></label><br>
                <input type="password" placeholder="Enter Password" name="psw" required><br>

                <label><b>Repeat Password</b></label><br>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
                <input type="checkbox" checked="checked"> Remember me
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

                <div class="clearfix">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit" class="signupbtn">Sign Up</button>
                </div>
            </div>-->
            <div id="edit-profile" class="tab-pane">
                <section class="panel">
                    <div class="panel-body bio-graph-info">
                        <h1> Customer Info</h1>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Title</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="title" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">First Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="f_name" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Middle Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="m_name" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Last Name</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="l_name" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Suffix</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="suffix" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Company Name</label><br>
                            <select name="c_id[]" class="form-control" size="2" multiple required>
                            <?php
                                $count=0;
                                $query = "select Company_ID, Company_name
                                    from Company_info
                                    where status = 'Permanent'
                                    order by Company_name
                                    limit $count,1";
                                $result = $conn->query($query);
                                while($result->num_rows==1){
                                    $res = $result->fetch_assoc();
                                    $cid=$res["Company_ID"];
                                    $cname=$res["Company_name"];
                            ?>
                                <div class="col-lg-6">
                                <option value="<?php echo $cid;?>"><?php echo $cname;?></option>
                                </div>
                            <?php
                                $count++;
                                $query = "select Company_ID, Company_name
                                        from company_info
                                        where status = 'Permanent'
                                        order by Company_name
                                        limit $count,1";
                                    $result = $conn->query($query);
                                }
                            ?>
                            </select>
                            <br>
                        </div>
                        <!--<input type="hidden" name="cid" value="<?php echo $cid;?>">-->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" name="email" placeholder=" " required>
                            </div>
                        </div>
                        <br>

                        <!--<script>
                                var password = document.getElementById("password"),
                                    c_password = document.getElementById("c_password");

                                function validatePassword() {
                                    if (password.value != confirm_password.value) {
                                        c_password.setCustomValidity("Passwords Don't Match");
                                    } else {
                                        c_password.setCustomValidity('');
                                    }
                                }

                                password.onchange = validatePassword;
                                c_password.onkeyup = validatePassword;

                            </script>-->

                        <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="password" name="password" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Confirm Password</label>
                            <div class="col-lg-6">
                                <input type="password" class="form-control" id="c_password" name="c_password" placeholder=" " required>
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Phone</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="phone" placeholder=" ">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Mobile</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="mobile" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <!-- <div class="form-group">
                            <label class="col-lg-2 control-label">Fax</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="fax" placeholder=" ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Street</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="street" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">City/Town</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="city" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">State</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="state" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Postal Code</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="postal_code" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Country</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="country" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Website</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="website" placeholder="http://www.demowebsite.com ">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">About You</label>
                            <div class="col-lg-10">
                                <textarea name="other" id="" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Preferred Payment</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="payment" placeholder="">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Shipping</label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" name="shipping" placeholder="">
                            </div>
                        </div>
                        <br> -->
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>

    <!--<a href="\Project DBMS\NiceAdmin\login.html" accesskey="s"></a>-->
    <!--nav part start-->
    <nav class="navbar navbar-default mynav">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavid" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                <!--<a class="visible-xs" href="#">Brand</a>-->
            </div>


            <div class="collapse navbar-collapse" id="mynavid">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="homePage.php">Home</a></li>



                    <li> <a href="#features">Feature</a></li>


                    <li><a href="#priceplan">Price Plan</a></li>
                    <li><a href="#">About Us</a></li>

                </ul>


                <div class="logo hidden-xs">
                    <!--
                <div>&nbsp</div>
                <div>&nbsp</div>
                <div>&nbsp</div>-->
                    <img src="images/logo2.png" alt="" style="83.179px;height:101.692px;">
                </div>

                <ul class="nav navbar-nav navbar-right hidden-xs">

                    <li><a href="#">Learn And Support</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)">Login<span class="caret"></span></a>
                        <div class="dropdown-content">
                            <a href="login/customerLogin.php" style="background: rgba(0, 102, 255, 0.75);">Customer Login</a>
                            <a href="login/supplierLogin.php" style="background: rgba(0, 102, 255, 0.75);">Supplier Login</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:void(0)">Sign Up<span class="caret"></span></a>
                        <div class="dropdown-content">
                            <a onclick="document.getElementById('id01').style.display='block'" style="background: rgba(0, 102, 255, 0.75);">Company SignUp</a>
                            <a onclick="document.getElementById('id02').style.display='block'" style="background: rgba(0, 102, 255, 0.75);">Customer SignUp</a>
                        </div>
                    </li>

                    <li><a href="#">Shops</a></li>
                </ul>
            </div>
        </div>
    </nav>







    <!--nav part end-->
    <!--banner part start-->
    <section class="banfirst">

        <div class="banner_slider">
            <div class="item" style="background:url(images/banner1.jpg)">
                <div class="container text-center">
                    <div class="banin">
                        <h2 id="signup">SWIFT</h2>
                        <h3>Accounting & Inventory System</h3>
                        <a href="#" class="allbtn">Read More</a>
                        <a href="#" class="allbtn">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="item" style="background:url(images/banner2.jpg)">
                <div class="container text-center">

                    <div class="banin">

                        <h2>Simple, beautiful, and powerful</h2>
                        <p> Swift gives you the tools and intelligence to take your business to the next level</p>
                        <a href="#" class="allbtn">BUY NOW</a>
                    </div>
                </div>
            </div>

            <div class="item" style="background:url(images/banner3.jpg)">
                <div class="container text-center">
                    <div class="banin">

                        <h2>We are Creative Web Stuff</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim sunt vero libero consectetur quia. Maxime deserunt, quisquam eligendi ut.</p>
                        <a href="#" class="allbtn">Read More</a>

                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--baner end-->

    <!-- Feature part start-->
    <section class="feat">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="allheading" id="features">
                        <h2>Swift Accounting Features</h2>
                        <p>It is packed with features that boost your efficiency and help you work better with your clients.</p>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="ftr">

                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Expense Tracking</h3>
                        <p>Record expenses for tax time. You can even photograph and save receipts with the QuickBooks Online mobile app.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftr">
                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Invoicing</h3>
                        <p>Create custom, professional invoices, sales receipts and estimates that you can send in minutes.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftr">

                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Free unlimited support</h3>
                        <p>If you need help, support is available </p>
                    </div>
                </div>
            </div>


            <div class="col-sm-12">


                <div class="col-sm-4">
                    <div class="ftr">
                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Accounting Reports</h3>
                        <p>Instantly see how your business is performing with customizable reports and dashboards.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftr">
                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Cash Flow Management</h3>
                        <p>Enter bills from vendors, and pay them only when they are due. Schedule recurring payments to save time.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ftr">

                        <img src="icon/im1.png" alt="" style="width:157.394px;height:192.525px;">
                        <h3>Accountant access</h3>
                        <p>Your accountant can manage your records from anywhere, anytime making it easy to work together.</p>
                    </div>
                </div>
            </div>



            <div class="col-sm-12">




            </div>

        </div>
    </section>
    <!-- Feature part end-->



    <!--  team part start   -->

    <!--price table start-->

    <section class="pricing">
        <div class="col-sm-4 text-center">

            <div class="myprice">
                <ul class="price" id="priceplan">
                    <li class="header">Simple</li>
                    <li class="grey">Tk 3000 / month</li>
                    <li>Track Sales</li>
                    <li>Track Expenses</li>
                    <li>Track Profit</li>
                    <li>Create & Sales Unlimited Invoices</li>
                    <li>For One User</li>
                    <li class="grey"><a href="#" class="button">Free 30 day Trial</a></li>
                </ul>
                <ul class="list-group"> <br>
                    <li>OR</li>
                </ul>
                <ul class="price">
                    <li class="grey"><a href="#signup" class="button">Sign Up</a></li>
                </ul>

            </div>
        </div>


        <div class="col-sm-4 text-center">

            <div class="myprice">
                <ul class="price">
                    <li class="header">Standard</li>
                    <li class="grey">Tk 6000 / month</li>
                    <li>Track Sales</li>
                    <li>Track Expenses</li>
                    <li>Track Profit</li>
                    <li>Create & Sales Unlimited Invoices</li>
                    <li>Work on PC and Web</li>
                    <li>Track Profit</li>
                    <li>Manage & Pay Bills</li>
                    <li>Transact in Multiple Currencies</li>
                    <li>Generate Sales Quotes</li>
                    <li>Run Report</li>
                    <li>For Three Users</li>
                    <li class="grey"><a href="#" class="button">Free 30 day Trial</a></li>
                </ul>
                <ul class="list-group"> <br>
                    <li>OR</li>
                </ul>
                <ul class="price">
                    <li class="grey"><a href="#signup" class="button">Sign Up</a></li>
                </ul>

            </div>
        </div>


        <div class="col-sm-4 text-center">
            <div class="myprice">
                <ul class="price">
                    <li class="header">Premeium</li>
                    <li class="grey">Tk 10000 / month</li>
                    <li>Track Sales</li>
                    <li>Track Expenses</li>
                    <li>Track Profit</li>
                    <li>Create & Sales Unlimited Invoices</li>
                    <li>Work on PC and Web</li>
                    <li>Track Profit</li>
                    <li>Manage & Pay Bills</li>
                    <li>Transact in Multiple Currencies</li>
                    <li>Generate Sales Quotes</li>
                    <li>Run Report</li>
                    <li>For Three Users</li>

                    <li class="grey"><a href="#signup" class="button">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!--price table end-->


    <section class="team_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="allheading">
                        <h2>CLient Reviews</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum non voluptas placeat suscipit voluptatem laborum aperiam reprehenderit voluptatibus praesentium vel, dolores alias eos nihil tenetur molestiae eveniet eius quisquam quos.</p>
                    </div>
                </div>
            </div>

            <div class="team_img_slide">
                <div class="col-sm-3 team_img">
                    <img src="images/team_1.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_2.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_3.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_4.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_1.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_2.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_3.jpg" alt="">
                </div>
                <div class="col-sm-3 team_img">
                    <img src="images/team_4.jpg" alt="">
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1 dit_br">
                <div class="team_profile">
                    <div class="team_dit">
                        <h2>Bonny Cohen</h2>
                        <h4>UI designer</h4>
                        <p>After trying multiple platforms, This software proves to surpass all expectations. They make bookkeeping a breeze. Would recommend a thousand times over because it has been crucial to my business growth.</p>

                    </div>
                    <div class="team_dit">
                        <h2>Martha Stuart</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptate laboriosam necessitatibus, quasi iure architecto. Molestiae ducimus</p>

                    </div>
                    <div class="team_dit">
                        <h2>Augustus Waters</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                    </div>
                    <div class="team_dit">
                        <h2>Cristina</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptate laboriosam necessitatibus, quasi iure architecto. Molestiae ducimus eveniet mollitia totam quia ratione, harum illum. Quod officia esse libero iste, unde.</p>

                    </div>
                    <div class="team_dit">
                        <h2>Jeremi</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptate laboriosam necessitatibus, </p>

                    </div>
                    <div class="team_dit">
                        <h2>name</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptate laboriosam necessitatibus, quasi iure architecto. Molestiae ducimus eveniet mollitia totam quia ratione, harum illum. Quod officia esse libero iste, unde.</p>
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="team_dit">
                        <h2>name</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis voluptate laboriosam necessitatibus, quasi iure</p>
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="team_dit">
                        <h2>name</h2>
                        <h4>web</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis</p>
                        <i class="fa fa-facebook"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  team part end  -->

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="allheading">
                        <h2>Contact Us</h2>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="mymap">
        <div class="map">


            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d116834.13669278496!2d90.4193257!3d23.7806365!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1492450819421" width="1350" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>
    </section>

    <!--footer part start-->
    <footer>
        <div class="foot text-center">
            <div class="container">
                <div class="row">


                    <form>
                        <div class="form-group col-sm-6 col-sm-offset-3">
                            <input type="name" class="form-control" placeholder="NAME">
                        </div>

                        <div class="form-group col-sm-6 col-sm-offset-3 ">
                            <input type="email" class="form-control" placeholder="EMAIL ADDRESS">
                        </div>

                        <div class="form-group col-sm-12 col-sm-offset-1 ">
                            <textarea class="form-control" rows="3" placeholder="MESSAGE"></textarea>
                        </div>

                        <div class="col-sm-12">
                            <!-- <a href="#" class="allbtn">BUY NOW</a>-->
                            <input type="Submit" value="submit" class="allbtn">
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </footer>




    <!--footer part end-->


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
