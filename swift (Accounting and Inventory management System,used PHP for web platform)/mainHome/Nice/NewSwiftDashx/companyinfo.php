<?php 
include("comhead.php");
?>

 



 <!--MY  SECTION-->
        <section class="mhead">
           <form class="form-inline" action="cominsert.php" method="post">
            <div class="container" class="customer">
                <div class="row">
                  

                           <div class="col-sm-12 col-sm-10">


                        <h2>Sign Up</h2>
                        
                        
                          <div class="col-sm-6">
                          
                          
                          
                          


                    
                    
                    
                     <div class="form-group">
                               <label>Company ID</label><br>
                               <input type="text" id="" placeholder="ID" name="i" class="medium">

                              </div>
                          
                    
                    
                     <div class="form-group">
                               <label>Company Name</label><br>
                               <input type="text" id="" placeholder="Company Name" name="cn" class="medium">

                              </div>
                          
                    
                      <div class="form-group">
                               <label>Type of Company</label><br>
                               <input type="text" id="" placeholder="Type of Company" name="tc" class="medium">

                              </div>
                          
                    
                     <div class="form-group">
                               <label>Type of Account</label><br>
                               <input type="text" id="" placeholder="Type of Account" name="ta" class="medium">

                              </div>
                              
                           
                    <div class="form-group">
                        <label>Email</label><br>
                        <input type="email" id="email" placeholder="Email" name="e" class="big">
                    </div>



                    <div class="form-group">
                        <label>Phone</label><br>
                        <input type="text" id="phn" placeholder="Phone" name="ph" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Mobile</label><br>
                        <input type="text" id="mobile" placeholder="Mobile" name="mo" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Fax</label><br>
                        <input type="text" id="fax" placeholder="Fax" name="fa" class="medium">
                    </div>


                    <div class="form-group">
                        <label>Other</label><br>
                        <input type="text" id="other" placeholder="Other" name="o" class="medium">
                    </div>

                    <div class="form-group">
                        <label>Website</label><br>
                        <input type="text" id="web" placeholder="Website" name="w" class="big">
                    </div>

       

                </div>
                       
                       
                         <div class="col-sm-6">
                         
                   
                   
                     <div><h4>Owner Info</h4></div>
                    
                    <div class="form-group">
                        <label>Title</label><br>
                        <input type="text" id="fname" placeholder="Title" name="t" class="small">

                    </div>
                    <div class="form-group">
                        <label>First Name</label><br>
                        <input type="text" id="lname" placeholder="First Name" name="fn" class="medium">

                    </div>
                    <div class="form-group">
                        <label>Middle Name</label><br>

                        <input type="text" id="mname" placeholder="Middle Name" name="mn"  class="medium" ><br>


                    </div>
                    <div class="form-group">
                        <label>Last Name</label><br>
                        <input type="text" id="lname" placeholder="Last Name" name="ln"   class="medium"       >
                    </div>

                    <div class="form-group">
                        <label>Suffix</label><br>
                        <input type="text" id="suffix" placeholder="Suffix" name="s" class="small">
                    </div>
                    
                    


                    <div class="form-group">
                        <label>Password</label><br>
                        <input type="Password" id="Pass" placeholder="Password" name="p"   class="medium" >
                    </div>


                    <div class="form-group">
                        <label>Confirm Password</label><br>
                        <input type="Password" id="cpass" placeholder="Confirm Password" name="cp"   class="medium">
                    </div>

                   
             
                        <div class="form-group">
                               <label>Date of Birth</label><br>
                               <input type="text" id="" placeholder="Date of Birth" name="b" class="medium">

                              </div>
                      
                              
                        <!--      <div class="form-group">
                            <label>Gender</label><br>
                            <select name="g" class="disp">
                        <option value=""></option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      
                           </select>


                        </div>-->
                   
                           
                        <div class="form-group">
                               <label>Gender</label><br>
                               <input type="text" id="" placeholder="gender" name="g" class="medium">

                              </div>
                      
                              <!--<div class="form-group">
                                 <label>Gender</label><br>
								  <select name="g" class="disp">
                             <label class="radio-inline"><input type="radio" name="g">Male</label>
                        <label class="radio-inline"><input type="radio" name="g">Female</label>
                           </select>

                              
                              </div> -->
                              
                   
                   
                   
                   
                   

                </div>   
                       
                       
                       
                       
                    </div>           
                     
                       
                        
          
            <div class="col-sm-12 col-sm-10">

               

                <div class="col-sm-6">
                    <div >

                        <h4>Address One</h4>
                    </div>

                    <div class="form-group">
                        <label>Street</label><br>
                        <input type="text" id="street" placeholder="Street" name="st" class="big">

                    </div>
                    <div class="form-group">
                        <label>City/Town</label><br>
                        <input type="text" id="city" placeholder="City/Town" name="ci" class="medium">

                    </div>
                    <div class="form-group">
                        <label>State/Province</label><br>

                        <input type="text" id="state" placeholder="State/Province" name="sta"  class="medium"  ><br>


                    </div>
                    <div class="form-group">
                        <label>Postal Code</label><br>

                        <input type="text" id="postal" placeholder="Postal Code" name="pos" class="medium"  ><br>


                    </div>

                    <div class="form-group">
                        <label>Country</label><br>

                        <input type="text" id="cntry" placeholder="Country" name="co"  class="medium" ><br>
                    </div>

                </div>




                <div class="col-sm-6">
                    
                        <div>

                        <h4>Address Two</h4>
                    </div>


                   

                    <div class="form-group">
                        <label>Street</label><br>
                        <input type="text" id="street" placeholder="Street" name="st2" class="big">

                    </div>
                    <div class="form-group">
                        <label>City/Town</label><br>
                        <input type="text" id="city" placeholder="City/Town" name="ci2" class="medium">

                    </div>
                    <div class="form-group">
                        <label>State/Province</label><br>

                        <input type="text" id="state" placeholder="State/Province" name="sta2"   class="medium" ><br>


                    </div>
                    <div class="form-group">
                        <label>Postal Code</label><br>

                        <input type="text" id="postal" placeholder="Postal Code" name="pos2"    class="medium" ><br>


                    </div>

                    <div class="form-group">
                        <label>Country</label><br>

                        <input type="text" id="cntry" placeholder="Country" name="co2"    class="medium" ><br>
                    </div>


                </div>


            </div>

            



            <div class="col-sm-12 col-sm-10">
                <!--<div>

                    <!--<button type="save" value="Save">Save</button>
                    <button type="cancel" value="Cancel">Cancel</button>
                </div>-->
				
				 <div class="form-group">
                        <input type="submit" value="submit" onclick="return valid()">
						
						 <button type="cancel" value="Cancel">Cancel</button>
                    </div>


            </div>
                
                

                </div>
               </div>



        </form>


    </section>

        
        
        




<?php 
include("footer.php");
?>


