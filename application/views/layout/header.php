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
	<script>
		function success() {
			if(document.getElementById("search-bar").value==="") { 
            document.getElementById('submit-search').disabled = true; 
			} else { 
            document.getElementById('submit-search').disabled = false;
			}
		}
	</script>
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
					<a class="nav-link" href="index.php?link=https://vnexpress.net/rss/thoi-su.rss">TIN THỜI SỰ<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="#">TIN TRONG DIỄN ĐÀN</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
					TIN KHÁC
					</a>
					
					<div class="dropdown-menu">
						<form action="simplexmlload.php" method="GET">
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/giao-duc.rss">Giáo Dục</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/phap-luat.rss">Pháp Luật</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/kinh-doanh.rss">Kinh Doanh</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/suc-khoe.rss">Sức Khỏe</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/du-lich.rss">Du Lịch</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/the-thao.rss">Thể Thao</a>
							<a class="dropdown-item" name="link" href="index.php?link=https://vnexpress.net/rss/khoa-hoc.rss">Khoa Học</a>
						</form>
					</div>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0" action="search.php" method="GET">
				<input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" name="search-bar" id="search-bar" onkeyup="success()">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit-search" id="submit-search" disabled>Tìm</button>
			</form>
			<form class="form-inline my-2 my-lg-0">
				<?php
					if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
					{
					?>
					    <a href="../Web/logout.php" class="btn btn-outline-primary margin-left">Đăng xuất</a>
					    e
					<?php }else{ ?>
					    <a href="../Web/login.php" class="btn btn-outline-primary margin-left">Đăng nhập</a>
						<a href="../Web/signup.php" class="btn btn-outline-light margin-left">Đăng kí</a>
					<?php } ?>
				
			</form>
			
			
		</div>
	</nav>
