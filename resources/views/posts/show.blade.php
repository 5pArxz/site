@extends('layouts.master')
@section('content')
@if($post)
<div class="boxed push-down-45">
	<div class="meta">
		<img class="wp-post-image" src="http://lorempixel.com/748/324/" alt="{{ $post->title }}" width="748" height="324">
		<div class="meta__container">
			<div class="row">
				<div class="col-xs-12  col-sm-8">
					<div class="meta__info">
						<span class="meta__author"><img src="/images/dummy/30x30xabout-5.jpg.pagespeed.ic.x5zyS-vzza.jpg" alt="Meta avatar" width="30" height="30"> <a href="#">Danielle Thatcher</a> in <a href="#">News</a> </span>
						<span class="meta__date"><span class="fa fa-calendar"></span> &nbsp; 6. May, 2014</span>
					</div>
				</div>
				<div class="col-xs-12  col-sm-4">
					<div class="meta__comments">
						<span class="fa fa-comment"> 123</span> &nbsp;
						<a href="#"><span class="fa fa-star"> 500</span></a>
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
		</div>
	</div>
</div>

<div class="boxed push-down-45">
	<div class="row">
		<div class="col-xs-10  col-xs-offset-1">
			<div class="post-content--front-page">
			<br>
			<p>Leave a comment</p>
				<div class="form-group">
					<textarea name="comment" id="comment" cols="30" rows="3" class="form-control"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" value="Comment" class="btn btn-primary">
				</div>
			</div>			
		</div>
	</div>
</div>
@else
<h3>There are currently no posts, check back later...</h3>
@endif
@endsection