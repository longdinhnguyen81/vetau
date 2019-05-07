@extends('templates.train.master')
@section('content')
	        <main>
            <section class="hero_single version_2">
                <div class="wrapper">
                    <div class="container">
                        <h3>Đặt vé tàu ra đảo Lý Sơn</h3>
                        <p>Vé tàu siêu tốc super Biển Đông cảng Sa Kỳ đi đảo Lý Sơn và ngược lại</p>
                        <form method="get" action="{{ route('train.index.vetau') }}">
                            <div class="row no-gutters custom-search-input-2">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <select class="form-group" name="from">
                                            <option value="Cảng Sa Kỳ - Đảo Lý Sơn">Cảng Sa Kỳ - Đảo Lý Sơn</option>
                                            <option value="Đảo Lý Sơn - Cảng Sa Kỳ">Đảo Lý Sơn - Cảng Sa Kỳ</option>
                                        </select>
                                        <i class="icon_pin_alt"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="dates" value="" placeholder="When..">
                                        <i class="icon_calendar"></i>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input class="form-control" type="number" name="people" placeholder="Số lượng">
                                        <i class="icon-database"></i>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <input type="submit" class="btn_search" value="Tìm kiếm">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="container-fluid margin_80_55">
    			<div class="main_title_2">
    				<span><em></em></span>
    				<h2>Quy trình đặt vé tàu đơn giản</h2>
    				<p>Quy trình đặt vé tàu online đơn giản, chỉ trong vòng 3 phút</p>
    			</div>
    			<div class="row">
    				<div class="col-lg-3 col-md-6">
    					<a class="box_feat">
    						<i class="pe-7s-medal"></i>
    						<h3>Bước 1: Tìm kiếm và lựa chọn vé tàu</h3>
    						<p>Tìm kiếm vé tàu theo ngày và giờ mình mong muốn để ra hoặc vào đảo Lý Sơn</p>
    					</a>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<a class="box_feat">
    						<i class="pe-7s-help2"></i>
    						<h3>Bước 2: Điền thông tin xác nhận đặt vé</h3>
    						<p>Điền rõ các thông tin của bạn, thông tin về họ tên, địa chỉ email và số điện thoại để chúng tôi có thể gửi vé tàu</p>
    					</a>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<a class="box_feat">
    						<i class="pe-7s-credit"></i>
    						<h3>Bước 3: Chọn hình thức thanh toán online</h3>
    						<p>Chúng tôi hỗ trợ thanh toán trực tuyến qua ví Momo, Ebank. Lựa chọn hình thức thanh toán phù hợp với bạn</p>
    					</a>
    				</div>
    				<div class="col-lg-3 col-md-6">
    					<a class="box_feat">
    						<i class="pe-7s-chat"></i>
    						<h3>Bước 4: Nhận vé qua email và tin nhắn</h3>
    						<p>Sau khi thanh toán thành công, các bạn sẽ nhận được vé điện tử qua email và tin nhắn điện thoại.</p>
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
                            <!-- wrapper -->
                            <div class="vplayer" data-v="lx1d84zLuHg"> 
                             
                             <!-- play btn -->
                             <div class="plybtn"></div> 
                             
                            </div>
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
            <div class="bg_color_1">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h3>Tin tức du lịch đảo Lý Sơn</h3>
                        <p>Trang thông tin du lịch đảo Lý Sơn.</p>
                    </div>
                    <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-6">
                            <a class="box_news" href="">
                                <figure><img src="/upload/{{ $post->picture }}" alt="{{ $post->title }}">
                                    <figcaption><strong>{{ date_format($post->created_at, 'd') }}</strong>{{ date_format($post->created_at, 'M') }}</figcaption>
                                </figure>
                                <ul>
                                    <li>{{ date_format($post->created_at,'d/m/Y') }}</li>
                                </ul>
                                <h4>{{ $post->title }}</h4>
                                <p>{{ $post->description }}</p>
                            </a>
                        </div>
                    @endforeach
                        <!-- /box_news -->
                    </div>
                    <!-- /row -->
                    <p class="btn_home_align"><a href="blog.html" class="btn_1 rounded">View all news</a></p>
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_color_1 -->

            <div class="call_section">
                <div class="container clearfix">
                    <div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
                        <div class="block-reveal">
                            <div class="block-vertical"></div>
                            <div class="box_1">
                                <h3>Tại sao nên chọn chúng tôi?</h3>
                                <p>Super Biển Đông là dịch vụ tàu mới nhất nhanh nhất từ Cảng Sa Kỳ ra đảo Lý Sơn. Với hệ thống tàu hiện đại, tiện nghi, chúng tôi luôn chọn những dịch vụ tốt nhất, rẻ nhất và nhanh nhất đến tay các bạn.</p>
                                <a href="#0" class="btn_1 rounded">Về chúng tôi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/call_section-->
        </main>
        <!-- /main -->
@stop

@section('meta')
    <title>Mua vé tàu siêu tốc đi Lý Sơn</title>
    <meta name="keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="news_keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online">
    <meta name="description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta property="og:title" itemprop="name" content="Mua vé tàu siêu tốc đi Lý Sơn">    
    <meta property="og:url" itemprop="url" content="https://www.muavetaulyson.com">
    <meta property="og:description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn">
    <meta content="/templates/train/img/super-bien-dong.jpg" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="https://www.muavetaulyson.com" />
@stop