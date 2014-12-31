<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<header>
		<div class="container">
			<div class="pull-right">
				
			</div>
			<img src="http://creolab.hr/wp-content/uploads/2013/03/LaravelModules.jpg" height="200px">
			<h1><a href="/">BlogGO Ralevel</a></h1>@yield('header-right')
			<p class="load">Nyoba bikin Blog dari Laravel</p>
		</div>
	</header>

	<div class="welcome">
		<div class="container">
			@yield('content')
		</div>
		
	</div>
</body>
</html>
