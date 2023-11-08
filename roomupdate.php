<html>
<head>
<title>PEARL HOTEL</title>
<link rel="icon" href="images/logo.png" type="image/x.icon">

</head>
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
nav ul li a,nav ul li a:after,nav ul li a:before {
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
height:102%;
width:99.7%;
}
.section1{
border:solid   #BDC3CB;
height:99.3%;
width:49%;
position:absolute;
margin-left:753px;
background-color: #BDC3CB;
}
.section2{
height:100%;
width:53%;
background-image:url("images/bak.jpg");
background-size:cover;
}
.section5{
height:100%;
width:49.6%;
position:absolute;
background-color:#478c859c;
}
.section3{
border:solid  #BDC3CB;
height:60%;
width:80%;
position:absolute;
margin-top:145px;
margin-left:146px;
background-color:#BDC3CB;
box-shadow:0px 20px 30px rgba(10,10,10,0.8);
border-top-left-radius:25px;
border-bottom-left-radius:25px;									
}
.section4{border:blue;
width:80%;
position:absolute;
margin-top:145px;
margin-left:-5px;
height:60.9%;
background-image:url("images/bak.jpg");
background-size:cover;
border-bottom-right-radius:25px;									
border-top-right-radius:25px;									
box-shadow:0px 20px 30px rgba(10,10,10,0.8);

}
.section6{
width:101%;
position:absolute;
margin-left:-5px;
height:100%;
background-color:#478c8585;
border-bottom-right-radius:25px;									
border-top-right-radius:25px;									

}

</style>
<body>
<nav class="fill">
    <div id="navbar" class="navbar">
    <ul>
      <li><a href="http://localhost/hotel/admin1.php?" target="blank">ADMIN</a></li>

	  <li><a href="http://localhost/hotel/book.php?" target="blank">BOOK</a></li>
      <li><a href="contact.html">CONTACT US</a></li>
      <li><a href="funzone.html">FUN ZONE</a></li>
      <li><a href="meetings&events.html">MEETINGS&EVENTS</a></li>
      <li><a href="dining.html">DINING</a></li>
	  <li><a href="rooms.html">ROOMS</a></li>
	  <li><a href="home.html">HOME</a></li><img id="logo" src="images/logo.png" height="95%" width="7%">
    </ul>
	</div>
  </nav>
<!--------------------------------------------------------------------------->
       <div class="section" id="section">
	           <div class="section1"  id="section1">
			       <div class="section4" id="section4">
				       <div class="section6" id="section6">
					   </div>
				   </div>
              </div>
			  <div class="section2"  id="section2">
			        <div class="section5" id="section5">
                         <div class="section3" id="section3">
                             <form method="post">				   
		                      
                
<form method="post">
<?php
//db connection.............
include('db.php');
//get input from admin.............
$Room_id=$_GET['Room_id'];
//Select table from db
$sql="SELECT * FROM room_table where Room_id=$Room_id";
$result=mysqli_query($con,$sql);
   if(mysqli_num_rows($result)>0)
   {
     while($row=mysqli_fetch_array($result))  
    { 
       "<table>";
	   echo "<td>$row[1]</td></tr><br><br>";
	   echo "<tr><td>No.of Beds:</td>
                 <td><input class='input' name='beds' value='$row[2]'></td></tr><br><br>";
	    echo"<tr><td>Facilities:</td>
                 <td><input class='input' name='fac' value='$row[3]'></td></tr><br><br>";
        echo"<tr><td>Price:</td>
                 <td><input class='input' name='price' value='$row[4]'></td></tr><br><br>"; 
        echo"<tr><td><button type='submit' name='submit' value='submit'>Update</td></tr></table>";		 
      } 
   }
  ?>
<?php
if(isset($_POST['submit']))
{
$beds=$_POST['beds'];	
$fac=$_POST['fac'];
$price=$_POST['price'];
$sql="update room_table set Beds='$beds',Facilities='$fac',Price='$price' where Room_id=$Room_id";
   if(mysqli_query($con,$sql))
 {	
   echo'<script>alert("Update Successfully");</script>';
  }
  else
 {
   echo'<script>alert("Update Successfully");</script>';
 }
mysqli_close($con);
}
?>  
</form>
</div>
</div>
</div>
</div>
</body>
</html>