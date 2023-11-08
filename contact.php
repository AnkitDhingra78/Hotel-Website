<?php
if(isset($_GET["msg1"]))
{  
	echo"record already exist";
}
?>
<?php
if(isset($_GET["msg"]))
{  
	echo"record insert successfully";
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php require_once("centralised/link.php");?>
    <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </head>
   <!-- body -->
   <body>
    <?php require_once("centralised/header.php");?>
	<br><br>
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
     <div class="contact">
         <div class="container">
            <div class="row1">
               <div class="col-md-6">
                  <form id="request" class=" form-control main_form" style ="border:1px solid black;" method="post" action="showcontact.php">
                     <div class="row">
					<div class="col-md-12 ">
												<input class="contactus"
					                             type="text"  placeholder="enter firstname"  name="fname">
					                        </div>
											<div class="col-md-12 ">
												<input class="contactus"
					                             type="text"  placeholder="enter lastname"  name="lname">
					                        </div>
						<div class="col-md-12 ">
					                           <input class="contactus" placeholder=" enter password" type="password" name="password" required> 
					                        </div>
					            
					                        <div class="col-md-12">
					                           <input class="contactus" placeholder=" enter email" type="text" name="email" required> 
					                        </div>
					                        <div class="col-md-12">
					                           <input class="contactus" placeholder="phone number" type="text" name="phone" required>                          
					                        <!-- </div>
					                        						<div class="col-md-12">
					                           <input class="contactus" placeholder="dob" type="date" name="dob" required>                          
					                        </div>
					                        					
					                        <div class="col-md-12">
					                           <textarea class="textarea" placeholder="Address" type="text" name="address" required>Address</textarea>
					                        </div>- -->
						<!-- <div class="col-md-12">
							<label for="First Name">First Name:</label>
							<input type="text" name="fname" placeholder="Enter First Name" required >
						</div>
						<div class="col-md-12">
							<label for="Last  Name">Last Name:</label>
							<input type="text" name="lname" placeholder="Enter last Name" required >
						</div>
						<div class="col-md-12">
							<label for="Contact Us">Contact Us:</label>
							<input type="text" name="phone" placeholder="Enter Contact No." required >
						</div>
						<div class="col-md-12">
							<label for="Email">Email:</label>
							<input type="email" name="email" placeholder="Enter your valid email" required >
						</div>
						<div class="col-md-12">
						                           <textarea class="textarea" placeholder="Address" type="text" name="address" required>Address</textarea>
						                        </div> -->
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
			 </div>
		</div>
		</div>
               <!-- <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
                           </div>
                        </div>
                     </div> -->
      <!-- end contact -->
     <?php require_once("centralised/footer.php");?>
   </body>
</html>
