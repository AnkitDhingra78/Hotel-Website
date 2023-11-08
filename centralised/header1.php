<!--  <?php
 		$email=$_GET["email"];
 		$q="select *from registration where email='$email'";
 		include("centralised/database.php");
 		$data = mysqli_query($conn,$q);
 		$record = mysqli_fetch_array($data);
 		extract($record);
 ?>
 <?php
 			  include("centralised/database.php");
 			  $q = "select * from registration where email='$email'";
 			  $data= mysqli_query($conn,$q);
 			  while($row=mysqli_fetch_array($data))
 ?> -->
 <header>
 <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-3 ">
                     <div class="full">
                        <div class="center-desk">
                           <div class="img1">
                              <a href="index.php"><img src=" hotel images/logo.jpg" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="room.php">Our room</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
							  <li class="nav-item ">
                                 <a class="nav-link" href="login.php">login</a>
                              </li>
							   <li class="nav-item" name="$email">
							   <a href="dashboard.php"></a>
                              </li>
							  <!-- <li class="nav-item ">
							                                   <a class="nav-link" href="registration.php">Registration</a>
							                                </li> -->
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
		 <header>