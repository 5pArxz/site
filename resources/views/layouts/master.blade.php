@include('includes.header')
<div class="container">
	<div class="row">
		<div class="col-xs-12  col-md-8">
			@yield('content')
		</div>
		@include('includes.sidebar')
	</div>
</div>
@include('includes.footer')