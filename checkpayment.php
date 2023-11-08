<?php

//insert data in tbl
//db connection.............
include('centralised/database.php');
//get input from user.............
$cardnumber=$_POST['cardnumber'];
$cardholder=$_POST['cardholder'];
$expiremonth=$_POST['expiremonth'];
$expireyear=$_POST['expireyear'];
$ccv=$_POST['ccv'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$Room_category=$_POST['Room_category'];
$check_in=$_POST['checkin'];
$check_out=$_POST['checkout'];
	//echo $drop1 ."<br>";
    //insert query.........
$sql1="insert into payment values('$cardnumber','$cardholder','$expiremonth','$expireyear','$ccv',
'$fname','$lname','$phone','$Room_category','$check_in','$check_out')";
echo $sql1;
$r1=mysqli_query($conn,$sql1);
header("location:book.php?msg=booking done");
?>