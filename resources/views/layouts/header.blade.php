<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@yield('title')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="shopping cart, online shop, online store, online, online business, shop, online market, market, store, others like konga, others like jumia, cheap online shop, medicine online store, medical equipments,captivate, captiv8, buy and sell, everything, shopping mall">
<meta name="theme" content="#000000">
@yield('css')
</head>

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_200">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all orders over N2000</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!-- Currency / Language / My Account -->

								<li class="currency">
									<a href="#">
										NGN
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										@guest
										<li><a href="customer-login"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="customer-register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
										@else
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>{{ Auth::user()->name }}</a></li>
										<li><a class="logout" href="{{route('logout')}}" 
											onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
											Logout

										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST">
											{{ csrf_field() }}
										</form>
									</li>
										@endguest
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="/">Captiv<span>8</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="/">home</a></li>
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></li>
								<li class="checkout">
									<a href="/cart">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items">{{ Cart::content()->count() }}</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>