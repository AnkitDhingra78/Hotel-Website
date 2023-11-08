<!DOCTYPE html>
<html lang="en">
<head>
<!-- <?php require_once("headincludes.php"); ?> -->
  </head>

  <body>
   <!-- <?php require_once("headermenu.php"); ?> -->
   <div class="pre header" style="text-align:center;">
	  <div class="container" >
        <div class="row"">
            <div class="section-heading" >
			<center>
              <h1>product</h1>
				</center>
           </div>
					<div class="container">
						<div class="row">
						<div class='col-md-4'>
						</div>
					</div>
				</div>
 <?php
			  include('centralised/database.php');
			  $q = "select * from room_table";
			  $data= mysqli_query($conn,$q);
			  while($row=mysqli_fetch_array($data))
			  {
				  extract($row);
				  echo" <div class='col-md-4' style='border:1px solid white;'> 
				<div class='featured-item img'>
				  <div class='image' >
				  <img src='$image' alt='product'>
				  </div>
				  <div class='roomcategory'><h4>$</h4>
				   <div class='price'><h6>$price</h6>
				  </div></div></div></div>
				  ";
			  }
			  ?>
			  </div></div>
	<?php require_once("footer.php"); ?>
  </body>
  </html>