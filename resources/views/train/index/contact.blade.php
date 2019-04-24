@extends('templates.train.master')
@section('content')
<main>
		<main>
		<section class="hero_in contacts">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Contact Us</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4>Địa chỉ chính:</h4>
						<span>476A Trưng Nữ Vương - Quận Hải Châu <br>Thành phố Đà Nẵng</span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4>Địa chỉ email:</h4>
						<span>dailyvetaulyson@gmail.com<br><small>Làm việc từ 09:00-1700 từ thứ 2 đến thứ 7 hàng tuần </small></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4>Số điên thoại:</h4>
						<span>0901.841.841 - 0986.841.841 - 0978.175.506<br><small>Tổng đài 24/7</small></span>
					</li>
				</ul>
			</div>
		</div>
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="row justify-content-between">
					<div class="col-lg-5">
						<img src="/templates/train/img/contact.jpg" class="img-fluid" alt="">
						<!-- /map -->
					</div>
					<div class="col-lg-6">
						<h4>Gửi liên hệ cho chúng tôi</h4>
						<p>Nếu có thắc mắc các bạn có thể gửi liên hệ tại đây.</p>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Họ và tên:</label>
										<input class="form-control" type="text" id="name_contact" name="fullname">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Số điện thoại:</label>
										<input class="form-control" type="number" id="lastname_contact" name="phone">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Địa chỉ email:</label>
										<input class="form-control" type="email" id="email_contact" name="email">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Tiêu đề:</label>
										<input class="form-control" type="text" id="phone_contact" name="subject">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="form-group">
								<label>Nội dung:</label>
								<textarea class="form-control" id="message_contact" name="message" style="height:150px;"></textarea>
							</div>
							
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
@stop