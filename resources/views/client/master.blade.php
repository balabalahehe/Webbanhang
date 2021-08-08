<html dir="ltr" lang="en-US">
<head>
    @include('client.header')
</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">
		@include('client.topbar')

		@include('client.title')

		@include('client.slide')

		<section id="content">
			<div class="content-wrap">
				@yield('content')
			</div>
		</section>

		@include('client.footer')

	</div>

	@include('client.scrpit')
	@yield('scrpit')

</body>
</html>
