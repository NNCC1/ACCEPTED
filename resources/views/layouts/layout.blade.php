
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

	<link href='https://css.gg/profile.css' rel='stylesheet'>
	<link rel="stylesheet" href="{{url('css/style.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-4">
		<a class="navbar-brand text-white" href="/"><h4>HELLO</h4></a>
		<div class="containter-fluid flex-grow-1 text-right">
			<div class = "collapse navbar-collapse">
				@auth							
					<ul class = "navbar-nav ms-auto mb-2 text-info">
						<li class = "nav-item"><a class="nav-link" href="">Giới Thiệu</a></li>
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button"id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->name}}</button>
							<ul class="dropdown-menu">
								<li><a class = "dropdown-item " href="{{route('signout')}}"><i class="fa fa-btn fa-sign-out"></i>Đăng Xuất</a></li>
								<li><a class = "dropdown-item " href="profile">Hồ Sơ</a></li>
							</ul>

						</div>
					</ul>
				@else
					<ul class = "navbar-nav ms-auto mb-2 text-info">
						<li class="nav-item "><a class="nav-link " href="">Giới Thiệu</a></li>
						<li class = "nav-item"><a class = "nav-link " href="login">Đăng Nhập</a></li>
						<li class="nav-item"><a href="registration" class="nav-link">Đăng Ký</a></li>
					</ul>
				@endauth
			</div>

		</div>
	</nav>
    
    @yield('content')


</body>
</html>