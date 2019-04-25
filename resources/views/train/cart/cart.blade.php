@extends('templates.train.master')
@section('content')
	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Giỏ hàng</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Thanh toán</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Hoàn thành!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</div>
		<!--/hero_in-->

		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<table class="table table-striped cart-list">
							<thead>
								<tr>
									<th>
										Sản phẩm
									</th>
									<th>
										Thời gian
									</th>
									<th>
										Số vé
									</th>
									<th>
										Thành tiền
									</th>
									<th>
										Xóa
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach(Session::get('cart') as $cart)
								<tr>
									<td>
										<div class="thumb_cart">
											<img src="http://via.placeholder.com/150x150/ccc/fff/thumb_cart_1.jpg" alt="Image">
										</div>
										<span class="item_cart">{{ $cart['title'] }} ngày {{ $cart['date'] }}</span>
										<span class="item_cart"></span>
									</td>
									<td>
										{{ $cart['time'] }}
									</td>
									<td>
										{{ $cart['people'] }}
									</td>
									<td>
										<strong>{{ $cart['cost']*$cart['people'] }}</strong>
									</td>
									<td class="options" style="width:5%; text-align:center;">
										<a href="{{ route('train.cart.destroy') }}"><i class="icon-trash"></i></a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4">
						<div class="box_detail">
							<div id="total_cart">
								Tổng <span class="float-right">
							@if(count(Session::get('cart'))>0)
								{{ $cart['cost']*$cart['people'] }}
							@else
								0
							@endif
							</span>
							</div>
							<ul class="cart_details">
								<li>Ngày đặt vé: <span>
							@if(count(Session::get('cart'))>0)
									{{ date_format(now(),'d-m-y') }}
							@else
								0
							@endif
								</span></li>
								<li>Số vé: <span>
							@if(count(Session::get('cart'))>0)
								{{ $cart['people'] }}
							@else
								0
							@endif
							</span></li>
							</ul>
							@if(count(Session::get('cart'))>0)
							<a href="{{ route('train.cart.checkout') }}" class="btn_1 full-width purchase">Thanh toán</a>
							@else
							<a class="btn_1 full-width purchase">Giỏ hàng rỗng</a>
							@endif
						</div>
					</aside>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->

@endsection
@section('meta')
    <title>Đại lý vé tàu siêu tốc đi Lý Sơn</title>
    <meta name="keywords" content="giá vé tàu lý sơn, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="news_keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta property="og:title" itemprop="name" content="Mua vé tàu siêu tốc đi Lý Sơn">    
    <meta property="og:url" itemprop="url" content="{{ route('train.cart.cart') }}">
    <meta property="og:description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta content="/templates/train/img/super-bien-dong.jpg" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="{{ route('train.cart.cart') }}" />
@stop