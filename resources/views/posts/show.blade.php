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
						<span class="fa fa-comment"> <a href="#disqus_thread"></a></span> &nbsp;
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
		</div>
	</div>
</div>

<div class="boxed push-down-45">
	<div class="row">
		<div class="col-xs-10  col-xs-offset-1">
			<div class="post-content--front-page">
			<div id="disqus_thread"></div>
			</div>			
		</div>
	</div>
</div>
@else
<h3>There are currently no posts, check back later...</h3>
@endif
@endsection

@section('scripts')
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'gbotha';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'gbotha';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
</script>
@endsection