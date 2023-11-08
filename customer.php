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
			<?php
			  include("centralised/database.php");
			  $q = "select * from customer_booking ";
			  $data= mysqli_query($conn,$q);
			  echo"<center><table style='border:1px solid black;width:60%;'>
			  <tr>
			  <th>customer_id</th>
			  <th>Room_category</th>
			  <th>check_in_date</th>
			  <th>check_out_date</th>
			  <th>Room_No</th>
			   <th>First_name</th>
			    <th>Last_name</th>
				 <th>Contact_no</th>
				  <th>Email</th>
			  ";
			  while($row=mysqli_fetch_array($data))
			  {
			 				  extract($row);
							 // echo"<tr>";
							//echo "<th>fname</th>";
							//echo "<th>lname</th>";
							//echo "<th>phone</th>";
							//echo "<th>email</th>";
							//echo "<th>password</th>";
							//echo "</tr>";
							echo "<tr>";
							echo"<td>$customer_id</td>";
							echo"<td>$Room_category</td>";
							echo"<td>$check_in_date</td>";
							echo"<td>$check_out_date</td>";
							echo"<td>$Room_No</td>";
							echo"<td>$First_name</td>";
							echo"<td>$Last_name</td>";
							echo"<td>$Contact_no</td>";
							echo"<td>$Email</td>";
							echo"</tr>";
			  }
			   echo"</table></center>";
			  ?>
			  <?php
			  require_once("centralised/footer.php");
			  ?>
		</body>
<html>