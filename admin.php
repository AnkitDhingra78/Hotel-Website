 <?php
  session_start();
  //echo "welcome" .$_SESSION['username'];
?> 
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
			  $q = "select * from registration where usertype='user'";
			  $data= mysqli_query($conn,$q);
			  echo"<center><table style='border:1px solid black;width:60%;'>
			  <tr>
			  <th>fname</th>
			  <th>lname</th>
			  <th>phone</th>
			  <th>email</th>
			  <th>password</th>
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
							echo"<td>$fname</td>";
							echo"<td>$lname</td>";
							echo"<td>$phone</td>";
							echo"<td>$email</td>";
							echo"<td>$password</td>";
							echo"</tr>";
			  }
			   echo"</table></center>";
			  ?>
			  <?php
			  require_once("centralised/footer.php");
			  ?>
		</body>
<html>