<?php
//$fname=$_GET["fname"];
//$lname=$_GET["lname"];
//$email=$_GET["email"];
//$phone=$_GET["phone"];
$q="select * from  registration where fname='ankit'";
include ("centralised/database.php");
//echo $q;
$data = mysqli_query($conn,$q);
?>
<?php
session_start();
$check_in=$_SESSION['checkin'];
$check_out=$_SESSION['checkout'];
$roomcount=$_SESSION['roomcount'];
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$phone=$_SESSION['phone'];
$roomc=$_SESSION["Room_category"];
//$Room_no=$_SESSION["Room_no"];
?>
<html>
<head>
<?php require_once("centralised/link.php");?>
	 <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
	  <link href="css/payment.css" rel ="stylesheet">
</head>
<body>
 <?php require_once("centralised/header2.php");?>
<table class="pt-5">
 <!-- <tr><td><label for="First Name"style="font-size:21px;color:black;">First Name:</label></td>
                     <td><input type="read" name="fname" id="fname" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['fname']);?>'></tr></td>
                  <tr><td><label for="Last Name" style="font-size:21px;color:black;">Last Name:</label></td>
                      <td><input type="read" name="lname" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['lname']);?>'></td></tr>
                  <tr><td><label for="Contact.no" style="font-size:21px;color:black;">Contact No.:</label></td>
                      <td><input type="read" name="phone" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['phone']);?>'></td></tr>
 					   <tr><td><label for="Checkin" style="font-size:21px;color:black;">checkin:</label></td>
                      <td><input type="read" name="checkin" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['checkin']);?>'></td></tr>
 					   <tr><td><label for="Checkout" style="font-size:21px;color:black;">checkout:</label></td>
                      <td><input type="read" name="checkout" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['checkout']);?>'></td></tr>  
 					   <tr><td><label for="Checkout" style="font-size:21px;color:black;">Roomcategory:</label></td>
                      <td><input type="read" name="txtroomcategory" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['Room_category']);?>'></td></tr>   -->
					  </table>
