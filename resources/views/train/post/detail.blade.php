@extends('templates.train.master')
@section('content')
	<main>
		<section class="hero_in general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{ $post->title }}</h1>
				</div>
			</div>
		</section>
		<!--/hero_in-->

		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-9">
					<div class="bloglist singlepost">
						<p class="text-center"><img alt="{{ $post->title }}" class="img-fluid" src="/upload/{{ $post->picture }}"></p>
						<h1>{{ $post->title }}</h1>
						<div class="postmeta">
							<ul>
								<li><a href="#"><i class="icon_clock_alt"></i>{{ date_format($post->created_at, 'd/m/Y') }}</a></li>
								<li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li>
								<li>
									<div class="fb-like" data-href="{{ route('train.post.detail', ['slug' => str_slug($post->title), 'id' => $post->id]) }}" data-width="" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								</li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<div>
								{!! $post->detail !!}
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->

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
    <title>{{ $post->title }}</title>
    <meta name="keywords" content="{{ $post->keywords }}">
    <meta name="news_keywords" content="{{ $post->keywords }}">
    <meta name="description" content="{{ $post->description }}">
    <meta property="og:title" itemprop="name" content="{{ $post->title }}">    
    <meta property="og:url" itemprop="url" content="{{ route('train.index.banggia') }}">
    <meta property="og:description" content="{{ $post->description }}">
    <meta content="/upload/{{ $post->picture }}" property="og:image" itemprop="thumbnailUrl" />
    <meta rel="canonical" href="{{ route('train.post.detail', ['slug' => str_slug($post->title), 'id' => $post->id]) }}" />
@stop