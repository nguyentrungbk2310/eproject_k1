<nav class="navbar navbar-fixed-top navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle = "collapse" data-target = "#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="{{ route('home') }}" class="navbar-brand">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<li @yield('home')><a href="{{ route('home') }}">Home</a></li>
				<li @yield('about')><a href="{{ route('about') }}">About</a></li>
				<li @yield('blog')><a href="{{ route('blog') }}">Blog</a></li>
				<li @yield('contact')><a href="{{ route('contact') }}">Contact</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Admin</a></li>
			</ul>
		</div>
	</div>
</nav>