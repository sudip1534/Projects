<?php 
include("cus.php");
	session_start();
?>

<?php
//make connection
$db = new mysqli('localhost','root','', 'swift');

$sql="SELECT Product_code,Product_name,SKU,Sales_Rate	FROM inventory";
    $records= $db->query($sql);


    
    ?>




    <!--MY  SECTION-->
    <section class="mhead">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Order</h2>


                 

					
                    <table width="1000" border="1" cellpadding="5" cellspacing="2" id="table">


                        <tr>
                            <th style="text-align:center;">Product Code</th>
                            <th style="text-align:center;">Product Name</th>

                            <th style="text-align:center;">SKU</th>

                            <th style="text-align:center;">Unit Price</th>
                            
                        </tr>

                        <?php
             
                while($inventory=$records->fetch_assoc()){
                  echo"<tr>";
                  echo"<td>".$inventory['Product_code']."</td>";
                      echo"<td>".$inventory['Product_name']."</td>";
                  echo"<td>".$inventory['SKU']."</td>";
                
                  
                    echo"<td>".$inventory['Sales_Rate']."</td>";   
                 
            
                      
                  echo"</tr>";
              }
         
            ?>


                    </table>

					
                 <form action="" method="post" >
                     <div class="form-group">
                      <label>Productcode :</label><input type="text" name="pcode" id="pcode" text-align="center"><br><br>
                       <label style="text-align:center;">Productname : </label> <input type="text" name="pname" id="pname" text-align="center"><br> <br>
                       <label style="text-align:center;">SKU              :</label>         <input type="text" name="sku" id="sku"><br><br> 
                       <label style="text-align:center;">UnitPrice : </label><input type="text" name="uprice" id="uprice"><br><br>
                         <label style="text-align:center;">Quantity :</label><input type="text" name="qt" id="qt"><br><br>
						</div>
				
                        <input type="submit" name="insert" value="insert">
						
						
						
						
    <?php 

		if(isset($_SESSION['myusername']))
		{		
		$id=$_SESSION['myusername'];
		$d= date("d/m/Y");
		$oid=$db->query("select (max(Order_id) + 1) as mo  from orders");
		$rows=$oid->fetch_assoc();
        $mo=$rows['mo'];
		
		
						if(isset($_POST['insert'])){
							$pc = $_POST['pcode'];
							$pn=$_POST['pname'];
							$sku=$_POST['sku'];
							$u=$_POST['uprice'];
							$q=$_POST['qt'];
							$result=$db->query("insert into orders (Order_id,Customer_id,Product_Code,Date,Unit_price,Quantity,Status) values ($mo,'$id','$pc','$d','$u','$q','New')");
						
			if($result){
							?>
							<div class ="alert alert-success alert-dismissible" role="alert">
							<button type="button" class ="close" data-dismiss="alert" aria-label ="Close"><span aria-hidden ="true">&times;</span></button>
							<strong>Success!</strong>Data has been inserted.
							</div>
							
						<?php	
						}else{
							?>
							<div class ="alert alert-success alert-dismissible" role="alert">
							<button type="button" class ="close" data-dismiss="alert" aria-label ="Close"><span aria-hidden ="true">&times;</span></button>
							<strong>Failed!</strong>Error in inserting data;please try again.
							</div>
							<?php
						}
						
						
						}		
						
		}	
?>

						
						
						

                    </form>










                    <script>
                        var table = document.getElementById('table'),
                            rIndex;
                        for (var i = 0; i < table.rows.length; i++) {
                            table.rows[i].onclick = function() {
                                rIndex = this.rowsIndex;
                                // console.log(rIndex);
                                document.getElementById("pcode").value = this.cells[0].innerHTML;
                                document.getElementById("pname").value = this.cells[1].innerHTML;
                                document.getElementById("sku").value = this.cells[2].innerHTML;
                                document.getElementById("uprice").value = this.cells[3].innerHTML;
                            
                               
                                //document.getElementById("qt").value =this.cells[4].innerHTML;
                                
                            };
                        }

                    </script>



                </div>

           

                <div class="col-sm-12 col-sm-10">

              </div>-->

                </div>




            </div>
        </div>





    </section>






    <?php 
include("footer.php");
?>
