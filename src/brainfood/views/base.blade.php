<!DOCTYPE html>
<html>
<head>
	<title>@yield('pagetitle')</title>
	<link rel="stylesheet" type="text/css" href="/styles/styles.css">
</head>

<body>
	@include('topnav')
	<div class="wrapper">
		@yield('content')
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016
		</div>
	</section>
</body>
</html>
