@extends('templates.train.master')
@section('content')
<main>
		
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Đặt vé thành công</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_80_55">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Cảm ơn bạn đã đặt vé tàu tại website chúng tôi</h2>
				<p>Mời bạn check email để được hỗ trợ về hình thức thanh toán.</p>
			</div>
			
		</div>
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