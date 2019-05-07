@extends('templates.train.master')
@section('content')
	<main>
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>Tin tức du lịch Lý Sơn</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
				@foreach($posts as $post)
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="{{ route('train.post.detail', ['slug' => str_slug($post->title), 'id' => $post->id]) }}"><img src="/upload/{{ $post->picture }}" alt="{{ $post->title }}">
										<div class="preview"><span>Đọc tin</span></div>
									</a>
								</figure>
							</div>
							<div class="col-lg-5">
								<div class="post_info">
									<small>{{ date_format($post->created_at, 'd M. Y') }}</small>
									<h3><a href="{{ route('train.post.detail', ['slug' => str_slug($post->title), 'id' => $post->id]) }}">{{ $post->title }}</a></h3>
									<p>{{ $post->description }}</p>
									<ul>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul>
								</div>
							</div>
						</div>
					</article>
				@endforeach

					<nav aria-label="...">
						<ul class="pagination pagination-sm">
							{{ $posts->links() }}
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->

				<aside class="col-lg-3">
					<div class="widget">
						<form>
							<div class="form-group">
								<input type="text" name="search" id="search" class="form-control" placeholder="Tìm kiếm bài viết...">
							</div>
							<button type="submit" id="submit" class="btn_1 rounded"> Tìm kiếm</button>
						</form>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Tin tức hot</h4>
						</div>
						<ul class="comments-list">
							@foreach($rands as $rand)
							<li>
								<div class="alignleft">
									<a href="{{ route('train.post.detail', ['slug' => str_slug($rand->title), 'id' => $rand->id]) }}"><img src="/upload/{{ $rand->picture }}" alt="{{ $rand->title }}"></a>
								</div>
								<small>{{ date_format($rand->created_at, 'd-m-Y') }}</small>
								<h3><a href="{{ route('train.post.detail', ['slug' => str_slug($rand->title), 'id' => $rand->id]) }}" title="{{ $rand->title }}">{{ $rand->title }}</a></h3>
							</li>
							@endforeach
						</ul>
					</div>
					<!-- /widget -->
					<div class="widget">
						<div class="widget-title">
							<h4>Tags</h4>
						</div>
						<div class="tags">
							<a href="{{ route('train.index.banggia') }}">Bảng giá vé</a>
							<a href="{{ route('train.index.index') }}">Tìm kiếm vé tàu</a>
							<a href="#">Du lịch Lý Sơn</a>
						</div>
					</div>
					<!-- /widget -->
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!--/main-->
@stop
@section('meta')
    <title>Tin tức du lịch Đảo Lý Sơn</title>
    <meta name="keywords" content="giá vé tàu lý sơn, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online, tin tức du lịch Lý Sơn">
    <meta name="news_keywords" content="ve tau ly son, ve tau di ly son, vé tàu siêu tốc đi lý sơn, vé tàu đi lý sơn, mua vé tàu lý sơn, mua vé tàu lý sơn online, tin tức du lịch Lý Sơn">
    <meta name="description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn, Bảng tin du lịch Đảo Lý Sơn">
    <meta property="og:title" itemprop="name" content="Tin tức du lịch Đảo Lý Sơn">    
    <meta property="og:url" itemprop="url" content="{{ route('train.post.index') }}">
    <meta property="og:description" content="Đại lý vé tàu độc quyền của tàu super Biển Đông đi Lý Sơn với thời lượng 35-40 phút ra đảo, Đại lý vé tàu online ra đảo Lý Sơn, Bảng tin du lịch Đảo Lý Sơn">
    <meta content="/templates/train/img/home_section_1.jpg" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="{{ route('train.index.banggia') }}" />
@stop