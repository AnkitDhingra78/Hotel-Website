<?php

//insert data in tbl
if(isset($_POST['save_multi_select']))
{
//db connection.............
include('centralised/databse.php');
//get input from user.............
$roomc=$_POST['txtroomcategory'];
$check_in=$_POST['checkin'];
$check_out=$_POST['checkout'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
//$aadhar=$_POST['aadhar'];
//$id=$_POST['file'];
$dropdown1=$_POST['roomno'];
$count=0;
$r1=false;
$r2=false;
foreach($dropdown1 as $drop1)
{
	//echo $drop1 ."<br>";
    //insert query.........
$sql1="insert into customer_booking(Room_category,check_in_date,check_out_date,Room_No,First_name,Last_name,Contact_no,Email)values('$roomc','$check_in','$check_out','$drop1','$fname','$lname','$phone','$email')";
$sql2="Update roomstatus_table Set status='Unavailable' where  Room_no=$drop1";
$r1=mysqli_query($conn,$sql1);
$r2=mysqli_query($conn,$sql2);
$count++;
if($r1)
 {
	 if($r2)
     {
	
	
       echo '<script>alert("Booked Successfully");';
	   
	   //echo 'window.location.href="http://localhost/A.Dhotel/customerdetails.php";';
       //echo '</script>';
	   
     }
     else
      {
	     echo'<script>alert ("Something went wrong!")</script>';

     }
 }
}

 $total=$roomcount-$count;
 
 //echo $total;
// echo $count;
 //echo $roomcount;
// echo $roomc;

 $sql3="Update room_table Set Available_rooms='$total' where  Room_category='$roomc'";
 $r3=mysqli_query($conn,$sql3);
 if($r3)
 {

	// echo "room count decreased";


 }
 else
 {
	// echo "Room not updated";
 }
$_SESSION['email']=$email;

}
 
mysqli_close($conn);

?>
 <?php require_once("centralised/footer.php");?>