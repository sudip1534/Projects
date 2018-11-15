<?php 
include("emp.php");
session_start();

?>

 



 <?php

if(isset($_SESSION['myusername']))
{		
$id=$_SESSION['myusername'];
$db = new mysqli('localhost','root','', 'swift');

$sql="SELECT Invoice_no,Order_id,Date From order_status Where Employee_id='$id'";
  $records= $db->query($sql);


}


    
    ?>




    <!--MY  SECTION-->
    <section class="mhead">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Employee Invoice</h2>


                        <table width="1000" border="1" cellpadding="5" cellspacing="2">


                            <tr>
                                <th style="text-align:center;">Invoice No</th>
                                <th style="text-align:center;">Order No</th>
                                <th style="text-align:center;">Date</th>
                           


                            </tr>

                            <?php
              //each inv record in variable inventory
          
                   
                // if(mysql_num_rows($records) > 0)   { 
              while($order_status=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$order_status['Invoice_no']."</td>";
                      
                      echo"<td>".$order_status['Order_id']."</td>";
                   
                    echo"<td>".$order_status['Date']."</td>"; 
                 
                      
                  echo"</tr>";
              }
              
              
            ?>


                        </table>



                </div>

     


            </div>
        </div>





    </section>





















<?php 
include("footer.php");
?>


