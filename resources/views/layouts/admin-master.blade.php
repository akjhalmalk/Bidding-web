<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Admin area</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
@include('includes.admin-header')
	@yield('content')
@yield('scripts')
</body>
</html>