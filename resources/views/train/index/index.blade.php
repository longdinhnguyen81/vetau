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
                                            <option>Đảo Lý Sơn - Cảng Sa Kỳ</option>
                                            <option>Cảng Sa Kỳ - Đảo Lý Sơn</option>
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
                                    <input type="submit" class="btn_search" value="Search">
                                </div>
                            </div>
                            <!-- /row -->
                        </form>
                    </div>
                </div>
            </section>
            <!-- /hero_single -->

            <div class="container-fluid margin_80_0">
               
            </div>
            <!-- /container -->

            <div class="container-fluid margin_30_95 pl-lg-5 pr-lg-5">
                <section class="add_bottom_45">
                    <div class="main_title_3">
                        <span><em></em></span>
                        <h2>Quy trình đặt vé tàu super Biển Đông online</h2>
                        <p>Quy trình được đảm bảo đơn giản hóa cho việc thanh toán cho quý khách.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href="hotel-detail.html" class="grid_item">
                                <figure>
                                    <div class="score"></div>
                                    <img src="/templates/train/img/hotel.png" class="img-fluid" alt="">
                                    <div class="info">
                                        <h3>B1: Tìm và chọn chuyến tàu</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href="hotel-detail.html" class="grid_item">
                                <figure>
                                    <div class="score"></div>
                                    <img src="/templates/train/img/hotel_2.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <h3>B2: Điền thông tin cá nhân vào mẫu</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href="hotel-detail.html" class="grid_item">
                                <figure>
                                    <div class="score"></div>
                                    <img src="/templates/train/img/hotel_3.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <h3>B3: Chọn hình thức thanh toán</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <a href="hotel-detail.html" class="grid_item">
                                <figure>
                                    <div class="score"></div>
                                    <img src="/templates/train/img/hotel_4.jpg" class="img-fluid" alt="">
                                    <div class="info">
                                        <h3>B4: Thanh toán theo hướng dẫn và nhận email hướng dẫn lấy vé tàu.</h3>
                                    </div>
                                </figure>
                            </a>
                        </div>
                        <!-- /grid_item -->
                    </div>
                    <!-- /row -->
                    <a href="hotels-grid-isotope.html"><strong>View all (157) <i class="arrow_carrot-right"></i></strong></a>
                </section>
                <!-- /section -->

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
            <div class="bg_color_1">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h3>News and Events</h3>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="box_news" href="#0">
                                <figure><img src="/templates/train/img/news_home_1.jpg" alt="">
                                    <figcaption><strong>28</strong>Dec</figcaption>
                                </figure>
                                <ul>
                                    <li>Mark Twain</li>
                                    <li>20.11.2017</li>
                                </ul>
                                <h4>Pri oportere scribentur eu</h4>
                                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                            </a>
                        </div>
                        <!-- /box_news -->
                        <div class="col-lg-6">
                            <a class="box_news" href="#0">
                                <figure><img src="/templates/train/img/news_home_2.jpg" alt="">
                                    <figcaption><strong>28</strong>Dec</figcaption>
                                </figure>
                                <ul>
                                    <li>Jhon Doe</li>
                                    <li>20.11.2017</li>
                                </ul>
                                <h4>Duo eius postea suscipit ad</h4>
                                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                            </a>
                        </div>
                        <!-- /box_news -->
                        <div class="col-lg-6">
                            <a class="box_news" href="#0">
                                <figure><img src="/templates/train/img/news_home_3.jpg" alt="">
                                    <figcaption><strong>28</strong>Dec</figcaption>
                                </figure>
                                <ul>
                                    <li>Luca Robinson</li>
                                    <li>20.11.2017</li>
                                </ul>
                                <h4>Elitr mandamus cu has</h4>
                                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                            </a>
                        </div>
                        <!-- /box_news -->
                        <div class="col-lg-6">
                            <a class="box_news" href="#0">
                                <figure><img src="/templates/train/img/news_home_4.jpg" alt="">
                                    <figcaption><strong>28</strong>Dec</figcaption>
                                </figure>
                                <ul>
                                    <li>Paula Rodrigez</li>
                                    <li>20.11.2017</li>
                                </ul>
                                <h4>Id est adhuc ignota delenit</h4>
                                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
                            </a>
                        </div>
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