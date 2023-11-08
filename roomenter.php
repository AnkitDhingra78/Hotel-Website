<?php
if(isset($_GET["msg"]))
{
	echo"product enter successfully";
}
?>
<html>
	<head>
		<?php require_once("headincludes.php");?>
	 
			<?php require_once("headermenu2.php");?>
    </head>
	<body>
	<br>
	<center>
	<br>
		<div class="section heading">
 <form method="post" action="showproduct.php"enctype="multipart/form-data"> 
 
		<?php
				$link = mysqli_connect("localhost", "root", "", "dhingra");
						$productid = 1;
						$q = "select max(productid) as maxid from product";
						$data = mysqli_query($link,$q);
						$row = mysqli_fetch_array($data);
						extract($row);
                        $productid = $maxid + 1;
						?>
						<table style="width:30%;height:20px;text-align:center;">
						<tr>
						<th></th>
						<td>
						<input type="hidden" name="productid" value="<?php echo $productid; ?>">
						</td>
						<tr> 
						<th>productname</th><td><input type="text" name="productname"></td>
						</tr>
						<tr> 
						<th>price</th><td><input type="text" name="price"></td>
						</tr>
						<tr>
							<th>Image</th><td><input type ="file" name="image"></td>
							</tr>
							<tr>
							<th></th><td><input type ="submit" value="submit" name="submit"></td>
							</tr>
                      </br>
		          </div>
             </center>
	     </table>
		 <?php require_once("footer.php"); ?>
     </body>
</html>