<h1>Choose Payment</h1>
<p id="choosen-paymenttype">Credit Card</p>
<ul class="payment-types">
  <li class="paymenttype pp unselected-left">
    <div class="box">
    <header>
      <div class="card" id="pp-card">
        <div class="flipper">
          <div class="front">
            <div class="shine"></div>
            <div class="shadow"></div>
            <div class="card-bg">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/pp-front-bg.png" />
            </div>
          </div>
        </div>
      </div>
    </header>
    <form>
      <div class="form-content">
        <p><strong>About</strong></p>
 <p>This is a basic concept for a payment, checkout process. The user can select between the different payment types, each type has a seperate form to fill in the required data for the transaction. What I tried to provide:</p> 
      <ul>
        <li>A quick and easy way to fill the required form fields.</li>
        <li>Mobile friendly keyboard display</li>
        <li>Disabling auto-correction and spellcheck for names</li>
        <li>Avoid dropdown fields for a better UX.</li>
      </ul>     
      </div>
    </form>
    </div>
  </li>
  <li class="paymenttype selected cc">
    <div class="box">
    <header>
      <div class="card" id="cc-card">
        <div class="flipper">
          <div class="front">
            <div class="shine"></div>
            <div class="shadow"></div>
            <div class="card-bg">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/cc-front-bg.png" />
            </div>
            <div class="card-content">
              <div class="credit-card-type"></div>
              <div class="card-number">
                <span>1234 1234 1234 1234</span>
                <span>1234 1234 1234 1234</span>
              </div>
              <div class="card-holder">
                <em>Card holder</em>
                <span>Your Name</span>
                <span>Your Name</span>
              </div>
              <div class="validuntil">
                <em>Expire</em>
                <div class="e-month">
                    <span>
                      MM
                    </span>
                    <span>
                      MM
                    </span>
                </div>
                <div class="e-divider">
                     <span>
                      /
                    </span>
                    <span>
                      /
                    </span>
                </div>
                <div class="e-year">
                    <span>
                      YY
                    </span>
                    <span>
                      YY
                    </span>
                </div>
                
              </div>
            </div>
          </div>

          <div class="back">
            <div class="shine"></div>
            <div class="shadow"></div>
            <div class="card-bg">
             <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/cc-back-bg-new.png" />
            </div>
            <div class="ccv">
              <em>CCV Number</em>
              <strong></strong>
            </div>
            <div class="card-content">
              <div class="card-number">
                <span>4111 1111 1111 1111</span>
                <span>4111 1111 1111 1111</span>
              </div>
              <div class="card-holder">
                <span>Your Name</span>
                <span>Your Name</span>
              </div>
              <div class="validuntil">
                <span>
                  <strong class="e-month">MM</strong> /                 <strong class="e-year">YY</strong>
                </span>
                <span>
                  <strong class="e-month">MM</strong> /
                  <strong class="e-year">YY</strong>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <form method="POST" action="checkpayment.php">
	<tr><td><label for="First Name"style="font-size:21px;color:black;">First Name:</label></td>
                     <td><input type="read" name="fname" id="fname" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['fname']);?>'></tr></td>
                  <tr><td><label for="Last Name" style="font-size:21px;color:black;">Last Name:</label></td>
                      <td><input type="read" name="lname" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['lname']);?>'></td></tr>
                  <tr><td><label for="Contact.no" style="font-size:21px;color:black;">Contact No.:</label></td>
                      <td><input type="read" name="phone" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['phone']);?>'></td></tr>
					  <br>
					   <tr><td><label for="checkin" style="font-size:21px;color:black;">checkin:</label></td>
                      <td><input type="read" name="checkin" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['checkin']);?>'></td></tr>
						<br>
					   <tr><td><label for="checkout" style="font-size:21px;color:black;">checkout:</label></td>
                      <td><input type="read" name="checkout" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['checkout']);?>'></td></tr>  
					   <tr><td><label for="Room_category" style="font-size:21px;color:black;">Roomcategory:</label></td>
                      <td><input type="read" name="Room_category" style="height:35px;border-radius:12px;border-color:#1F9686;" value='<?php echo($_SESSION['Room_category']);?>'></td></tr>
					  <br>
      <div class="form-content">
        <div class="field">
          <input type="tel" id="cardnumber" maxlength="20" name="cardnumber"/>
          <span class="focus-bar"></span>
          <label for="cardnumber">Card number</label>
        </div>
        <div class="field">
          <input type="text" autocorrect="off" spellcheck="false" id="cardholder" maxlength="25" name="cardholder"/>
          <span class="focus-bar"></span>
          <label for="cardholder">Card holder (Name on card)</label>
        </div>
        <div class="field-group">
          <div class="col-50">
            <label for="expires-month">Expire (Valid until)</label>   
            <div class="field expire-date">
              <div>
                <input type="tel" id="expires-month" placeholder="MM" allowed-pattern="[0-9]" maxlength="2" name="expiremonth">
                <span class="focus-bar"></span>
              </div>
              <div class="divider">/</div>
              <div>
                <input type="tel" id="expires-year" placeholder="YY" allowed-pattern="[0-9]" maxlength="2" name="expireyear">
                <span class="focus-bar"></span>
              </div>
            </div>
          </div>
          <div class="col-50">
            <div class="field ccv">
              <span class="focus-bar"></span>
              <label for="ccv">CCV</label><input type="tel" id="ccv" autocomplete="off" maxlength="3" name="ccv" />
            </div>
          </div>
        </div>
        <button><span>Submit</span></button>
      </div>
    </form>
    </div>
  </li>
  <li class="paymenttype ec unselected-right">
    <div class="box">
    <header>
      <div class="card" id="ec-card">
        <div class="flipper">
          <div class="front">
            <div class="shine"></div>
            <div class="shadow"></div>
            <div class="card-bg">
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/513985/ec-front-bg.png" />
            </div>
          </div>
        </div>
      </div>
    </header>
    
     </div>
  </li>
</ul>
<!-- <?php

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
	//echo $drop1 ."<br>";
    //insert query.........
