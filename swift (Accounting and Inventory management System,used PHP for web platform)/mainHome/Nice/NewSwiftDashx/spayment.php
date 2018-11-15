<?php 
include("sup.php");
session_start();

?>

 <?php

if(isset($_SESSION['myusername']))
{		
$id=$_SESSION['myusername'];
$db = new mysqli('localhost','root','', 'swift');

$sql="SELECT Payment_id,Date,Amount,Transaction_type FROM transactions where Supplier_id='$id'";
  $records= $db->query($sql);


}

    
    ?>




    <!--MY  SECTION-->
    <section class="mhead">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Supplier Payment</h2>




                        <table width="1000" height="100" border="1" cellpadding="5" cellspacing="2">


                            <tr>
                                <th style="text-align:center;">Payment Id</th>
                                <th style="text-align:center;">Date</th>
                                <th style="text-align:center;">Amount</th>
                                <th style="text-align:center;">Transaction Type</th>

                            </tr>

                            <?php
       
              while($transactions=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$transactions['Payment_id']."</td>";
                      
                      echo"<td>".$transactions['Date']."</td>";
                   
                    echo"<td>".$transactions['Amount']."</td>"; 
                   echo"<td>".$transactions['Transaction_type']."</td>"; 
                 
                  
               
              
                      
                      
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


