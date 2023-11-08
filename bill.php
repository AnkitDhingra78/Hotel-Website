<?php
session_start();
?>
<?php require_once("centralised/link.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD HOTELS</title>
    <link rel="stylesheet" href="style.css">
	 <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
	  <link href="css/bill.css" rel ="stylesheet">
</head>
<body>
    
<div class="container">
    
    <div class="receipt_header">
    <h1>AD HOTELS</h1>
  <!--   <h2>Address: Lorem Ipsum, 1234-5 <span>Tel: +1 012 345 67 89</span></h2> -->
    </div>
    
    <div class="receipt_body">

        <!-- <div class="date_time_con">
            <div class="date">11/12/2020</div>
            <div class="time">11:13:06 AM</div>
        </div> -->

        <div class="items">
            <table>
        
                <thead>
                    <th>QTY</th>
                    <th>ITEM</th>
                    <th>AMT</th>
                </thead>
        
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Lorem ipsum</td>
                        <td>2.3</td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>

                    <tr>
                        <td>Cash</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>

                    <tr>
                        <td>Change</td>
                        <td></td>
                        <td>32.1</td>
                    </tr>
                </tfoot>

            </table>
        </div>

    </div>


    <h3>Thank You!</h3>

</div>

</body>
</html>
