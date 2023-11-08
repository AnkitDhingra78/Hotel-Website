<?php
include ("centralised/database.php");
//$conn=mysqli_connect('localhost','connect','123','adhotel');
//$username=$_POST['username'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
//$dob=$_POST['dob'];
//$address=$_POST['address'];
$query = "select* from registration WHERE fname = '$fname' AND lname = '$lname' AND phone = '$phone' AND email = '$email' AND password = '$password'";
		$result = mysqli_query($conn, $query);
        if ( mysqli_num_rows ( $query ) > 0 )
        {

        header("location:contact.php?msg1=data already exist ");
        }
		else
		{
$q="insert into registration values
('$fname','$lname','$phone','$email','user','$password')";
 $data=mysqli_query($conn,$q);
	header("location:contact.php?msg=record insert successfully");
	}
?>
