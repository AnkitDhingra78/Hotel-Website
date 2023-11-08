<?php
session_start();
$email=$_SESSION['email'];
?>
<!--
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
.section{
background-image:url("images/cback.jpg");
background-size:cover;
width:100%;
height:90%;
}
.section1{
background-color:#45767099;
width:100%;
height:100%;
}
</style>
<body>
<nav class="fill">
    <div id="navbar" class="navbar">
    <ul>
      <li><a href="http://localhost/hotel/admin1.php?" target="blank">ADMIN</a></li>
	  <li><a href="http://localhost/hotel/book.php?" target="blank">BOOK</a></li>
      <li><a href="contact.html" target="blank">CONTACT US</a></li>
      <li><a href="funzone.html" target="blank">FUN ZONE</a></li>
      <li><a href="meetings&events.html" target="blank">MEETINGS&EVENTS</a></li>
      <li><a href="dining.html" target="blank">DINING</a></li>
	  <li><a href="rooms.html" target="blank">ROOMS</a></li>
	  <li><a href="home.html">HOME</a></li><img id="logo" src="images/logo.png" height="95%" width="7%">
    </ul>
	</div>
  </nav>--->
  
  
<!DOCTYPE html>
<html lang="en">
   <head>
   <?php require_once("centralised/link.php");?>
    <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </head>
   <!-- body -->
   <body>
<!--------------------------------form---------------------------->
     <div class="section" id="section">
	     <div class="section1" id="section1">
		   <div class="section2" id="section2" style="border:solid;width:60%;height:40%;margin-left:290px;margin-top:170px;position:absolute;background-color:white;">
		   
<?php
//db connection.............
include('centralised/database.php');
//get input from admin.............
//Select table from db
 $sql="SELECT * FROM  customer_booking  where  Email='$email' Limit 1";
 $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {
     while($row=mysqli_fetch_array($result))  
    { 
       echo"<tablecellpadding='8px'style='margin-top:20px;'>";
	   echo "<tr><td><span style='font-size:18px;'>Room Category: $row[1]</span></td></tr>";
	   echo "<tr><td><span style='font-size:18px;'>Check-in-date: $row[2]</span></td>
	             <td><span style='font-size:18px;'>Check-out-date: $row[3]</span></td></tr>";
				
	   echo	"<tr><td><span style='font-size:18px;'>first_name: $row[5]</span></td>
				 <td><span style='font-size:18px;'>Contact.No:$row[7]</span></td></tr>";
		echo"<tr><td><span style='font-size:18px;'>Email Id: $row[8]</span></td></tr>
                
       </table>";
	}
   }
  echo "<label for='Room.No'>Room.no: $row[9]</label>"; 
  $sql1="SELECT Room_no from customer_booking  where  Email='$email'";
 $html1="";
$result1=mysqli_query($conn,$sql1);
   if(mysqli_num_rows($result1)>0)
   {
     while($row1=mysqli_fetch_array($result1))  
    {  
      
       $html1= "<table border='2'>
	             <tr>
				 <td><span style='font-size:18px;'>$row1[0]</td>
				 </tr></table>";
                
      echo ($html1);		 
	}
   }
 mysqli_close($conn); 
  ?>
  <a href="book.php">back
  </div>
 </div>
</div>
</body>
</html>