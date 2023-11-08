<html>
<html>
<head>
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
.rooms
{
background-image:url("images/backg.jpg");
background-size:cover;
height:99%;
width:100%;
position:relative;
}
.section{
position:absolute;
height:80%;
width:80%;
box-shadow:5px 30px 30px rgba(0,0,0,0.9);
border-radius:30px;
margin-left:150px;
margin-top:80px;

}
.col1{
width:50%;
height:100%;
position:absolute;

}
.col{
width:50%;
margin-left:600px;
height:99%;
position:absolute;
}

</style>
</head>
<link rel="icon" href="images/logo.png" type="image/x.icon">
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
	  <li><a href="home.html" target="blank">HOME</a></li><img id="logo" src="images/logo.png" height="95%" width="7%">
    </ul>
	</div>
  </nav>

<!------------------------------------image---------------------------------->
       <div class="rooms" id="rooms">
	        <div class="section" id="section">
		             <div id="col1" class="col1">
					     <image style="border-bottom-left-radius:30px;border-top-left-radius:30px;" src="images/room12.jpg" height="100%" width="100%">     			   

			         </div>

	               
<!------------------------------------form------------------------->

			    <div class="col" id="col">
                        <form method="post">
	                    <table  height="50%" width="75%"style="margin-left:auto;margin-right:auto;margin-top:120px;">
			            <tr><td align="right"><label id="roomc" style="color:#178B7B;font-size:22px;" for="Room No.">Room No.:</label></td>
			                <td><input type="number" style="height:35px;border:3px solid #969694;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;" class="input" id="totalrooms" placeholder="Room.no" name="roomno" required></td>
						</tr>
			            <tr><td align="right"><label id="roomc" style="color:#178B7B;font-size:22px;" for="Room Category">Room Category:</label></td>
                            <td><select class="input" style="height:35px;border:3px solid #969694;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;"id="room" placeholder="Room Category" name="room" required>
				                <option value="Deluxe Rooms">Deluxe Rooms</option>
				                <option value="Family Suites">Family Suites</option>
				                <option value="Balcony Executives Suites">Balcony Executives Suites</option></select></td>
						</tr>
			            <tr><td align="right"><label id="roomc" style="color:#178B7B;font-size:22px;" for="Status">Status:</label></td>
			                <td><select type="status" style="height:35px;border:3px solid  #969694;background-color:#CDD2D5;margin-top:15px;border-radius:10px;margin-left:10px;" class="input" id="totalrooms" name="status" required>
                                <option value="Available">Available</option>
				                <option value="Unavailable">Unavailable</option></select></td>
						</tr>		
			            <tr><td align="center" colspan="4"><button type="submit" name="s1" style="font-size:18px;height:40px;width:80px;border-radius:50px;background-color:#178B7B;border:3px solid #178B7B;color:white;margin-top:20px;"value="submit">Add</button></td>
			            </tr>
				</div>
			 </div>
       </div>
              
<?php
//insert data in tbl
if(isset($_POST['s1']))
{
//db connection.............
include('db.php');
//get input from admin.............			 
$roomno=$_POST['roomno'];
$roomc=$_POST['room'];
$status=$_POST['status'];
$sql = "insert into  roomstatus_table(Room_no,Room_category,status)values('$roomno','$roomc','$status')";
 if(mysqli_query($con,$sql))
{
	//echo $roomno;
 echo '<script>alert("Add Successfully")</script> ';
}
else
{
  echo'<script>alert("Failed to insert!")</script>';
}
 
mysqli_close($con);
}
?>
</table>
</form>
</body>
</html>