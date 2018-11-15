<?php 
include("emp.php");
	session_start();
					
?>





<!--MY  SECTION-->
<section class="mhead">
    <form class="form-inline"  method="post">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  col-sm-10">



                    <h2>Employee Info</h2>

						<?php
						
						if(isset($_SESSION['myusername']))
						{		
						$id=$_SESSION['myusername'];
						$mysqli = new mysqli('localhost','root','','swift');
						$query = $mysqli->query("select * from employee_info where Employee_Id='$id' and Company_ID= '$id'");
						$query1 = $mysqli->query("select * from employee_address where Employee_Id='$id' ");
						$query2 = $mysqli->query("select * from login where Employee_id='$id' and Company_ID= '$id' ");
						
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
						$g = $_POST['g'];
						$d =  $_POST['d'];
						$ad =  $_POST['ad'];
						$rd =  $_POST['rd'];
						$st =$_POST['st'];
						$ci =  $_POST['ci'];
						$sta = $_POST['sta'];
						$pos =  $_POST['pos'];
						$co =  $_POST['co'];
						
						
						
						$result1=$mysqli->query("update employee_info set  Employee_Title='$t',Employee_First_Name='$fn',Employee_Middle_Name='$mn',Employee_Last_Name='$ln',Employee_Suffix='$s',Email='$e',Phone_Number='$ph',Mobile='$mo',Gender='$g',Date_of_Birth='$d',Active_date='$ad',Release_date='$rd' where Employee_Id='$k' and Company_ID='$k'  ");
						$result2=$mysqli->query("update employee_address set Street='$st',City_Town='$ci',State__Province='$sta',Postal_Code='$pos',Country='$co' where  Employee_Id='$k'");
						$result3=$mysqli->query("update login set Passward = '$p' where  Employee_id='$k' and Company_ID= '$k' ");
						
						if($result1){
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
                            <input type="text" id="fname"   name="i" class="small"  value= "<?php echo $row['Employee_Id'] ?>" readonly  >

                        </div>



                        <div class="form-group">
                            <label>Title</label><br>
                            <input type="text" id="fname" value= "<?php echo $row['Employee_Title']?>" name="t" class="small">

                        </div>
                        <div class="form-group">
                            <label>First Name</label><br>
                            <input type="text" id="lname"   value= "<?php echo $row['Employee_First_Name']?>" name="fn" class="medium">

                        </div>
                        <div class="form-group">
                            <label>Middle Name</label><br>

                            <input type="text" id="mname"  value= "<?php echo $row['Employee_Middle_Name']?>"  name="mn"  class="medium"><br>


                        </div>
                        <div class="form-group">
                            <label>Last Name</label><br>
                            <input type="text" id="lname"  value= "<?php echo $row['Employee_Last_Name']?>"  name="ln"   class="medium" >
                        </div>

                        <div class="form-group">
                            <label>Suffix</label><br>
                            <input type="text" id="suffix"   value= "<?php echo $row['Employee_Suffix']?>" name="s" class="small">
                        </div>

						<div class="form-group">
                        <label>Password</label><br>
						<input type="Password" id="Pass"   value= "" name="p" class="medium" >
						</div>


						<div class="form-group">
                        <label>Confirm Password</label><br>
                        <input type="Password" id="cpass"  value= "" name="cp" class="medium" >
						</div>


                        <div class="form-group" >
                            <label>Gender</label><br>
                          <input type="text" id="gender"  value= "<?php echo $row['Gender']?>" name="g" class="medium" >

                        </div>


						
						

                   
                        <div class="form-group">
                            <label>Date of Birth</label><br>
                            <input type="text" id="db"  value= "<?php echo $row['Date_of_Birth']?>" name="d" class="medium">

                        </div>


                        <div class="form-group">
                            <label>Active Date</label><br>
                            <input type="text" id="ac"  value= "<?php echo $row['Active_date']?>"  name="ad" class="medium" readonly>

                        </div>



                        <div class="form-group">
                            <label>Release Date</label><br>
                            <input type="text" id="rd"  value= "<?php echo $row['Release_date']?>"  name="rd" class="medium" readonly>

                        </div>









                    </div>





                    <div class="col-sm-6">

                        <div class="form-group">
                            <label>Email</label><br>
                            <input type="email" id="email"  value= "<?php echo $row['Email']?>"   name="e" class="big">
                        </div>



                        <div class="form-group">
                            <label>Phone</label><br>
                            <input type="text" id="phn"  value= "<?php echo $row['Phone_Number']?>"  name="ph" class="medium">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label><br>
                            <input type="text" id="mobile"  value= "<?php echo $row['Mobile']?>"  name="mo" class="medium">
                        </div>


                        <h3>Address</h3>





                        <div class="form-group">
                            <label>Street</label><br>
                            <input type="text" id="street"  value= "<?php echo $row1['Street']?>"  name="st" class="big">

                        </div>
                        <div class="form-group">
                            <label>City/Town</label><br>
                            <input type="text" id="city"  value= "<?php echo $row1['City_Town']?>"  name="ci" class="medium">

                        </div>
                        <div class="form-group">
                            <label>State/Province</label><br>

                            <input type="text" id="state"  value= "<?php echo $row1['State__Province']?>"  name="sta" class="medium" ><br>


                        </div>
                        <div class="form-group">
                            <label>Postal Code</label><br>

                            <input type="text" id="postal"  value= "<?php echo $row1['Postal_Code']?>"  name="pos"   class="medium"    ><br>


                        </div>

                        <div class="form-group">
                            <label>Country</label><br>

                            <input type="text" id="cntry"  value= "<?php echo $row1['Country']?>"  name="co" class="medium" ><br>
                        </div>


                    </div>





                </div>



                <div class=" col-sm-12  col-sm-10 col-sm-offset-1">
                    <div>

                       <button type="submit" class="mybtn" name="update" value="Save">Update</button>
                        <button type="cancel" value="Cancel">Cancel</button>
                    </div>


                </div>




            </div>
        </div>

    </form>
</section>



  <?php
						}
					
						
		
		?>
        
        
        






<?php 
include("footer.php");
?>
