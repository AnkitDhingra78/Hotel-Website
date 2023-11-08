 <!-- <?php
  session_start();
 // echo "welcome" .$_SESSION['username'];
 ?> -->
 <!-- <?php
 			  include("centralised/database.php");
 			  $q = "select * from registration where usertype='admin'";
 			  $data= mysqli_query($conn,$q);
 			  echo"<center><table>";
 			  while($row=mysqli_fetch_array($data))
 			  {
 				  extract($row);
 				  //echo "<td>$username</td>";
 			  }
 			   echo"</table></center>";
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
                                 <a class="nav-link" href="admin.php">user</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="customer.php">customer booking</a>
                              </li>
							  <li class="nav-item ">
                                 <a class="nav-link" href="dpayment.php">payment</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="roomimage.php">room</a>
                              </li>
                              <li class="nav-item ">
                                 <a class="nav-link" href="roomcategory.php">image upload</a>
                              </li>
							  <!-- <li class="nav-item ">
							                                   <a class="nav-link" href="login.php">login</a>
							                                </li> -->
							  <li class="nav-item ">
                                 <a class="nav-link"><?php echo ($_SESSION['fname']);?></a>
								
										<li class="nav-item">
										<a class ="nav-link" href="login.php">logout</a><li>
								  </ul>		
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