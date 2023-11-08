<?php
if(isset($_GET["msg"]))
{
	echo"booking done";
}
?>
<?php
session_start();
?>
<html>
<?php require_once("centralised/link.php");?>
	 <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
</head>
<body>
 <?php require_once("centralised/header2.php");?>

<!--------------------------------------------form--------------------------------->
<!-----------------------form start-------------------->
		          <div id="col" class="col-lg-12">
				  <br><br>
				    <!-- <h4 id="book">Book a Room</h4> 
				     <form method="post">
					   <label for="Check-in-date" style="font-size:18px;margin-left:40px;">Check-in-date:</label>
				       <input type="date" id="date" name="checkin" style="height:40px;border-radius:20px;margin-left:40px;width:80%;" required><br><br><br>
					   <label for="Check-out-date" style="font-size:18px;margin-left:40px;">Check-out-date:</label>
					   <input type="date" id="outdate" name="checkout" style="height:40px;border-radius:20px;margin-left:40px;width:80%;"required><br><br><br>

                       <button type="submit" name="s1" id="s1"value="submit"style="border-radius:20px;border-color:#269C8E;font-size:15px;color:white;background-color:#269C8E;height:40px;margin-left:40px;width:80%">Check Availability</button>
					  </form>-->
					  <form  method="post">
						  <div class="form-group">
							<label for="Check-in-date">Check-in-date:</label>
							<input type="date" class="form-control" id="date" name="checkin">
						  </div>
						  <div class="form-group">
							<label for="Check-out-date">Check-out-date</label>
							<input type="date" class="form-control" id="outdate" name="checkout" >
						  </div>
						  <div class="text-center">
							  <button type="submit"  name="s1" id="s1"value="submit"class="btn btn-success text-center align-items-center">Check Availability</button>
						  </div>
					</form>
                   </div>
		         </div>
           </div>

<!--------------------------rooms----------------------->

<?php
if(isset($_POST['s1']))
{
$check_in = $_POST['checkin'];
$check_out = $_POST['checkout'];
		
//include file of database connection here..........
include('centralised/database.php');
//Select table from db
$sql="SELECT * FROM room_table ";

$result=mysqli_query($conn,$sql);
$html="";
if(mysqli_num_rows($result)>0)
  { 
	echo "<div  id='backg'>";

	 echo "<div  id='backgd'>";
     $html="<table width='100%'  cellpadding='12px'>";
  
	 while($row=mysqli_fetch_array($result))
    {		
					$html.="<tr><td style='font-size:20px;color:#269C8E;'><hr width='190px' align='left' color='#269C8E'></td></tr>
					<tr><td><img src='$row[1]' alt='product' width='290' height='100'>
					<span style='border:2px solid  #929899;border-radius:10px;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;background-color:white;'>$row[2]</span></td>
					<tr><td><label for='No.of beds' style='font-size:18px;'>No. of beds: </label><span style='border:2px solid  #929899;border-radius:10px;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;background-color:white;'>$row[3]</span></td>
				    <td><label for='Facilites' style='font-size:18px;'>Facilites: </label><span style='border:2px solid  #929899;border-radius:10px;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;background-color:white;'>$row[4]</td>
				    <td><label for='Price' style='font-size:18px;'>Price: </label><span style='border:2px solid  #929899;border-radius:10px;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;background-color:white;'>$row[5]</td>
				    <td><label for='Rooms Available' style='font-size:18px;'>Rooms Available: </label><span style='border:2px solid  #929899;border-radius:10px;padding-top:5px;padding-bottom:5px;padding-left:5px;padding-right:5px;background-color:white;'>$row[6]</td>
	                <td><a id='booknow' name='s1' href='booking_form.php?Room_category=$row[Room_category]'
					style='text-decoration:none;padding-top:9px;padding-left:9px;padding-right:9px;padding-bottom:9px;border-radius:10px;'>BOOK</a></td></tr><";
					
					
     $roomcount=$row[6];   
   }
     $html.="</table></div></div>";
	  mysqli_close($conn);
	  echo $html;
  }
    $_SESSION['checkin']=$check_in;
	$_SESSION['checkout']=$check_out;
	$_SESSION['roomcount']=$roomcount;
	//$_SESSION['Price']=$Price;
	//$_SESSION['roomno']=$roomno;
	 //$_SESSION["Room_category"]=$roomc;
	//$SESSION['Room_category']=$Room_category;
}
?>
</div>
</form>
 <?php require_once("centralised/footer.php");?>
	 </body>
	 $_SESSION["Room_category"]=$roomc;	 </html>