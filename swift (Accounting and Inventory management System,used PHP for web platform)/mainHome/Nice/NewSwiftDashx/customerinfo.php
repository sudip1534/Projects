<?php 
include("cus.php");
session_start();
					
?>



 <!--MY  SECTION-->
        <section class="mhead">
           <form class="form-inline" method="post">
            <div class="container" class="customer">
                <div class="row">
                  

                           <div class="col-sm-12 col-sm-10">


                        <h2>Customer Info</h2>
                        
                        <?php
					
						if(isset($_SESSION['myusername']))
						{		
						$id=$_SESSION['myusername'];
					
						$mysqli = new mysqli('localhost','root','','swift');
						$query = $mysqli->query("select * from customer_info where Customer_id='$id' ");
						$query1 = $mysqli->query("select * from customer_address where Customer_id='$id' and Status='Address1' ");
						$query2 = $mysqli->query("select * from customer_address where Customer_id='$id' and Status='Address2' ");
						$row=$query->fetch_assoc();
						$row1=$query1->fetch_assoc();
						$row2=$query2->fetch_assoc();
						
						
						if(isset($_POST['update'])){
							
						$k = $_POST['i'];
						$t = $_POST['t'];
						$fn =  $_POST['fn'];
						$mn = $_POST['mn'];
						$ln = $_POST['ln'];
						$s =  $_POST['s'];
						$p =  $_POST['p'];
						$cp =  $_POST['cp'];
						$e = $_POST['e'];
						$ph =  $_POST['ph'];
						$mo =  $_POST['mo'];
						$fa = $_POST['fa'];
						$o =  $_POST['o'];
						$w =  $_POST['w'];
						$st =$_POST['st'];
						$ci =  $_POST['ci'];
						$sta = $_POST['sta'];
						$pos =  $_POST['pos'];
						$co =  $_POST['co'];
						$st2 =  $_POST['st2'];
						$ci2 = $_POST['ci2'];
						$sta2 = $_POST['sta2'];
						$pos2=  $_POST['pos2'];
						$co2 =  $_POST['co2'];
						$pre =  $_POST['pre'];
						$shi = $_POST['shi'];	
						
						$result=$mysqli->query("update customer_info set Title='$t',First_Name='$fn',Middle_Name='$mn',Last_Name='$ln',Suffix='$s',email='$e',phone_num='$ph',password='$p',mobile='$mo',fax='$fa',other='$o',website='$w',preffered_payment='$pre',Shipping_Way='$shi' where Customer_id='$k' ");
						$result2=$mysqli->query("update customer_address set Street='$sta',City_Town='$ci',State__Province='$sta',Postal_Code='$pos',Country='$co' where  Customer_id='$k' and Status='Address1'   ");
						$result3=$mysqli->query("update customer_address set Street='$sta2',City_Town='$ci2',State__Province='$sta2',Postal_Code='$pos2',Country='$co2' where  Customer_id='$k' and Status='Address2'   ");
						
						if($result){
							?>
							<div class ="alert alert-success alert-dismissible" role="alert">
							<button type="button" class ="close" data-dismiss="alert" aria-label ="Close"><span aria-hidden ="true">&times;</span></button>
							<strong>Success!</strong>Data has been updated.
							</div>
							
						<?php	
						}else{
							?>
							<div class ="alert alert-success alert-dismissible" role="alert">
							<button type="button" class ="close" data-dismiss="alert" aria-label ="Close"><span aria-hidden ="true">&times;</span></button>
							<strong>Failed!</strong>0Error updating data;please try again.
							</div>
							<?php
						}
						
						
						
						}
						?>
                          <div class="col-sm-6">
                          
                           <div class="form-group">
                               <label>ID</label><br>
                               <input type="text" id="fname"  name="i" class="small" value= "<?php echo $row['Customer_id'] ?> " readonly >

                              </div>
                          
                          
                          


                    <div class="form-group">
                        <label>Title</label><br>
                        <input type="text" id="fname" value= "<?php echo $row['Title'] ?> " name="t" class="small">

                    </div>
                    <div class="form-group">
                        <label>First Name</label><br>
                        <input type="text" id="lname" value= "<?php echo $row['First_Name'] ?> "name="fn" class="medium">

                    </div>
                    <div class="form-group">
                        <label>Middle Name</label><br>

                        <input type="text" id="mname" value= "<?php echo $row['Middle_Name'] ?> " name="mn" class="medium"       ><br>


                    </div>
                    <div class="form-group">
                        <label>Last Name</label><br>
                        <input type="text" id="lname"value= "<?php echo $row['Last_Name'] ?> " name="ln"   class="medium"         >
                    </div>

                    <div class="form-group">
                        <label>Suffix</label><br>
                        <input type="text" id="suffix" value= "<?php echo $row['Suffix'] ?> " name="s" class="small">
                    </div>


                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="Password" id="Pass" value= ""name="p"   class="medium"    >
                    </div>


                    <div class="form-group">
                        <label>Confirm Password</label><br>
                        <input type="Password" id="cpass" value= "" name="cp"  class="medium"      >
                    </div>

                  





                </div>
                       
                       
                         <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" id="email" value= "<?php echo $row['email'] ?> " name="e" class="big">
                    </div>



                    <div class="form-group">
                        <label>Phone</label><br>
                        <input type="text" id="phn" value= "<?php echo $row['phone_num'] ?> " name="ph" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label><br>
                        <input type="text" id="mobile" value= "<?php echo $row['mobile'] ?> " name="mo" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Fax</label><br>
                        <input type="text" id="fax" value= "<?php echo $row['fax'] ?> " name="fa" class="medium">
                    </div>


                    <div class="form-group">
                        <label>Other</label><br>
                        <input type="text" id="other" value= "<?php echo $row['other'] ?> " name="o" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Website</label><br>
                        <input type="text" id="web" value= "<?php echo $row['website'] ?> " name="w" class="big">
                    </div>



                </div>   
                       
                       
                       
                       
                    </div>           
                     
                       
                        
          
            <div class="col-sm-12 col-sm-10   ">

                <h3>Address</h3>



                <div class="col-sm-6">
                    <div>

                        <h4>Billing Address</h4>
                    </div>

                    <div class="form-group">
                        <label>Street</label><br>
                        <input type="text" id="street" value= "<?php echo $row1['Street'] ?> " name="st" class="big">

                    </div>
                    <div class="form-group">
                        <label>City/Town</label><br>
                        <input type="text" id="city" value= "<?php echo $row1['City_Town'] ?> " name="ci" class="medium">

                    </div>
                    <div class="form-group">
                        <label>State/Province</label><br>

                        <input type="text" id="state" value= "<?php echo $row1['State__Province'] ?> " name="sta"    class="medium"  ><br>


                    </div>
                    <div class="form-group">
                        <label>Postal Code</label><br>

                        <input type="text" id="postal" value= "<?php echo $row1['Postal_Code'] ?> " name="pos"    class="medium"   ><br>


                    </div>

                    <div class="form-group">
                        <label>Country</label><br>

                        <input type="text" id="cntry" value= "<?php echo $row1['Country'] ?> " name="co"   class="medium"     ><br>
                    </div>
					
					 <h3>Payment</h3>
                    <div class="form-group">
                        <label>Preffered Payment</label><br>
                         <input type="text" id="cntry" name="pre" class="medium" value= "<?php echo $row['Preffered_payment'] ?> " >
                     
                    </div>
					
					 <div>

                    <button type="submit" class="mybtn" name="update" value="Save">Update</button>
                    <button type="cancel" value="Cancel">Cancel</button>
					</div>

                </div>




                <div class="col-sm-6">
                    <div>
                        <h4>Shipping Address</h4>
						
                     <!--   <div class="form-group">

                            <label class="checkbox-inline"><input type="checkbox" value="">Same as billing address</label>

                        </div>-->


                    </div>

                    <div class="form-group">
                        <label>Street</label><br>
                        <input type="text" id="street" value= "<?php echo $row2['Street'] ?> " name="st2" class="big"  >

                    </div>
                    <div class="form-group">
                        <label>City/Town</label><br>
                        <input type="text" id="city" value= "<?php echo $row2['City_Town'] ?> " name="ci2" class="medium">

                    </div>
                    <div class="form-group">
                        <label>State/Province</label><br>

                        <input type="text" id="state" value= "<?php echo $row2['State__Province'] ?> " name="sta2"    class="medium"  ><br>


                    </div>
                    <div class="form-group">
                        <label>Postal Code</label><br>

                        <input type="text" id="postal" value= "<?php echo $row2['Postal_Code'] ?> " name="pos2"   class="medium"w  ><br>


                    </div>

                    <div class="form-group">
                        <label>Country</label><br>

                        <input type="text" id="cntry" value= "<?php echo $row2['Country'] ?> " name="co2"  class="medium" ><br>
                    </div>
					<h3>Shipping System</h3>


                    <div class="form-group">
                        <label>Ship via</label><br>
                         <input type="text" id="ship" name="shi"  class="medium" value= "<?php echo $row['Shipping_Way'] ?> ">
                      
                    </div>


                </div>


            </div>
 <!--
            <div class="col-sm-12 col-sm-10 ">



               <div class="col-sm-6">
                    <h3>Payment</h3>
                    <div class="form-group">
                        <label>Preffered Payment</label><br>
                         <input type="text" id="cntry" name="pre" class="medium" value= "<?php echo $row['Preffered_payment'] ?> " >
                     
                    </div>


                </div>




                <div class="col-sm-6">

                    <h3>Shipping System</h3>


                    <div class="form-group">
                        <label>Ship via</label><br>
                         <input type="text" id="ship" name="shi"  class="medium" value= "<?php echo $row['Shipping_Way'] ?> ">
                      
                    </div>






                </div>
            </div>



            <div class="col-sm-9 ">
                <div>

                    <button type="submit" class="mybtn" name="update" value="Save">Update</button>
                    <button type="cancel" value="Cancel">Cancel</button>
                </div>


            </div>
                
           -->      
                
                
                
                
                

                </div>
               </div>



        </form>


    </section>

        <?php
						}
						//else{
							
						//	header("location: ../login_customer.php");
							
							
						//}
						
		
		?>
        
        
        
        
        
        
        




<?php 
include("footer.php");
?>


