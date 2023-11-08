<html>
	<head>
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
	</head>
	<body>
<?php require_once("centralised/header3.php");?>


       <div id="col" class="col">
	    <form method="post" enctype="multipart/form-data"class="form-control main_form">
	      <table height="50%" width="5n5%"style="margin-left:auto;margin-right:auto;margin-top:70px;">
		  <!-- <?php
		  						include('centralised/database.php');
		  						$Room_id = 1;
		  						$q = "select max(Room_id) as maxid from room_table";
		  						$data = mysqli_query($conn,$q);
		  						$row = mysqli_fetch_array($data);
		  						//extract($row);
		                          $Room_id = $Room_id + 1;
		  						?> -->
						<table style="width:30%;height:20px;text-align:center;border:1px solid white;">
						<tr>
						<th></th>
						<td>
						<input type="show" name="Room_id" value="<?php echo $Room_id; ?>">
						</td>
			<tr><td align="right"><label id="roomc" style="color:#30448D;font-size:20px;" for="Room Category">Room Category:</label></td>
                <td align="center"><input type="text" class="input" style="height:30px;border:3px solid #CDD2D5;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;"id="room" placeholder="Room Category" name="room" required><br><br></td>
			</tr>
            <tr><td align="right"><label id="roomc" style="color:#30448D;font-size:20px;" for="No.of Beds">No.of Beds:</label></td>
			    <td><input type="text" class="input"  style="height:30px;border:3px solid #CDD2D5;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;" id="no." placeholder="No.of Beds" name="beds" required><br><br></td>
             </tr>
			<tr>
			   <td align="right" width="50%" height="40%"><label id="fac" style="color:#30448D;font-size:20px;" for="Facilities">Facilities:</label></td>
			    <td width="10%" height="40%" colspan="2" ><input type="checkbox" class="fac" style="height:20px;width:15px;" id="techo" name="techno[]" value="Wifi"><font color="#30448D" font size="4px">Wifi</font></td>
				<td width="40%" height="40%" colspan="2"><input type="checkbox" class="fac" style="height:20px;width:15px;margin-left:20px;" id="techo" name="techno[]" value="TV"><font color="#30448D" font size="4px">TV</font></td>
		    </tr>
			 <tr><td width="80%" colspan="2" align="right"><input type="checkbox" style="height:20px;width:15px;margin-left:50px;" id="techo" name="techno[]" value="Complimentary coffee"><font color="#30448D" font size="4px">Complimentary coffee</font></td>
                 <td width="20%"colspan="2"><input type="checkbox" style="height:20px;width:15px;margin-left:20px;" id="techno" name="techno[]" value="AC"><font color="#30448D" font size="4px">AC</font></td>
             </tr>
            <tr><td align="right"><label id="roomc" style="color:#30448D;font-size:20px;" for="Price">Price:</label></td>
			     <td><input type="number" style="height:30px;border:3px solid #CDD2D5;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;" class="input" id="price" placeholder="Rs/-" name="price" required><br><br></td>
             </tr>
            <tr><td align="right"><label id="roomc" style="color:#30448D;font-size:20px;" for="Price">No.of Rooms:</label></td>
			    <td><input type="Price" style="height:30px;border:3px solid #CDD2D5;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;" class="input" id="totalrooms" placeholder="No.of Rooms" name="totalrooms" required><br><br></td>

<tr>
							<th>Image</th><td><input type ="file" name="image"></td>
							</tr>
			 <tr><td align="center" colspan="4"><button type="submit" name="s1" style="height:40px;width:80px;border-radius:50px;background-color:#30448D;border:3px solid #30448D;color:white;"value="submit">Add</button></td>
			 </tr>			
<?php
//insert data in tbl
if(isset($_POST['s1']))
{
//db connection.............
include('centralised/database.php');
//get input from admin.............
$filename=$_FILES["image"]["name"];
$tempname=$_FILES["image"]["tmp_name"];
$folder="roomimage/".$filename;
move_uploaded_file($tempname,$folder);
$roomcategory=$_POST['room'];
$beds=$_POST['beds'];
$price=$_POST['price'];
$totalrooms=$_POST['totalrooms'];
$checkbox1=$_POST['techno'];
$chk=" ";  
foreach($checkbox1 as $chk1)
 {
	$chk .=$chk1.",";  
 }
 //echo $chk;
 $sql= "insert into room_table(image,Room_category,Beds,Facilities,Price,Total_rooms)values('$folder','$roomcategory','$beds','$chk','$price','$totalrooms')";
 if(mysqli_query($conn,$sql))
{
  echo'<script>alert("Add Successfully")</script>';
}
else
{
  echo'<script>alert("Failed to insert")</script>';
}
 mysqli_close($conn);	
}
?>
  </table>
   </form>
  </div>
	</div>
	<?php
			  require_once("centralised/footer.php");
			  ?>
</body>
</html>