$sql1="insert into payment values('$cardnumber','$cardholder','$expiremonth','$expireyear','$ccv','$fname','$lname','$phone')";
$r1=mysqli_query($conn,$sql1);
?> -->
<!---
<script>
	(function payment() {
  var d = document,
      body = d.getElementsByTagName('body')[0],
	html = d.getElementsByTagName('html')[0],
      ppForm = d.getElementsByTagName('form')[0],
      ccForm = d.getElementsByTagName('form')[1],
      ecForm = d.getElementsByTagName('form')[2],
      cCard = d.querySelector('#cc-card'),
      pCard = d.querySelector('#pp-card'),
      eCard = d.querySelector('#ec-card'),
      info = d.querySelector('#choosen-paymenttype'),
      ccNumber = ccForm.querySelector('#cardnumber'),
      cNumber = d.querySelectorAll('.card-number'),
      ccName = ccForm.querySelector('#cardholder'),
      cName = d.querySelectorAll('.card-holder'),   
      ccMonth = ccForm.querySelector('#expires-month'),
      cMonth = d.querySelectorAll('.e-month'),
      ccYear = ccForm.querySelector('#expires-year'),
      cYear = d.querySelectorAll('.e-year'),
      ccCCV = ccForm.querySelector('#ccv'),
      cCCV = d.querySelector('.ccv strong'),
      ccCard = d.querySelectorAll('.credit-card-type'),
      defaultNumber = cNumber[0].getElementsByTagName('span')[0].innerHTML,
      defaultName = cName[0].getElementsByTagName('span')[0].innerHTML;
      
  
  init();
  
  function init() {
    var cardType, cardNumber, cardName, cardCCV;
    body.className = 'cc-bg';
    
    function switchPos(elm) {
      if (elm.classList.contains('selected')) { 
        if (elm.getElementsByTagName('input').length) {
          elm.getElementsByTagName('input')[0].focus();
        }
        return;
      }
      var selected = d.querySelector('.selected');
     
      if (elm.classList.contains('unselected-left')) {
        selected.classList.remove('selected');
        selected.classList.add('unselected-left');
        elm.classList.add('selected');
        elm.classList.remove('unselected-left');
        if (window.matchMedia("(max-width: 1039px)").matches) {
          setTimeout(function() {elm.scrollIntoView();}, 500);
        }
        
      } else if (elm.classList.contains('unselected-right')) {
        selected.classList.remove('selected');
        selected.classList.add('unselected-right');
        elm.classList.add('selected');
        elm.classList.remove('unselected-right');
        if (window.matchMedia("(max-width: 1039px)").matches) {
          setTimeout(function() {elm.scrollIntoView();}, 500);
        }
      }
    }
  
    addEvent(pCard,'click',function() {
      switchPos(d.querySelector('.paymenttype.pp'));
      body.className = 'pp-bg';
      info.innerHTML = 'PayPal';
    });
    addEvent(cCard,'click',function() {
      switchPos(d.querySelector('.paymenttype.cc'));
      body.className = 'cc-bg';
      info.innerHTML = 'Credit Card';
    });
    addEvent(eCard,'click',function() {
      switchPos(d.querySelector('.paymenttype.ec'));
       body.className = 'ec-bg';
      info.innerHTML = 'Bank account';
    });
    
    addEvent(ccNumber, 'focus', function() {
      cNumber[0].classList.add('glow');
    });
    addEvent(ccNumber, 'blur', function() {
      cNumber[0].classList.remove('glow');
    });
    
    addEvent(ccName, 'focus', function() {
      cName[0].classList.add('glow');
    });
    addEvent(ccName, 'blur', function() {
      cName[0].classList.remove('glow');
    });
    
    addEvent(ccMonth, 'focus', function() {
      cMonth[0].classList.add('glow');
    });
    addEvent(ccMonth, 'blur', function() {
      cMonth[0].classList.remove('glow');
    });
    
    addEvent(ccYear, 'focus', function() {
      cYear[0].classList.add('glow');
    });
    addEvent(ccYear, 'blur', function() {
      cYear[0].classList.remove('glow');
    });
    
    addEvent(ccCCV, 'focus', function() {
      cCard.classList.add('flipped');
    });
    addEvent(ccCCV, 'blur', function() {
      cCard.classList.remove('flipped');
    });
    
    
    addEvent(ccNumber, 'keyup', function() {
      cardNumber = this.value.replace(/[^0-9\s]/g,'');
      if (!!this.value.match(/[^0-9\s]/g)) {
        this.value = cardNumber;
      }
      cardType = getCardType(cardNumber.replace(/\s/g,''));
      switch(cardType) {
        case 'amex':
          parts = numSplit(cardNumber.replace(/\s/g,''), [4,6,5]);
          ccCard[0].className = 'credit-card-type amex';
          break;
        case 'mastercard': 
          parts = numSplit(cardNumber.replace(/\s/g,''), [4,4,4,4]);
           ccCard[0].className = 'credit-card-type mastercard';
          break;
        case 'visa': 
          parts = numSplit(cardNumber.replace(/\s/g,''), [4,4,4,4]);
           ccCard[0].className = 'credit-card-type visa';
          break;
        default:
          parts = cardNumber.split(' ');
          ccCard[0].className = 'credit-card-type';
      }
      cardNumber = parts.join(' ');
      if (cardNumber != this.value) {
        this.value = cardNumber;
      }
      if (!cardNumber) {
        cardNumber = defaultNumber;
      }
      syncText( cNumber, cardNumber);
    });
    addEvent(ccName, 'keyup', function() {
      cardName = this.value.replace(/[^a-zA-Z-\.\s]/g,'');
      if (cardName != this.value) {
        this.value = cardName;
      }
      if (!cardName) {
        cardName = defaultName;
      }
      syncText( cName, cardName);
    });
    addEvent(ccMonth, 'keyup', function(ev) {
      ev = ev || window.event;
      var month = this.value.replace(/[^0-9]/g,'');
      if(ev.keyCode == 38) {
        if(!month) {month = 0;}
        month = parseInt(month);
        month++;
        if(month < 10) {
          month = '0'+month;
        }
      }
      if(ev.keyCode == 40) {
        if(!month) {month = 13;}
        month = parseInt(month);
        month--;
        if(month == 0) { month = 1;} 
        if(month < 10) {
          month = '0'+month;
        }
        
      }
      if( parseInt(month) > 12) {
        month = 12;
      }
      if( parseInt(month) < 1 && month != 0) {
        month = '01';
      }
      if(month == '00') {
        month = '01';
      }
   
      if (month != this.value) {
        this.value = month;
      }
      if(month.toString().length == 2) {
        syncText( cMonth, month);
      }
    });
    addEvent(ccYear, 'keyup', function(ev) {
      ev = ev || window.event;
      var currentYear = new Date().getFullYear().toString().substr(2,2),
          year = this.value.replace(/[^0-9]/g,'');
      
      if(ev.keyCode == 38) {
        if(!year) {year = currentYear;}
        year = parseInt(year);
        year++;
        if(year < 10) {
          year = '0'+year;
        }
      }
      if(ev.keyCode == 40) {
        if(!year) {year = parseInt(currentYear) + 5;}
        year = parseInt(year);
        year--;
        if(year < 10) {
          year = '0'+year;
        }
      }
      
      if( year.toString().length == 2 && parseInt(year) < currentYear) {
        year = currentYear;
      }
      if (year != this.value) {
        this.value = year;
      }
      if (year > (parseInt(currentYear) + 5)) {
        year = (parseInt(currentYear) + 5);
        this.value = year;
      }
      
      
      if(year.toString().length == 2) {   
        syncText( cYear, year);
      }
    });
    addEvent(ccCCV, 'keyup', function() {
      cardCCV = this.value.replace(/[^0-9\s]/g,'');
      if (cardCCV != this.value) {
        this.value = cardCCV;
      }
     cCCV.innerHTML = cardCCV;
    });
  }
  
  function syncText( elCol, text ) {
    var collection;
    for(var j=0; j < elCol.length; j++) {
      collection = elCol[j].querySelectorAll('span');
      if (!collection.length) {
        elCol[j].innerHTML = text;
      } else {
        for(var i=0; i < collection.length; i++) {
          collection[i].innerHTML = text;
        }
      }
    }
  }
  
  function numSplit(number, indexes) {
    var tempArr = number.split(''),
        parts = [];
    for (var i=0, l = indexes.length; i < l; i++) {
      if (tempArr.length) {
        parts.push(tempArr.splice(0,indexes[i]).join(''));   
      }
    }
    return parts;
  }
  
  function getCardType(number) {
    var re;
    // Mastercard
    re = new RegExp("^5[1-5]");
    if (number.match(re) != null) {
      return "mastercard";
    }
    // AMEX
    re = new RegExp("^3[47]");
    if (number.match(re) != null) {
        return "amex";
    }
    
    // visa
    var re = new RegExp("^4");
    if (number.match(re) != null) {
      return "visa";
    }

    return "";
}
  
  function addEvent(elem, event, func) {
    elem.addEventListener(event,func);
  }
  
})();
</script>-->
	 </body>
	 </html>