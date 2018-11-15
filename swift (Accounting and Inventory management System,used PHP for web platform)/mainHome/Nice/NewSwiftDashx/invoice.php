<?php 
include("cus.php");
session_start();

?>

 



 <?php

if(isset($_SESSION['myusername']))
{		
$id=$_SESSION['myusername'];
$db = new mysqli('localhost','root','', 'swift');

$sql="SELECT order_status.Invoice_no, order_status.Order_id,order_status.Date,order_status.Sales_Status,order_status.Status,Sum(Unit_price*Quantity) as i,order_status.Employee_id FROM orders, order_status WHERE orders.Order_id=order_status.Order_id and order_status.Status='Ordered' and orders.Customer_id ='$id' GROUP by order_status.Order_id ";
  $records= $db->query($sql);


}


    
?>





 <!--MY  SECTION-->
        <section class="mhead">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12  col-sm-10">



                        <h2>Invoice</h2>

						
                        <table width="1000" border="1" cellpadding="5" cellspacing="2" >


                            <tr>
                                <th style="text-align:center;">Invoice No</th>
                                <th style="text-align:center;">Order ID</th>
                                <th style="text-align:center;">Date</th>
                                <th style="text-align:center;">Sales-Status</th>
                                <th style="text-align:center;">Order-Status</th>
                                <th style="text-align:center;">Total-Amount</th>
                                <th style="text-align:center;">Employee_id</th>
                           


                            </tr>

                            <?php
              
              while($order_status=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$order_status['Invoice_no']."</td>";
                      
                      echo"<td>".$order_status['Order_id']."</td>";
                   
                    echo"<td>".$order_status['Date']."</td>"; 
                    echo"<td>".$order_status['Sales_Status']."</td>"; 
                    echo"<td>".$order_status['Status']."</td>"; 
                    echo"<td>".$order_status['i']."</td>"; 
                    echo"<td>".$order_status['Employee_id']."</td>"; 
                 
                      
                  echo"</tr>";
              }
              
              
            ?>


                        </table>



                    </div>
                </div>
            </div>

        </section>
        <!-- end -->




<?php 
include("footer.php");
?>


