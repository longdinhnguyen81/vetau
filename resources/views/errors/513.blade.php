@extends('templates.train.master')
@section('content')
	<main>
	<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<h2>513 <i class="icon_error-triangle_alt color-white"></i> </h2>
						<p>Trang bạn yêu cầu không thể tìm thấy.</p>
						<div class="row">
							<p class="col-lg-6"><a class="color-white" href="/"> - Trang chủ</a></p>
							<p class="col-lg-6"><a class="color-white" href="{{ route('train.index.about') }}"> - Giới thiệu</a></p>
							<p class="col-lg-6"><a class="color-white" href="{{ route('train.index.banggia') }}"> - Giá vé tàu</a></p>
							<p class="col-lg-6"><a class="color-white" href="{{ route('train.post.index') }}"> - Tin tức</a></p>
							<p class="col-lg-6"><a class="color-white" href="{{ route('train.index.contact') }}"> - Liên hệ</a></p>
							<p class="col-lg-6"><a class="color-white" href="{{ route('train.cart.cart') }}"> - Giỏ hàng</a></p>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /error_page -->
	</main>
@stop