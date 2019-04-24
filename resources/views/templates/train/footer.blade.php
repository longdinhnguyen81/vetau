        <footer>
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-5 col-md-12 p-r-5">
                        <p><img src="/templates/train/img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
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
                        <h5>Trang hữu ích</h5>
                        <ul class="links">
                            <li><a href="about.html">Trang chủ</a></li>
                            <li><a href="login.html">Giới thiệu</a></li>
                            <li><a href="register.html">Liên hệ</a></li>
                            <li><a href="blog.html">Tin tức</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5>Liên hệ với chúng tôi</h5>
                        <ul class="contacts">
                            <li><a href="tel://61280932400"><i class="ti-mobile"></i>0978.1755506</a></li>
                            <li><a href="mailto:info@Panagea.com"><i class="ti-email"></i>taiembkdn@gmail.com</a></li>
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
        var date = new Date();
        date.setDate(date.getDate());

        $(function() {
            $('input[name="dates"]').daterangepicker({
                minDate: date,
                singleDatePicker: true,
                locale: {
                    cancelLabel: 'Clear'
                }
            });
            $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('MM-DD-YY'));
            });
        });

    </script>

    <!-- INPUT QUANTITY  -->
    <script src="/templates/train/js/input_qty.js"></script>

    <!-- COLOR SWITCHER  -->
    

</body>

</html>
