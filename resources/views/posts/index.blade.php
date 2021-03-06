@extends('layouts.master')
@section('content')
@if(count($posts))
@foreach($posts as $post)
<div class="boxed push-down-45">
	<div class="meta">
		<img class="wp-post-image" src="http://lorempixel.com/748/324/" alt="{{ $post->title }}" width="748" height="324">
		<div class="meta__container">
			<div class="row">
				<div class="col-xs-12  col-sm-8">
					<div class="meta__info">
						<span class="meta__author"><img src="images/dummy/30x30xabout-5.jpg.pagespeed.ic.x5zyS-vzza.jpg" alt="Meta avatar" width="30" height="30"> <a href="#">Danielle Thatcher</a> in <a href="#">News</a> </span>
						<span class="meta__date"><span class="fa fa-calendar"></span> &nbsp; {{ $post->published_at->toFormattedDateString() }}</span>
					</div>
				</div>
				<div class="col-xs-12  col-sm-4">
					<div class="meta__comments">
						<a href="#"><span class="fa fa-heart"> 500</span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-10  col-xs-offset-1">
			<div class="post-content--front-page">
				<h2 class="front-page-title">
				<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
				</h2>
				<p>{{ $post->body }}</p>
			</div>
			<a href="/posts/{{ $post->slug }}">
				<div class="read-more">
					Continue reading
					<div class="read-more__arrow">
						<span class="fa  fa-chevron-right"></span>
					</div>
				</div>
			</a>
		</div>
	</div>
</div>
@endforeach
@else
<h3>There are currently no posts, check back later...</h3>
@endif
@endsection