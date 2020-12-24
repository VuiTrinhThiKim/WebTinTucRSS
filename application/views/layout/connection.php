<?php
	//Thiết lập thông tin server
	//Tạo kết nối đến csdl 
	$server_username = "root"; 
	$server_password = ""; 
	$server_host = "localhost"; 
	$database = 'website'; 

	//Dùng mysqli_connect() để kết nối csdl
	$conn = mysqli_connect($server_host,$server_username,$server_password,$database);
	if(!$conn) {
		//echo "Không thể kết nối tới cơ sở dữ liệu".$database;
	}
	else {
		//echo "Kết nối thành công đến cơ sở dữ liệu ". $database;
	}
	//Website có sử dụng tiếng Việt có dấu => dùng UTF8
	mysqli_query($conn,"SET NAMES 'UTF8'");
