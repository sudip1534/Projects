<?php 
include("cus.php");
session_start();

?>

 
<?php
$id=$_SESSION['myusername'];
//make connection
if(isset($_SESSION['myusername']))
{		
$id=$_SESSION['myusername'];
$db = new mysqli('localhost','root','', 'swift');

$sql="SELECT Payment_id,Invoice_no,	Date,Amount,Transaction_type FROM transactions Where Customer_id='$id'";
  $records= $db->query($sql);


}

 

    
    ?>




    <!--MY  SECTION-->
    <section class="mhead">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Payment</h2>


                        <table width="1000" border="1" cellpadding="5" cellspacing="2">


                            <tr>
                                <th style="text-align:center;">Payment ID</th>
                                <th style="text-align:center;">Invoice Number</th>
                                <th style="text-align:center;">Date</th>
								<th style="text-align:center;">Amount</th>
                                <th style="text-align:center;">Transaction Type</th>
                               
                            </tr>

                            <?php
              //each inv record in variable inventory
               
                     
                // if(mysql_num_rows($records) > 0)   { 
              while($transactions=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$transactions['Payment_id']."</td>";
                      
                      
                      echo"<td>".$transactions['Invoice_no']."</td>";
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


