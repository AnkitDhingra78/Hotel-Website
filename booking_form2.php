<?php
session_start();
$check_in=$_SESSION['checkin'];
$check_out=$_SESSION['checkout'];
$roomcount=$_SESSION['roomcount'];
?>
<html>
<head>
<link rel="icon" href="images/logo.png" type="image/x.icon">
</head>
<title>PEARL HOTEL</title>
<style>
nav{
  width:100%;
  height:12%;
  background-image:url("images/nav.png");
 }
 #logo{
margin-top:5px;
margin-right:225px;

}
.navbar{
background-color:#ffffff73;
position:relative;
height:102%;
margin-top:-17px;
}
nav ul {
  list-style: none;
   text-align:right;
}
nav ul li {
  float:right;
  margin-top:45px;
  margin-left:3px;
}
nav ul li a {
  padding: 15px;
  text-decoration: none;
  color: #191E24;
  font-size:21px;
 font-family:bold;
}
nav ul li a:after,nav ul li a:before {
  transition: all .2s;
}
nav.fill ul li a {
  position: relative;
}
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  height: 1px;
}
nav.fill ul li a {
  transition: all 2s;
}
nav.fill ul li a:after {
  text-align: left;
  content: '';
  margin: 0px;
  opacity: 0;
}
nav.fill ul li a:hover {
  color: white;
  z-index: 2;
}
nav.fill ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  
  100% {
    width: 100%;
    height: 100%;
    background: #1F9686;
  }
}
.box{
position:absolute;
height:90%;
width:85%;
box-shadow:0px 20px 30px rgba(0,0,0,0.8);
margin-left:110px;
margin-top:80px;

}
.form{
border:1px solid  #64C1B9;
height:99.7%;
width:40%;
margin-left:775px;
background-color:#64C1B9;
}
.image{
height:60%;
width:60%;
position:absolute;	
}
.image1{
height:40%;
width:60%;
position:absolute;
margin-top:385px;
background-color:#E0EDEC;	
}
.din{
border:solid 4px white;
position:absolute;
height:65%;
width:30%;
margin-left:40px;
margin-top:40px;
}
.text{
height:70%;
width:63%;
margin-left:280px;
margin-top:40px;
}
#view{
text-decoration:none;
color:#18AA9D;
}
#view:hover{
color:#81827E;
}
</style>
<body>
<nav class="fill">
    <div id="navbar" class="navbar">
    <ul>
      <li><a href="http://localhost/hotel/admin1.php?#" target="blank">ADMIN</a></li>
	  <li><a href="http://localhost/hotel/book.php?" target="blank">BOOK</a></li>
      <li><a href="contact.html" target="blank">CONTACT US</a></li>
      <li><a href="funzone.html" target="blank">FUN ZONE</a></li>
      <li><a href="meetings&events.html" target="blank">MEETINGS&EVENTS</a></li>
      <li><a href="dining.html" target="blank">DINING</a></li>
	  <li><a href="rooms.html" target="blank">ROOMS</a></li>
	  <li><a href="home.html">HOME</a></li><img id="logo" src="images/logo.png" height="95%" width="7%">
    </ul>
	</div>
  </nav>

<!-------------------------------------navbar end--------------------------------->
     <div id="section1" class="section1" style="border: solid #18AA9D ;height:75%;background-color:#18AA9D;">
	    <div id="box" class="box">
<!-----------------------------------------image-------------------------->
                <div id="image" class="image">
				     <img src="images/pool.jpg" height="100%" width="100%">
	            </div>
		         <div id="image1" class="image1">
				   <div id="din" class="din">
				     	<img src="images/desert.jpg" height="100%" width="100%">
                  </div>
				  <div id="text" class="text">
				   <h3 style="font-size:20px;padding-left:15px;padding-right:15px;color:#23887F;">Desserts are the fairy tales of the kitchen-a happily
				   -ever-after to supper.</h3>
				   <h3 style="font-size:20px;padding-left:15px;padding-right:15px;color: #81827E;">One cannot think well,love well,sleep well,if one has not dined well.</h3>
				   <h3 style="font-size:20px;padding-left:15px;padding-right:15px;color:#23887F;">Life is short.....eat dessert first</h3>
				   <a id="view" href="dining.html" style="margin-left:10px;font-size:18px;">VIEW THE MENU &nbsp;&nbsp; ></a>
                  </div>
	            </div>
<!-----------------------------------------form-------------------------->
		         <div id="form" class="form">
		         <table  cellspacing="12px" style="margin-left:40px;margin-top:30px;">
                 <form method="post">
                 <tr><td><label for="Rooms category" style="font-size:21px;color:white;">Room Category:</label></td>
