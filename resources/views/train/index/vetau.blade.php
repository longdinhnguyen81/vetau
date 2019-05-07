@extends('templates.train.master')
@section('content')
@php
	date_default_timezone_set('asia/ho_chi_minh');
@endphp
	<main>
	<section class="hero_in general">
		<div class="wrapper">
		<div class="container">
			<h1 class="fadeInUp"><span></span>Tìm kiếm vé tàu đi Lý Sơn</h1>
		</div>
		</div>
	</section>
	<!--/hero_in-->

	<div class="container margin_60_35">
		<div class="row">
			<aside class="col-lg-3 mt-2">
				<form method="get" action="{{ route('train.index.vetau') }}">
                    <div class="row no-gutters custom-search-input-2">
                        <div class="col-12 mb-3">
                            <div class="form-group">
                            	<h5 class="secondary-background text-center p-3">Tìm kiếm chuyến tàu</h5>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <select class="form-group" name="from">
                                    <option value="Cảng Sa Kỳ - Đảo Lý Sơn">Cảng Sa Kỳ - Đảo Lý Sơn</option>
                                    <option value="Đảo Lý Sơn - Cảng Sa Kỳ">Đảo Lý Sơn - Cảng Sa Kỳ</option>
                                </select>
                                <i class="icon_pin_alt primary-background"></i>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="form-group">
                                <input class="form-control" type="text" name="dates" value="{{ date_format($dates, 'm/d/Y') }}" placeholder="When..">
                                <i class="icon_calendar primary-background"></i>
                            </div>
                        </div>
                        <div class="col-12 pb-3">
                            <div class="form-group">
                                <input class="form-control" type="number" name="people" placeholder="Số lượng" value="{{ $people }}">
                                <i class="icon-database primary-background"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn_search" value="Tìm kiếm">
                        </div>
                    </div>
                    <!-- /row -->
                </form>
                <div>
                	<img src="/templates/train/img/promotion.png" alt="Đặt vé tàu giá rẻ đi Lý Sơn" class="display-primary" />
                </div>
				<!--/filters col-->
			</aside>
			<!-- /aside -->
			<div class="pricing-container cd-has-margins col-lg-9 container" style="padding: 0 25px">
				<div class="container color-black">
					|<i class="icon-home"></i>|
					<span>Kết quả tìm kiếm</span>
					<div class="row text-center">
						<h4 class="mt-4 primary-color font-weight-bold">Tàu Super Biển Đông ngày {{ date_format($dates, 'd-m-Y') }} chuyến {{ $from }}</h4>
					</div>
				</div>
				<!--/pricing-switcher -->
				<ul class="pricing-list bounce-invert row">
				@php
					$day = date_format($dates, 'd');
					$i =0;
					$k = rand(100000,999999);
				@endphp
				@if($trains)
					@foreach($trains->cost as $cost)
					@php
						$i++;
					@endphp
					@if(substr($cost->time, 0,2) > date('H') || $day != date('d'))
					<li class="col-lg-4 col-md-6 col-sm-12 mb-4">
						<!-- Card -->
						<div class="card card-image primary-border">

						<!--Pricing card-->
							<div class="text-white text-center pricing-card d-flex align-items-center rgba-stylish-strong">

							<!--Content-->
								<div class="card-body">
									<div class="price pt-0">
										<h6><strong>Mã chuyến tàu:</strong> L{{ $k+$i }}</h6>
									</div>
										<!--Price-->
									<form method="post" action="{{ route('train.cart.cart') }}">
										{{ csrf_field() }}
										<ul class="striped mt-3 text-left" style="color:black; font-size: 16px">
											<li>
												<p class="mb-2"><strong><i class="icon-book pr-3 primary-color"></i>Giá vé:</strong> {{ number_format($trains->recost, 0, ',', '.') }} VND</p>
											</li>
											<li>
												<p class="mb-2"><strong><i class="icon-clock pr-3 primary-color"></i>Giờ đi:</strong> {{ $cost->time }}</p>
											</li>
											<li>
												<p class="mb-2"><strong><i class="icon-back-in-time pr-3 primary-color"></i>Thời gian:</strong> 40p</p>
											</li>
											<li>
												<input type="hidden" name="time" value="{{ $cost->time }}" />
												<input type="hidden" name="from" value="{{ $trains->train_from }}" />
												<input type="hidden" name="date" value="{{ date_format($dates,'d-m-Y') }}" />
												@if($people)													
												<p class="mb-2"><input type="hidden" name="people" value="{{ $people }}" />
												<strong><i class="icon-list-numbered pr-3 primary-color"></i>Số vé:</strong> {{ $people }}</p>
												@else
												<p class="mb-2"><strong><i class="icon-list-numbered pr-3 primary-color"></i>Số vé:</strong> <input name="people" style="width: 50%" value="1" /></p>
												@endif
											</li>
										</ul>
										<button type="submit" class="btn btn-pri">Đặt vé</button>
									</form>
								</div>

							</div>
						<!--Pricing card-->
						</div>
					</li>
				
						@endif
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