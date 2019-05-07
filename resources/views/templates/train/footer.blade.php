<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=1797819373651791&autoLogAppEvents=1"></script>        
        <footer>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-5 col-md-12 p-r-5">
                        <p><img src="/templates/train/img/logo.png" width="150" height="36" data-retina="true" alt="Mua vé tàu đi Lý Sơn"></p>
                        <p>Super Biển Đông là dịch vụ tàu mới nhất nhanh nhất từ Cảng Sa Kỳ ra đảo Lý Sơn. Với hệ thống tàu hiện đại, tiện nghi, chúng tôi luôn chọn những dịch vụ tốt nhất, rẻ nhất và nhanh nhất đến tay các bạn.</p>
                        <div class="follow_us">
                            <ul>
                                <li>Follow us</li>
                                <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#0"><i class="ti-google"></i></a></li>
                                <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#0"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ml-lg-auto">
                        <h5 class="primary-color">Trang hữu ích</h5>
                        <ul class="links">
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="{{ route('train.index.about') }}">Giới thiệu</a></li>
                            <li><a href="{{ route('train.index.contact') }}">Liên hệ</a></li>
                            <li><a href="{{ route('train.post.index') }}">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="primary-color">Liên hệ với chúng tôi</h5>
                        <ul class="contacts">
                            <li><a href="tel:0978175506"><i class="ti-mobile"></i>0905.011.288</a></li>
                            <li><a href="mailto:dailyvetaulyson@gmail.com"><i class="ti-email"></i>dailyvetaulyson@gmail.com</a></li>
                        </ul>
                        <div id="newsletter">
                            <h6>Nhận tin tức khuyến mãi</h6>
                            <div id="message-newsletter"></div>
                            <form method="post" action="/templates/train/assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <input type="submit" value="Gửi" id="submit-newsletter">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--/row-->
                <hr>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright ©2019 All rights reserved | This template is made with by VinaSofts</p>
                    </div>
                </div>
            </div>
        </footer>
           <div class='quick-call-button'></div>
            <div class='call-now-button'>
                <div>
                    <p class='call-text' style="background-color:#32a067;font-size:19px;border: 1px solid black"><span style="color:#000">0905.011.288</span></p>
                    <a{{--  onclick="return getCall()" --}} href='tel:0905011288' title='Gọi tông đài' >
                        <div class='quick-alo-ph-circle active'></div>
                        <div class='quick-alo-ph-circle-fill active'></div>
                        <div class='quick-alo-ph-img-circle shake'></div>
                    </a>
                </div>
            </div>
        </div>
        <!--/footer-->
    </div>
    <!-- page -->

   

    <div id="toTop"></div>
    <!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="/templates/train/js/jquery-2.2.4.min.js"></script>
    <script src="/templates/train/js/common_scripts.js"></script>
    <script src="/templates/train/js/main.js"></script>
    <script src="/templates/train/assets/validate.js"></script>
    <script src="/templates/train/js/tables_func.js"></script>

    <!-- DATEPICKER  -->
    <script>
        var today = new Date();
        var dd = today.getDate() + 1;
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
          dd = '0' + dd;
        } 
        if (mm < 10) {
          mm = '0' + mm;
        } 
        var day = mm + '-' + dd + '-' + yyyy;
        console.log(day)

        $(function() {
            $('input[name="dates"]').daterangepicker({
                minDate: day,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
        });

    </script>

    <!-- INPUT QUANTITY  -->

    <!-- COLOR SWITCHER  -->
    

</body>

</html>
