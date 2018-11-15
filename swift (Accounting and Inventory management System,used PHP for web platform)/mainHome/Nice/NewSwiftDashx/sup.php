<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="HTML CSS Bootstrap">
    <meta name="author" content="Zarin Wamia">





    <title>Swift</title>
    <link rel="icon" href="images/logo2.png" sizes="32x32">


    <link href="css/elegant-icons-style.css" rel="stylesheet" />
  
    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
    
      <link rel="stylesheet" href="css/style.css">
    
	</head>
	
	
	
	





<body>
    <!--nav part start-->



    <section id="container" class="">


        <header class="header">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->


            <a class="mylogo" href="#">
                <img src="images/sw2.png" alt="logo">
            </a>


            <a href="index.html" class="logo">SWIFT</a>



            <!--logo end-->
            
            
            
             <div class="nav  pull-right  search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">
                    <li>

                        <form>
                            <input style="width: 100px; margin-top:10px; padding: 5px; cursor: pointer;  font-weight: bold; background:darkblue; color: #white; border-radius: 5px; border: 1px solid #999; font-size:130%;" type="button" value="LogOut" onclick="window.location.href='http://localhost/SwiftPage/Nice/login.php'" />
                        </form>
                    </li>
                </ul>
            </div> 
            
            
            
            
            
            
            
            
            
            
            

           
        </header>





    </section>
    <div class="clearfix"></div>






    <div class="body_wrapper">


        <nav class="navbar navbar-default sidebar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                     

                            

                        
                        <li>
                            <?php echo '<a href="supplierinfo.php">SupplierInfo</a>.'; ?></li>
                            
                            
                            
                            <li>
                            <?php echo '<a href="bill.php">Supplier Bill</a>.'; ?></li>
                            
                            
                            
                            
                            
                                  
                                     <li>
                                    <?php echo '<a href="spayment.php">Supplier Payment</a>.'; ?></li>
                                      
                                   
                                      
                        
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
