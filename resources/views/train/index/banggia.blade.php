@extends('templates.train.master')
@section('content')
		<main>
		
		<section class="hero_in tours">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Bảng giá vé tàu Super Biển Đông</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<!-- /filters -->

		<!-- End Map -->

		<div class="container margin_60_35">
			<div class="row">
				<aside class="col-lg-3">
					<div>
						<h4 class="primary-color">Tìm kiếm chuyến tàu:</h4>
						<div class="form-group">
							<label>Chuyến đi:</label>
							<select class="form-group select-option">
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
							<input class="form-control" type="number" />
						</div>
						<div class="form-group text-center">
							<button class="btn btn-custom">Tìm</button>
						</div>
						<!--/collapse -->
					</div>
					<!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9" style="font-size: 16px">
					<div class="isotope-wrapper">
						<div class="row text-center">
							<h2 class="mb-5 d-block primary-color" style="width:100%">Bảng giá vé tàu Super Biển Đông</h2>
							<h4> - Từ Cảng Sa Kỳ đi Đảo Lý Sơn</h4>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên tàu</th>
										<th>Số ghế</th>
										<th>Giá vé</th>
										<th>Thời gian đi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Super Biển Đông</td>
										<td>139</td>
										<td>175.000 VND</td>
										<td>35 phút</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /row -->
						<div class="row text-center">
							<h4> - Từ Đảo Lý Sơn đi Cảng Sa Kỳ</h4>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Tên tàu</th>
										<th>Số ghế</th>
										<th>Giá vé</th>
										<th>Thời gian đi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Super Biển Đông</td>
										<td>139</td>
										<td>160.000 VND</td>
										<td>35 phút</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="row mt-5">
							<p class="font-weight-bold mb-2" style="width: 100%">Ghi chú:</p>
							<p class="mb-1"> - Trẻ em dưới 6 tuổi được miễn phí vé</p>
							<p class="mb-1"> - Hành khách thuộc các đối tượng được miễn, giảm giá vé phải xuất trình giấy tờ hợp lệ chứng minh để được miễn, giảm giá vé theo quy định. Trẻ em dưới 6 tuổi được miễn vé nhưng phải liệt kê danh sách và ngồi chung ghế với người lớn. </p>

							<p class="mb-1"> - Khách đoàn vui lòng liên hệ 0901841841, 0986841841, 0978175506 hoặc email dailyvetaulyson@gmail.com để có chính sách giá phù hợp.</p>
						</div>
					</div>
					<!-- /isotope-wrapper -->
				
				</div>
				<!-- /col -->
			</div>		
		</div>
		<!-- /container -->
		
		<div class="bg_color_1">
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-4">
						<a href="{{ route('train.index.contact') }}" class="boxed_list">
							<i class="pe-7s-help2"></i>
							<h4>Bạn cần giúp đỡ? Liên hệ ngay</h4>
							<p>Trả lời tin nhắn của khách hàng 24/7 qua điện thoại và tin nhắn trên fanpage.</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ route('train.index.contact') }}" class="boxed_list">
							<i class="pe-7s-wallet"></i>
							<h4>Thanh toán</h4>
							<p>Chúng tôi có 2 hình thức thanh toán: Chuyển khoản và thanh toán trực tiếp</p>
						</a>
					</div>
					<div class="col-md-4">
						<a href="{{ route('train.index.contact') }}" class="boxed_list">
							<i class="pe-7s-note2"></i>
							<h4>Đổi trả vé</h4>
							<p>Chúng tôi hỗ trợ đổi vé không tốn phí và hoàn tiền 90% khi trả vé trước khi đi.</p>
						</a>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
		
	</main>
@stop