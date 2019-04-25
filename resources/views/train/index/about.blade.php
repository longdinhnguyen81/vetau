@extends('templates.train.master')
@section('content')
<main>
		
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Giới thiệu</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Tại sao nên chọn chúng tôi</h2>
				<p>Đại lý bán vé độc quyền của tàu Super Biển Đông đi Lý Sơn.</p>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="{{ route('train.index.contact') }}">
						<i class="pe-7s-medal"></i>
						<h3>+ 1000 Vé được bán</h3>
						<p>Sự tin tưởng của khách hàng và sự tiện lợi của việc mua bán online chính là động lực của chúng tôi.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="{{ route('train.index.contact') }}">
						<i class="pe-7s-help2"></i>
						<h3> Hỗ trợ 24/7</h3>
						<p>Tổng đài hỗ trợ của chúng tôi sẽ hỗ trợ bạn tất cả các ngày trong tuần kể cả ngày lễ và cuối tuần. </p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="{{ route('train.index.contact') }}">
						<i class="pe-7s-culture"></i>
						<h3>4 Chi nhánh</h3>
						<p>Để thuận lợi cho việc nhận vé tàu đi Lý Sơn mà chúng tôi có ở 4 chi nhánh(2 ở Quảng Ngãi và 2 ở Đà Nẵng).</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="tel:+84901841841">
						<i class="pe-7s-headphones"></i>
						<h3>Trợ giúp trực tiếp</h3>
						<p>Ngoài mua bán online chúng tôi còn hỗ trợ bạn mua vé trực tiếp ở tất cả các chi nhánh của chúng tôi. </p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="{{ route('train.index.contact') }}">
						<i class="pe-7s-credit"></i>
						<h3>Thanh toán an toàn</h3>
						<p>Khi các bạn đã thanh toán và nhận vé nhưng có việc đột xuất không đi được, các bạn có thể hoàn trả vé với số tiền lên đến 90%.</p>
					</a>
				</div>
				<div class="col-lg-4 col-md-6">
					<a class="box_feat" href="https://www.facebook.com/dulichlysongiare/">
						<i class="pe-7s-chat"></i>
						<h3>Hỗ trợ qua tin nhắn</h3>
						<p>Ngoài ra chúng tôi còn hỗ trợ qua tin nhắn với fanpage chính của chúng tôi là https://www.facebook.com/dulichlysongiare/. </p>
					</a>
				</div>
			</div>
			<!--/row-->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
			<div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>Giới thiệu hệ thống bán vé của chúng tôi</h2>
                    <p>Nhà phân phối vé độc quyền của tàu Super Biển Đông đi Lý Sơn</p>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <img src="/templates/train/img/super-bien-dong.jpg" class="img-fluid" alt="">
                        </figure>
                    </div>
                    <div class="col-lg-5">
                        <p>Đây là con tàu hiện đại và mới nhất tính đến thời điểm năm 2019 có mặt tại Cảng Sa Kỳ. Với số ghế lên đến 139 và tốc độ chạy là 30 hải lý/giờ. Hiện nay, tàu Super Biển Đông là lựa chọn của rất nhiều du khách muốn du lịch Lý Sơn. </p>
                        <p>Tàu được thiết kế hiện đại theo chuẩn quốc tế bằng vỏ hợp kim nhôm do Ý sản xuất, thiết bị máy của Nhật. Trên tàu có một khoang vip 12 ghế hạng thương gia cho các thương gia và quan khách.</p>
                        <p>Thời gian đi từ đất liền đến đảo từ 1 giờ 15 phút được rút ngắn chỉ còn 35 phút. Hệ thống bán vé tàu Super Biển Đông sẽ tư vấn giúp bạn lựa chọn chuyến tàu phù hợp và nhanh nhất. Vì vậy, hãy đặt vé tàu Super Biển Đông đi Lý Sơn ngay hôm nay cho chuyến du lịch Lý Sơn của bạn được trọn vẹn hơn, tiết kiệm thời gian ra đến Đảo. </p>
                    </div>
                </div>
                <!--/row-->
            </div>
			<!--/container-->
		</div>
		<!--/bg_color_1-->

		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Our founders</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div id="carousel" class="owl-carousel owl-theme">
				<div class="item">
					<a>
						<div class="title">
							<h4>Julia Holmes<em>CEO</em></h4>
						</div><img src="/templates/train/img/1_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a>
						<div class="title">
							<h4>Lucas Smith<em>Marketing</em></h4>
						</div><img src="/templates/train/img/2_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a>
						<div class="title">
							<h4>Paul Stephens<em>Business strategist</em></h4>
						</div><img src="/templates/train/img/3_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a>
						<div class="title">
							<h4>Pablo Himenez<em>Customer Service</em></h4>
						</div><img src="/templates/train/img/4_carousel.jpg" alt="">
					</a>
				</div>
				<div class="item">
					<a>
						<div class="title">
							<h4>Andrew Stuttgart<em>Admissions</em></h4>
						</div><img src="/templates/train/img/5_carousel.jpg" alt="">
					</a>
				</div>
			</div>
			<!-- /carousel -->
		</div>
		<!--/container-->
	</main>
	<!--/main-->
@stop
@section('meta')
    <title>Mua vé tàu siêu tốc đi Lý Sơn</title>
    <meta name="keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="news_keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta property="og:title" itemprop="name" content="Mua vé tàu siêu tốc đi Lý Sơn">    
    <meta property="og:url" itemprop="url" content="{{ route('train.index.about') }}">
    <meta property="og:description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta content="/templates/train/img/super-bien-dong.jpg" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="{{ route('train.index.about') }}" />
@stop