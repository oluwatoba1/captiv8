@extends('layouts.master')

@section('title')
<title>Captiv8 Cart</title>
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link href="/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/css/categories_styles.css">
<link rel="stylesheet" type="text/css" href="/css/categories_responsive.css">
<link rel="stylesheet" type="text/css" href="/css/main_styles.css">
@endsection

@section('content')

			
			<div class="container product_section_container">				
				<div class="row">
					<div class="col product_section clearfix">
						<div class="breadcrumbs d-flex flex-row align-items-center">
							<ul>
								<li><a href="">Home</a></li>
								<li class="active"><a href="index.html"><i class="fa fa-angle-right" aria-hidden="true">Captiv8 Cart</i></a></li>
							</ul>
						</div>
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
									<th>&nbsp;</th>

								</tr>
							</thead>
							<tbody>
								@foreach($cartItems as $item)
									<tr>
										<td>{{ $item->name }}</td>
										<td>

											{!! Form::open(['route' => ['cart.update', $item->rowId], 'method' => 'PUT']) !!}
												
												<input class="input-mini" name="qty" oninput="this.form.submit()" type="text" value="{{ $item->qty }}">

											{!! Form::close() !!}
											
										</td>
										<td>&#X20A6;{{ number_format($item->price) }}</td>
										<td>&#X20A6;{{ number_format($item->subtotal) }}</td>
										<td>

											{!! Form::open(['route' => ['cart.delete', $item->rowId], 'method' => 'DELETE']) !!}

												<button type="submit"><i class="fa fa-trash-o "></i></button>

											{!! Form::close() !!}
										</td>
									</tr>
								@endforeach
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>&#X20A6;{{ (Cart::subtotal()) }}</strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
						<h5 class="cart-total right">
							<strong>Sub-Total : &#X20A6;{{ (Cart::subtotal()) }}</strong><br>
							<strong>VAT : &#X20A6;{{ Cart::tax() }}</strong><br>
							<strong>Total : &#X20A6;{{ Cart::total() }}</strong><br>
						</h5>
						<hr/>
						<p class="buttons center">				
							<button class="black_button" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
				</div>
			</div>
		</div>

@endsection

@section('scripts')
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/popper.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/plugins/easing/easing.js"></script>
<script src="/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="/js/categories_custom.js"></script>
<script>
	$(document).ready(function() {
		$('#checkout').click(function (e) {
			document.location.href = "checkout";
		})
	});
</script>

@endsection