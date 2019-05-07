
<!DOCTYPE html>
<html>

<head>
	<!-- Basic -->
	<meta charset="utf-8">
    <link rel="icon" type="image/png" href="/templates/train/img/apple-touch-icon-57x57-precomposed.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    @yield('meta')
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- BASE CSS -->
    <link href="/templates/train/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templates/train/css/style.css" rel="stylesheet">
    <link href="/templates/train/css/vendors.css" rel="stylesheet">

    <link href="/templates/train/css/tables.css" rel="stylesheet">
    <link href="/templates/train/css/blog.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/templates/train/css/custom.css" rel="stylesheet">

    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-11097556-8']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

</head>

<body>

    <div id="page">

        <header class="header menu_fixed">
            <div id="preloader">
                <div data-loader="circle-side"></div>
            </div>
            <!-- /Page Preload -->
            <div id="logo">
                <a href="/">
                    <img src="/templates/train/img/logo.png" width="150" height="36" data-retina="true" alt="Mua vé tàu đi Lý Sơn" class="logo_normal">
                    <img src="/templates/train/img/logo_sticky.png" width="150" height="36" data-retina="true" alt="Mua vé tàu đi Lý Sơn" class="logo_sticky">
                </a>
            </div>
            <ul id="top_menu">
                    @if(Session::get('cart'))
                        <li><a href="{{ route('train.cart.cart') }}" class="cart-menu-btn" title="Cart"><strong>{{ count(Session::get('cart')) }}</strong></a></li>
                    @else
                        <li><a href="{{ route('train.index.index') }}" class="cart-menu-btn" title="Cart"><strong>0</strong></a></li>
                    @endif
            </ul>
            <!-- /top_menu -->
            <a href="#menu" class="btn_mobile">
                <div class="hamburger hamburger--spin" id="hamburger">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <nav id="menu" class="main-menu">
                <ul>
                    <li><span><a href="/">Trang chủ</a></span>
                    <li><span><a href="{{ route('train.index.about') }}">Giới thiệu</a></span>
                    <li><span><a href="{{ route('train.index.banggia') }}">Giá vé</a></span>
                    <li><span><a href="{{ route('train.post.index') }}">Tin tức</a></span>
                    <li><span><a href="{{ route('train.index.contact') }}">Liên hệ</a></span>
                </ul>
            </nav>

        </header>
        <!-- /header -->