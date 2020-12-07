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
		<a class="navbar-brand" href="/WebTinTucRSS/index.php">TRANG CHỦ</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
					TIN TỨC
				</a>
				
				<div class="dropdown-menu">
					<form action="simplexmlload.php" method="GET">
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/giao-duc.rss">Giáo Dục</a>
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/phap-luat.rss">Pháp Luật</a>
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/kinh-doanh.rss">Kinh Doanh</a>
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/suc-khoe.rss">Sức Khỏe</a>
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/du-lich.rss">Du Lịch</a>
					<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/the-thao.rss">Thể Thao</a>
						</form>
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
