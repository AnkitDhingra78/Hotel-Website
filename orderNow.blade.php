<!-- @section('content')
@include('layouts-admin.header') -->
 <?php require_once("centralised/link.php"); ?>
	   <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </head>
<?php require_once("centralised/header.php");
?>
	<main class="my-8">
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 rounded message-box">
                              <p class=" message-box">{{ $message }}</p>
                          </div>
                      @endif
					<div class="container">
						<div class="row">
								<div class="col-md-12">
									<table class="table">
										<tbody>
										
											<tr>
												<td>Amount</td>
												<td>{{ Cart::getTotal() }}</td>
											</tr>
											<tr>
												<td>Tax</td>
												<td>0.00</td>
											</tr>
											<tr>
												<td>Delivery Charge</td>
												<td>10.00</td>
											</tr>
											<tr>
												<td>total Amount</td>
												<td>{{ Cart::getTotal()+10.00 }}</td>
											</tr>
											 
										 
										</tbody>
									</table>
								</div>
								<div class="mb-3">
								  <label for="Address" class="form-label">Address</label>
								  <textarea class="form-control" id="address" rows="3"></textarea>
								</div>
								<form action="{{ route('cart.orderNow') }}">
								@csrf
									<div class="form-check form-group">
										<label for="paymentmode">Payment Method</label><br><br>
										<input class="form-check-input" type="radio" name="payment" id="payment">
										<label class="form-check-label" for="radio">Online Payment</label><br><br>
										<input class="form-check-input" type="radio" name="payment" id="payment">
										<label class="form-check-label" for="radio">EMI Payment</label><br><br>
										<input class="form-check-input" type="radio" name="payment" id="payment">
										<label class="form-check-label" for="radio">Pay On Delivery</label><br><br>
									</div>
								</form>
							</div>
					</div>
					<div class="text-center">
						  <form action="{{ route('cart.orderNow') }}" method="POST" class="btn btn-success">
							@csrf
							<button class="px-6 py-2 text-red btn btn-success">Order Now</button>
						  </form>
					</div>
					<div class="btn">
					<a href="/home"button class="px-6 py-2 text-red btn btn-danger" type="submit" >Back</a>
				  </div>
			</div>
			</div>
			
		</div>
	</main>
			