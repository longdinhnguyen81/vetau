@extends('templates.train.master')
@section('content')
	<main>
	<section class="hero_in general">
		<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>Tìm kiếm vé tàu</h1>
		</div>
		</div>
	</section>
	<!--/hero_in-->

	<div class="container margin_60_35">
		<div class="row">
			<aside class="col-lg-3 mt-5">
				<form method="get" action={{ route('train.index.vetau') }}>
					<h5 class="primary-color">Tìm kiếm chuyến tàu:</h5>
					<div class="form-group">
						<label>Chuyến đi:</label>
						<select class="form-group select-option" name="from">
							<option>Đảo Lý Sơn - Cảng Sa Kỳ</option>
							<option>Cảng Sa Kỳ - Đảo Lý Sơn</option>
						</select>
					</div>
					<div class="form-group">
						<label>Ngày</label>
	                    <input class="form-control" type="text" name="dates" value="" placeholder="When..">
					</div>
					<div class="form-group">
						<label>Số lượng</label>
						<input class="form-control" type="number" name="people" />
					</div>
					<div class="form-group text-center">
						<button class="btn btn-custom">Tìm</button>
					</div>
					<!--/collapse -->
				</form>
				<!--/filters col-->
			</aside>
			<!-- /aside -->
			<div class="pricing-container cd-has-margins col-lg-9">
				<div class="container">
					|<i class="icon-home"></i>|
					<span>Kết quả tìm kiếm</span>
					<div class="row">
						<div class="col-lg-3 col-6 style-info-trip active-trip">Chọn chuyến đi</div>
						<div class="col-lg-3 col-6 style-info-trip">Điền thông tin</div>
						<div class="col-lg-3 col-6 style-info-trip">Thanh toán</div>
						<div class="col-lg-3 col-6 style-info-trip">Nhận vé</div>
					</div>
				</div>
				<!--/pricing-switcher -->
				<ul class="pricing-list bounce-invert row">
				@if($trains)
					@foreach($trains->cost as $cost)
					<li class="popular col-lg-4">
						<ul class="pricing-wrapper">
							<li data-type="monthly" class="is-visible">
								<header class="pricing-header">
									<h2>{{ $trains->title }}</h2>

								</header>
								<!-- /pricing-header -->
								<form method="post" action="{{ route('train.cart.cart') }}">
									{{ csrf_field() }}
								<div class="pricing-body">
									<ul class="pricing-features">
										<li><em>Giá vé:</em> {{ number_format($trains->recost, 0, ',', '.') }} VND</li>
										<li><em>Giờ đi:</em> {{ $cost->time }}</li>	
										<li><em>Thời gian:</em> 35p</li>
										<li>
												<input type="hidden" name="time" value="{{ $cost->time }}" />
												<input type="hidden" name="from" value="{{ $trains->train_from }}" />
												<input type="hidden" name="date" value="{{ $date }}" />
												<input type="hidden" name="people" value="{{ $people }}" />
												<em>Số vé:</em> {{ $people }}
										</li>
									</ul>
								</div>
								<footer class="pricing-footer">
									<input class="select-plan submit-cart" type="submit" value="Thêm vào giỏ" />
								</footer>
								</form>

							</li>
						</ul>
						<!-- /pricing-wrapper -->
					</li>
					@endforeach
				@else
					<h3 class="primary-color">Không tìm thấy chuyến theo yêu cầu</h3>
				@endif
				</ul>
				<!-- /pricing-list -->
			</div>
		</div>
	<!-- /pricing-container -->	
	</div>
	<!-- /container -->
	
	<div class="bg_color_1">
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Chúng tôi là đối tác độc quyền của tàu Super Biển Đông</h4>
						<p>Khi đặt tàu Super Biển Đông tại đây, các bạn không còn lo về giá cả, mà còn thuận lợi cho việc đặt vé ở những ngày lễ.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box_faq">
						<i class="icon_info_alt"></i>
						<h4>Tàu Super Biển Đông như thế nào	</h4>
						<p>Super Biển Đông là dịch vụ tàu mới nhất nhanh nhất từ Cảng Sa Kỳ ra đảo Lý Sơn. Với hệ thống tàu hiện đại, tiện nghi, chúng tôi luôn chọn những dịch vụ tốt nhất, rẻ nhất và nhanh nhất đến tay các bạn.</p>
					</div>
				</div>
			</div>
			<!-- /row  -->
		</div>
		<!--/container-->
	</div>
	<!--/bg_color_1-->
	</main>
	<!--/main-->
@stop