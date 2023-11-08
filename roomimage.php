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
<br><br>
<!-- <table id="table" class="fixnmix-table" style="border:1px solid black;width:60%;height:70%'">
			<thead>
				<tr>
					<th align="center" width="120">Room</th>
		              <th align="center" width="120">Image</th>
		              <th align="center" width="120">Check Out</th> 
		              <th  width="120">Price</th> 
		              <th align="center" width="120">Nights</th>
		              <th align="center" width="90">Amount</th>
				</tr>
				</thead> -->
			<?php
			  include("centralised/database.php");
			  $q = "select *from room_table";
			  $data= mysqli_query($conn,$q);
			  echo"<center><table style='border:1px solid black;width:60%;'>
			  <tr>
					<th>Room</th>
					<th>Image</th>
					<th>Room_category</th>
					<th>Beds</th>
					<th>Facilities</th>
					<th>Total_rooms</th>
					</tr>";

			  while($row=mysqli_fetch_array($data))
			  {
				 
			 				  extract($row);
							  
							//echo "<th>Room_id</th>";
							//echo "<th>image</th>";
							//echo "<th>Room_category</th>";
							//echo "<th>Beds</th>";
							//echo "<th>Facilities</th>";
							//echo "</tr>";
							echo "<tr>";
							echo"<td>$Room_id</td>";
							echo"<td><img src='$image' alt='room' width='40' height='50'></td>";
							echo"<td>$Room_category</td>";
							echo"<td>$Beds</td>";
							echo"<td>$Facilities</td>";
							echo"<td>$Total_rooms</td>";
							echo"</tr>";
			  }
			   echo"</table></center>";
			  ?>
			  <?php
			  require_once("centralised/footer.php");
			  ?>
			  </table>
		</body>
<html>