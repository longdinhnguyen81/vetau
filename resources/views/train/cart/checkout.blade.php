@extends('templates.train.master')
@section('content')
	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step">
							<div class="text-center bs-wizard-stepnum">Your cart</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Payment</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Finish!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a class="bs-wizard-dot"></a>
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
							<div class="form_title">
								<h3><strong>1</strong>Xác nhận thông tin</h3>
								<p>
									Hãy điền đầy đủ thông tin của bạn
								</p>
							</div>
							<form class="step" method="post" action="{{ route('train.cart.thanhtoan') }}">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Họ và tên:</label>
											<input type="text" class="form-control" id="firstname_booking" name="name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Số cmnd:</label>
											<input type="text" id="telephone_booking" name="cmnd" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Địa chỉ email:</label>
											<input type="email" id="email_booking" name="email" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Xác nhận địa chỉ email:</label>
											<input type="email" id="email_booking_2" name="email_confimation" class="form-control">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label>Số điện thoại:</label>
											<input type="text" id="telephone_booking" name="phone" class="form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Hình thức thanh toán:</label>
											<select class="form-control" name="type">
												<option value="Chuyển khoản ngân hàng">Chuyển khoản ngân hàng</option>
												<option value="Chuyển khoản momo">Chuyển khoản momo</option>
												<option value="Thanh toán trực tiếp">Thanh toán trực tiếp</option>
											</select>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group text-center">
											<button class="btn_1 full-width purchase">Thanh toán</a>
										</div>
									</div>
								</div>
							</form>
						<hr>
						<!--End step -->
						<div role="tablist" class="add_bottom_45 accordion_2" id="payment">
							<div class="form_title mb-3">
								<h3><strong>2</strong>Hình thức thanh toán</h3>
								<p>
									Thông tin về các hình thức thanh toán
								</p>
							</div>

							<div class="card">
								<div class="card-header" role="tab">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" href="#collapseOne_payment" aria-expanded="false"><i class="indicator ti-minus"></i>Chuyển khoản qua ngân hàng</a>
									</h5>
								</div>

								<div id="collapseOne_payment" class="collapse show" role="tabpanel" data-parent="#payment">
									<div class="card-body">
										<span class="d-block">Quý khách vui lòng chuyển khoản trực tiếp vào số tài khoản bên dưới</span>
										<span class="d-block"><strong class="primary-color">Chủ TK:</strong> Nguyễn Minh Tài</span>
										<span class="d-block"><strong class="primary-color">STK:</strong> 0041000340980</span>
										<span class="d-block"><strong class="primary-color">Chi nhánh:</strong> VCB Liên Chiểu - Đà Nẵng</span>
									</div>
								</div>
							</div>
							<!-- /card -->
							<div class="card">
								<div class="card-header" role="tab">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" href="#collapseTwo_payment" aria-expanded="false">
											<i class="indicator ti-plus"></i>Chuyển khoản MOMO
										</a>
									</h5>
								</div>
								<div id="collapseTwo_payment" class="collapse" role="tabpanel" data-parent="#payment">
									<div class="card-body">
										<span class="d-block"><strong class="primary-color">Chủ TK:</strong> Nguyễn Minh Tài</span>
										<span class="d-block"><strong class="primary-color">SDT:</strong> 0978175506</span>
									</div>
								</div>
							</div>
							<!-- /card -->
							<div class="card">
								<div class="card-header" role="tab">
									<h5 class="mb-0">
										<a class="collapsed" data-toggle="collapse" href="#collapseThree_payment" aria-expanded="false">
											<i class="indicator ti-plus"></i>Thanh toán trực tiếp
										</a>
									</h5>
								</div>
								<div id="collapseThree_payment" class="collapse" role="tabpanel" data-parent="#payment">
									<div class="card-body">
										<p><strong class="primary-color">Chi nhánh Đà Nẵng:</strong> Tầng 2 - 121 Cù Chính Lan - Quận Thanh Khê - Đà Nẵng</p>
										<p><strong class="primary-color">Chi nhánh Đà Nẵng:</strong> 476A Trưng Nữ Vương - Quận Hải Châu - TP Đà Nẵng</p>
										<p><strong class="primary-color">Chi nhánh Quảng Ngãi:</strong> 450 Nguyễn Văn Linh - Phường Trương Quang Trọng - TP Quảng Ngãi</p>
										<p><strong class="primary-color">SDT liên hệ:</strong> 0978175506</p>
									</div>
								</div>
							</div>
							<!-- /card -->
						</div>
						<!--End step -->
						<div id="policy">
							<div class="form_title mb-3">
								<h3><strong>3</strong>Hoàn trả vé tàu</h3>
								<p>
									Thông tin về các hình thức hoàn trả vé tàu
								</p>
							</div>
							<p class="nomargin">Quý khách có thể hủy vé tàu trước giờ tàu chạy 1 tiếng. Số tiền được hoàn trả lên đến 90% qua banking, momo, tiền mặt.</p>
						</div>
						</div>
					</div>
					<!-- /col -->
					
					<aside class="col-lg-4">
						@foreach(Session::get('cart') as $cart)
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">{{ number_format($cart['people']*$cart['cost'],0,',','.') }}</span>
							</div>
							<ul class="cart_details">
								<li>Ngày đặt vé:<span>{{ date_format(now(), 'd/m/Y') }}</span></li>
								<li>Ngày đi: <span>{{ $cart['date'] }}</span></li>
								<li>Số vé: <span>{{ $cart['people'] }}</span></li>
							</ul>
						</div>
						@endforeach
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