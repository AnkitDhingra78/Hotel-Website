<!-- <?php
		$email=$_GET["email"];
		$q="select * from registration where email='$email' ";
		include("centralised/database.php");
		$data = mysqli_query($conn,$q);
		$record = mysqli_fetch_array($data);
		extract($record);
?> -->
<?php
			  include("centralised/database.php");
			  $q = "select * from registration where email='$email'";
			  $data= mysqli_query($conn,$q);
			  while($row=mysqli_fetch_array($data))
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php require_once("centralised/link.php"); ?>
	   <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </head>
   <!-- body -->
   <body>
     <?php require_once("centralised/header2.php");?>     
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>About Us</h2>
                     <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                     <a class="read_more" href="about.php"> Read More</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src=" hotel images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room1.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                        <!-- <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room2.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                        <!-- <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room3.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                        <!-- <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room4.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                        <!-- <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room5.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                        <!-- <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="room.php"><img src=" hotel images/room6.jpg" alt="#"/></figure></a>
                     </div>
                     <div class="bed_room">
                       <!--  <h3>Bed Room</h3>
                        <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there </p> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
     
      <!--  contact -->
	  <?php require_once("centralised/footer.php");?>
      <!-- end footer -->
   </body>
</html>
