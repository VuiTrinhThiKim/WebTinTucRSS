<!DOCTYPE html>
<html lang="en">
<head>
	<title class="header_title">Website Tin Tức Bằng Codeigniter</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
  <style type="text/css">
  	.margin-left{
    margin-left: 10px !important;
}
  </style>
</head>
<body>
	<div class="jumbotron text-center" style="margin-bottom:0; background-image:url(user_guide/_images/pic1.jpg); background-size:cover;">
		
		<h1>Website Tin Tức Bằng Codeigniter</h1>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
		<a class="navbar-brand" href="/Web/index.php"><TABLE>TRANG CHỦ</TABLE></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php?category=thoi-su">TIN THỜI SỰ<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						THỂ LOẠI
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">TIN GIÁO DỤC</a>
						<a class="dropdown-item" href="#">TIN CHÍNH TRỊ</a>
						<a class="dropdown-item" href="#">TIN BÓNG ĐÁ</a>
						<a class="dropdown-item" href="#">TIN GIẢI TRÍ</a>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

				<a href="../Web/login.php" class="btn btn-outline-primary margin-left">Đăng nhập</a>
				<a href="../Web/signup.php" class="btn btn-outline-light margin-left">Đăng kí</a>
			</form>
			
			
		</div>
	</nav>