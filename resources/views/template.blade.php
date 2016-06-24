<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | SIGPAD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">@yield('title')</div>
					<div class="panel-body">
						@yield('content')
					</div>
				</div>

				<footer>
					<br><a href="http://www.prf.gov.br"></a>PRF Brasil</p>
				</footer>
			</div>
		</div>
	</div>
</body>
</html>