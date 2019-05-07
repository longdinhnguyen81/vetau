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
		                                <input class="form-control" type="text" name="dates" value="" placeholder="When..">
		                                <i class="icon_calendar primary-background"></i>
		                            </div>
		                        </div>
		                        <div class="col-12 pb-3">
		                            <div class="form-group">
		                                <input class="form-control" type="number" name="people" placeholder="Số lượng">
		                                <i class="icon-database primary-background"></i>
		                            </div>
		                        </div>
		                        <div class="col-12">
		                            <input type="submit" class="btn_search" value="Tìm kiếm">
		                        </div>
		                    </div>
		                    <!-- /row -->
		                </form>
                    </div>
				    <!--/filters col-->
				</aside>
				<!-- /aside -->

				<div class="col-lg-9" style="font-size: 16px; padding: 0 60px">
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
@section('meta')
    <title>Bảng giá vé tàu siêu tốc đi Lý Sơn</title>
    <meta name="keywords" content="giá vé tàu lý sơn, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="news_keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta property="og:title" itemprop="name" content="Mua vé tàu siêu tốc đi Lý Sơn">    
    <meta property="og:url" itemprop="url" content="{{ route('train.index.banggia') }}">
    <meta property="og:description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta content="/templates/train/img/super-bien-dong.jpg" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="{{ route('train.index.banggia') }}" />
@stop