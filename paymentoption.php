
<?php
session_start();
$roomc=$_SESSION["Room_category"];
?>
<?php require_once("centralised/header2.php");?>
<head>
<?php require_once("centralised/link.php");?>
	 <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
	  <link href="css/payment.css" rel ="stylesheet">
<link href="css/paymentoption.css" rel="stylesheet">
<style type="text/gss">
  .button {
    center-y: == ::window[center-y];
    size: == ::[intrinsic-size];
  }
  
  @h [#sign-up]-<::window[center-x]>-[#log-in] gap(10);
</style>
</head>
<br>
<a class="button" id="sign-up" href="payment.php">Payment</a>
<a class="button" id="log-in"href="book.php">Payment Later</a>
