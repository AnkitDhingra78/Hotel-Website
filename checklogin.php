<?php
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$phone=$_POST["phone"];
    $email=$_POST["email"];
	if(!isset($_SESSION))
	session_start();
   $_SESSION["email"]=$email;
   $_SESSION["fname"]=$fname;
   $_SESSION["lname"]=$lname;
   $_SESSION["phone"]=$phone;
	$password=$_POST["password"];
	//echo $u."-".$p;
	include("centralised/database.php");
	$q="select * from registration where email='$email' and password='$password'";
	$data=mysqli_query($conn,$q);
	$n=mysqli_num_rows($data);
	if($row = mysqli_fetch_array($data))
	{
		extract($row);
		if($usertype=="user")
		{
			header("location:book.php?fname=$fname");
		}
	else 
	{
		 $_SESSION["fname"]=$fname;
		header("location:admin.php?fname=$fname");
	}
	}
		else
		{
			header("location:login.php?msg=invalid");
		}
?>
