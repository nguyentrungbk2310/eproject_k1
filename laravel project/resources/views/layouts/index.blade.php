<!DOCTYPE html>
<html>
<head>
	<title>Home-@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#facebook").hover(function() {
				$("#facebook").css("color","#3b5998");
			}, function() {
				$("#facebook").css("color","#222");
			});
			$("#twitter").hover(function() {
				$("#twitter").css("color","#1da1f2");
			}, function() {
				$("#twitter").css("color","#222");
			});
			$("#email").hover(function() {
				$("#email").css("color","#d93025");
			}, function() {
				$("#email").css("color","#222");
			});
			$("#skype").hover(function() {
				$("#skype").css("color","#0078ca");
			}, function() {
				$("#skype").css("color","#222");
			});
			$("#google").hover(function() {
				$("#google").css("color","rgb(220, 78, 65)");
			}, function() {
				$("#google").css("color","#222");
			});
		});
	</script>
</head>
<body>
	@include('layouts.header')
	<div id="content">
		@yield('NoiDung')
	</div>
	@include('layouts.connect')
	@include('layouts.footer')
</body>
</html>