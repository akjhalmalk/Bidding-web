<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>@yield('title')</title>
</head>
<body>
@include('includes.header')
<div>
	@yield('content')
</div>
@include('includes.footer')
</body>
</html>