<!--------------------------------------roomcategory--------------------->
	             <?php	   
                 // db connection.............
                   include('db.php');
                  $Room_category=$_GET['Room_category'];
				 ?>
				 <td> <input type="text" style="height:35px;border-radius:12px;border-color:#1F9686;" name="txtroomcategory" <?php echo "value='$Room_category'";?>
				 </tr></td> 
               
		         <tr width="40px"><td><label for="Check_in_date" style="font-size:21px;color:white;">Check-in-date:</label></td>
                     <td><input type="read" name="checkin" style="height:35px;border-radius:12px;border-color:#1F9686;" <?php echo "value='$check_in'";?>></tr></td>
		         <tr><td><label for="Check_out_date"style="font-size:21px;color:white;">Check-out-date:</label></td>
                     <td><input type="read" name="checkout" style="height:35px;border-radius:12px;border-color:#1F9686;"<?php echo "value='$check_out'";?>></tr></td>
			     <tr><td><label for="Rooms" name="roomno" style="font-size:21px;color:white;">Rooms:</label></td>
                     <td>
<!-------------------------------roomno-------------------------->					 
                  <?php
                     //db connection.............
                     include('db.php');
                     //Select table from db
                     
					 $sql="SELECT  Room_no FROM roomstatus_table where Room_category='$Room_category' and status='available'";
                    $result=mysqli_query($con,$sql);
					?>
                    <select  name="roomno[]" id="room" multiple style="height:50px;border-color:#1F9686;" required>
                   <?php
                    if(mysqli_num_rows($result)>0)
                  {
                     while($row=mysqli_fetch_array($result))  
                  { 
                  ?>
                    <option><?php echo $row['Room_no']; ?></option>
				     
                  <?php	  
                  } 
                 }
				
                ?>
                  </select>	 			
                  </tr></td>
					   
                 <tr><td><label for="First Name"style="font-size:21px;color:white;">First Name:</label></td>
                     <td><input type="text" name="fname" placeholder="Enter First Name" style="height:35px;border-radius:12px;border-color:#1F9686;" required ></tr></td>
                  <tr><td><label for="Last Name" style="font-size:21px;color:white;">Last Name:</label></td>
                      <td><input type="text" name="lname" placeholder="Enter Last Name" style="height:35px;border-radius:12px;border-color:#1F9686;"></td></tr>
                  <tr><td><label for="Contact.no" style="font-size:21px;color:white;">Contact No.:</label></td>
                      <td><input type="text" name="phone" placeholder="Enter Contact.no" style="height:35px;border-radius:12px;border-color:#1F9686;"pattern="[6789][0-9]{9}" required></td></tr>
                  <tr><td><label for="Email" style="font-size:21px;color:white;">Email:</label></td>
                      <td><input type="email" name="email" placeholder="Enter Email" style="height:35px;border-radius:12px;border-color:#1F9686;" required></td></tr>
                  <tr><td><label for="Aadhaar" style="font-size:21px;color:white;">Aadhaar No.:</label></td>
                      <td><input type="number" name="aadhar" placeholder="Enter Aadhaar.no" style="height:35px;border-radius:12px;border-color:#1F9686;" pattern="[0123456789][0-12]{12}" required></td></tr>
			      <tr><td><label for="Upload Id" style="font-size:21px;color:white;">Upload Id.:</label></td>
	                  <td><input type="file" name="file" style="height:35px;" required></td></tr>
				  <tr><td colspan="2"> <button type="submit" name="save_multi_select" style="border:solid #B4B5AE;background-color:#B4B5AE;color:white;font-size:15px;margin-left:160px;height:35px;border-radius:10px;" >BOOK NOW</button></td></tr>
				  </form>
 </table>
 </div>
             
<!-----------------------------------------form end---------------------->	       
         </div>
	 </div>
	 <div id="section2" class="section2" style="border: solid #B4B5AE; background-color:#B4B5AE;height:40%;">
	    
	 </div>
    
    
<?php

//insert data in tbl
if(isset($_POST['save_multi_select']))
{
//db connection.............
include('db.php');
//get input from user.............
$roomc=$_POST['txtroomcategory'];
$check_in=$_POST['checkin'];
$check_out=$_POST['checkout'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$id=$_POST['file'];
$dropdown1=$_POST['roomno'];
$count=0;
$r1=false;
$r2=false;
foreach($dropdown1 as $drop1)
{
	//echo $drop1 ."<br>";
    //insert query.........
$sql1="insert into customer_booking(Room_category,check_in_date,check_out_date,Room_No,First_name,Last_name,Contact_no,Email,Aadhaar_no,Id_Proof)values('$roomc','$check_in','$check_out','$drop1','$fname','$lname','$phone','$email','$aadhar','$id')";
$sql2="Update roomstatus_table Set status='Unavailable' where  Room_no=$drop1";
$r1=mysqli_query($conn,$sql1);
$r2=mysqli_query($conn,$sql2);
$count++;
if($r1)
 {
	 if($r2)
     {
	
	
       echo '<script>alert("Booked Successfully");';
	   
	   echo 'window.location.href="http://localhost/hotel/customerdetails.php";';
       echo '</script>';
	   
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
 $r3=mysqli_query($con,$sql3);
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
 
mysqli_close($con);

?>



</body>
</html>