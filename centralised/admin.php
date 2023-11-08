<html>
	<head>
	<?php require_once("centralised/header3.php");?>
	</head>
	<body>
			 <?php
			  include("centralised/database.php");
			  $q = "select * from registration where usertype='admin'";
			  $data= mysqli_query($conn,$q);
			  echo"<center><table>";
			  while($row=mysqli_fetch_array($data))
			  {
				  extract($row);
				  echo "<td>$username</td>";
			  }
			   echo"</table></center>";
			  ?>
		</body>
<html>