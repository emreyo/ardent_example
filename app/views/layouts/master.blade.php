<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	@if (Session::has('message'))
		<div class="flash alert">
			<p>{{ Session::get('message') }}</p>
		</div>
	@endif

	@if ($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif

	@yield('main')

</body>
</html>