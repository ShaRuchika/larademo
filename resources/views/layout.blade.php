<!DOCTYPE html>
<html>
<head>
	<title>Restaurant App</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Resto</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				@if(Auth::user())
				<a class="nav-item nav-link active" href="<?php echo url('/'); ?>">Home</a>
				<a class="nav-item nav-link" href="<?php echo url('/list'); ?>">List</a>
				<a class="nav-item nav-link" href="#">Search</a>
				<a class="nav-item nav-link" href="<?php echo url('/profile'); ?>">Profile</a>
				@if(Session::get('user'))
				<a class="nav-item nav-link">Welcome | {{Session::get('user')}}</a>
				@endif
				@else
				<a class="nav-item nav-link" href="<?php echo url('/login'); ?>">Login</a>
				<a class="nav-item nav-link" href="<?php echo url('/register'); ?>">registration</a>
				@endif
			</div>
		</div>
		<a class="nav-item nav-link" href="<?php echo url('/logout/'); ?>"><i class="fas fa-sign-out-alt" style="float: right"></i></a> 
			</nav>
	<div class="container">
		@yield('content')
	</div>
	<!-- <footer>Copy right by Restaurant App</footer> -->
</body>
</html>