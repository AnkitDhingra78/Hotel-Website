<?php
if(isset($_GET["msg"]))
{
	echo"invalid attempt";
}
?>
<html>
<head>
		<?php require_once("centralised/link.php");?>
		<script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</head>
	<body>
	<?php require_once("centralised/header.php");?>
	<br><br>
	<div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>login</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
	  <div class="contact">
         <div class="container">
            <div class="row1"> 
			<center>
               <div class="col-md-6">
				<form id="request" class="form-control main_form" method="post" action="checklogin.php">
                     <div class="row">
                        <div class="col-sm-12 ">
                           <input class="contactus" placeholder="enter valid email" type="email" name="email" required> 
                        </div>
                        <div class="col-sm-12">
                           <input class="contactus" placeholder="password" type="password" name="password" required> 
						   </div>
                        <div class="col-sm-12">
                           <button class="send_btn">Send</button>
							 </div>
						</center>
						</div>
					</div>
				</div>
			</div>
      </form>
	  <?php require_once("centralised/footer.php");?>
	</body>
</html>