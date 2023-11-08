<html>
<html>
<head>
<title>PEARL HOTEL</title>
<style>
</style>
</head>
<body>
<form method="post">
      <table border="4px" align="center" height="10%" width="50%" >
      <tr><td colspan="7" align="center">Room Details</td>
	  </tr>
	  <tr>
	   <th>Room id</th>
       <th>Room category</th>
	   <th>Beds</th>
	   <th>Facilities</th>
	   <th>Price</th>
	   <th colspan="2" width="20%">Action</th>
	  </tr>
      
<?php
include('db.php');
{
 $sql="SELECT Room_id,Room_category,Beds,Facilities,Price FROM room_table";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
   {
	echo"<tr><td>".$row[0]."<td>".$row[1]."<td>".$row[2]."<td>".$row[3]."<td>".$row[4]."</td><td><a href='roomupdate.php?Room_id=$row[0]'>Edit</a></td>
	<td><a href='#'>Delete</a></td></tr>";
   }
   mysqli_close($con);
}
?>
</table>
</form>
</body>
</html>