<?php 
include("sup.php");
session_start();

?>

 <?php

if(isset($_SESSION['myusername']))
{		
$id=$_SESSION['myusername'];
$db = new mysqli('localhost','root','', 'swift');


$sql="SELECT 	Date,Bill_no,Amount FROM supplier_order  ";
  
$records= $db->query($sql);


}

    
    ?>




    <!--MY  SECTION-->
    <section class="mhead">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Bill</h2>


                        <table width="1000" border="1" cellpadding="5" cellspacing="2">


                            <tr>
                                <th style="text-align:center;">Date</th>
                                <th style="text-align:center;">Bill_no</th>
                                <th style="text-align:center;">Amount</th>


                            </tr>

                            <?php
            
              while($supplier_order=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$supplier_order['Date']."</td>";
                      
                      echo"<td>".$supplier_order['Bill_no']."</td>";
                   
                    echo"<td>".$supplier_order['Amount']."</td>";   
                 
                 
                      
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


