<?php
	session_start();
	if (isset($_SESSION['username'])){
	    unset($_SESSION['username']); // xóa session Đăng nhập
	}

	//Chuyển hướng đến trang chủ sau khi đăng xuất thành công
	header('Location: index.php');
?>
