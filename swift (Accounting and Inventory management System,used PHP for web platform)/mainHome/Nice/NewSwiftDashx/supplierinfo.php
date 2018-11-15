<?php 
include("sup.php");
	session_start();
?>

 



 <!--MY  SECTION-->
        <section class="mhead" class="suppinfo">
           <form class="form-inline" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12  col-sm-10">



                        <h2>Supplier Info</h2>
                        <?php
						//session_start();
					
						if(isset($_SESSION['myusername']))
						{		
						$id=$_SESSION['myusername'];
						
						$mysqli = new mysqli('localhost','root','','swift');
						$query = $mysqli->query("select * from supplier_info where Supplier_id='$id' ");
						$query1 = $mysqli->query("select * from supplier_address where Supplier_id='$id' ");
						
						$row=$query->fetch_assoc();
						$row1=$query1->fetch_assoc();
						
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
						$pre =  $_POST['pre'];
						
						
						$result=$mysqli->query("update supplier_info set Title='$t',First_Name='$fn',Middle_Name='$mn',Last_Name='$ln',Suffix='$s',email='$e',phone_num='$ph',password='$p',mobile='$mo',fax='$fa',other='$o',website='$w',Preffered_payment='$pre' where Supplier_id='$k' ");
						$result2=$mysqli->query("update supplier_address set Street='$sta',City_Town='$ci',State__Province='$sta',Postal_Code='$pos',Country='$co' where  Supplier_id='$k'");
						
						
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
							<strong>Failed!</strong>Error updating data;please try again.
							</div>
							<?php
						}
						
						
						
						}
						?>
                        
                <div class="col-sm-6">
                
                 <div class="form-group">
                        <label>ID</label><br>
                        <input type="text" id="fname" name="i" class="small" value= "<?php echo $row['Supplier_id'] ?> " readonly  >

                    </div>
                
                

                    <div class="form-group">
                        <label>Title</label><br>
                        <input type="text" id="fname"  value= "<?php echo $row['Title'] ?> " name="t" class="small">

                    </div>
                    <div class="form-group">
                        <label>First Name</label><br>
                        <input type="text" id="lname"   value= "<?php echo $row['First_Name'] ?> " name="fn" class="medium">

                    </div>
                    <div class="form-group">
                        <label>Middle Name</label><br>

                        <input type="text" id="mname" value= "<?php echo $row['Middle_Name'] ?> " name="mn"      class="medium"       ><br>


                    </div>
                    <div class="form-group">
                        <label>Last Name</label><br>
                        <input type="text" id="lname"  value= "<?php echo $row['Last_Name'] ?> " name="ln"    class="medium"       >
                    </div>

                    <div class="form-group">
                        <label>Suffix</label><br>
                        <input type="text" id="suffix"   value= "<?php echo $row['Suffix'] ?> " name="s" class="small">
                    </div>


                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="Password" id="Pass"   value= "" name="p" class="medium">
                    </div>


                    <div class="form-group">
                        <label>Confirm Password</label><br>
                        <input type="Password" id="cpass"  value= ""  name="cp"   class="medium"      >
                    </div>

                  

                </div>
                       
                       
                       
                       
                       
                       
                       
                       
               
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" id="email"   value= "<?php echo $row['email'] ?> " name="e" class="big">
                    </div>



                    <div class="form-group">
                        <label>Phone</label><br>
                        <input type="text" id="phn"   value= "<?php echo $row['phone_num'] ?> " name="ph" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label><br>
                        <input type="text" id="mobile"  value= "<?php echo $row['mobile'] ?> " name="mo" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Fax</label><br>
                        <input type="text" id="fax"   value= "<?php echo $row['fax'] ?> " name="fa" class="medium">
                    </div>


                    <div class="form-group">
                        <label>Other</label><br>
                        <input type="text" id="other"   value= "<?php echo $row['other'] ?> " name="o" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Website</label><br>
                        <input type="text" id="web"  value= "<?php echo $row['website'] ?> " name="w" class="big">
                    </div>



                </div>        
                    </div>
                       
                       
       <div class="col-sm-12 col-sm-10 col-sm-offset-2"  >

                <h3>Address</h3>




                <div>

                    <h4>Billing Address</h4>
                </div>

                <div class="form-group">
                    <label>Street</label><br>
                    <input type="text" id="street"   value= "<?php echo $row1['Street'] ?> " name="st" class="big">

                </div>
                <div class="form-group">
                    <label>City/Town</label><br>
                    <input type="text" id="city"   value= "<?php echo $row1['City_Town'] ?> " name="ci" class="medium">

                </div>
                <div class="form-group">
                    <label>State/Province</label><br>

                    <input type="text" id="state"   value= "<?php echo $row1['State__Province'] ?> " name="sta"  class="medium"     ><br>


                </div>
                <div class="form-group">
                    <label>Postal Code</label><br>

                    <input type="text" id="postal"   value= "<?php echo $row1['Postal_Code'] ?> " name="pos"  class="medium"        ><br>


                </div>

                <div class="form-group">
                    <label>Country</label><br>

                    <input type="text" id="cntry"   value= "<?php echo $row1['Country'] ?> " name="co"   class="medium"        ><br>
                </div>
				
				
				
				<h3>Payment</h3>
                    <div class="form-group">
                        <label>Preffered Payment</label><br>
                        <input type="text" name="pre"  value= "<?php echo $row['Preffered_payment'] ?> " class="medium"><br>
                       
                    </div>
				
                    <div>
                  
                    <button type="cancel" value="Cancel">Cancel</button>
              
                 
                        <button type="submit" name="update" value="submit">Update</button>
                    </div>



            </div>                
                       
               <!--          
                <div class="col-sm-12 col-sm-9 ">



              <div class="col-sm-6">
                    <h3>Payment</h3>
                    <div class="form-group">
                        <label>Preffered Payment</label><br>
                        <input type="text" name="pre"  value= "<?php echo $row['Preffered_payment'] ?> " class="medium"><br>
                       
                    </div>


                </div>




            </div>-->
          
                       
                       
                       
           
            
                       
                       
                       
                       
                </div>
               </div>
                       
                       


        </form>


    </section>

		<?php
						}
						//else{
							
						//	header("location: ../login_supplier.php");
							
							
						//}
						
		
		?>
        




<?php 
include("footer.php");
?>


