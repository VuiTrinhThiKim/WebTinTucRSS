<!DOCTYPE html>
<html lang="en">

<?php include "application/views/layout/header.php" ?>
	<?php //Nap file connection vào
		//Trình biên dịch sẽ dừng và báo lỗi nếu nạp 2 lần
		require_once("application/views/layout/connection.php"); 
	?>

	<?php
		if(isset($_POST["btnSubmit"])) {
			//Lấy thông tin btn-submit Đăng kí 
			$username = $_POST["username"];
			$password = $_POST["password"];
			$name = $_POST["name"];
			$email = $_POST["email"];

			//Kiểm tra dữ liệu trong input không được rỗng
			if($username == "" || $password == "" || $_POST["passwordcheck"] == "" || $name == "" || $email == "") {
				echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Bạn vui lòng nhập đầy đủ thông tin!</h5></div>";
			}
			else{
				//Kiểm tra dữ liệu $password và $passwordcheck
				if( $password == $_POST["passwordcheck"]){
					//Thêm dữ liệu đã điền vào csdl
					$sqlInsert = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
					//Thực thi câu query $sqlInsert với $conn lấy từ file connection
					mysqli_query($conn,$sqlInsert);
					echo "<h5 style='text-align: center; color: blue'>Chúc mừng! Bạn đã đăng ký thành công!!!</h5>";
				}
				else{
					echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Nhập lại mật khẩu sai, vui lòng nhập lại!</h5></div>";
				}
			}
		}
	?>
		<form action="signup.php" method="POST" style="margin-top:50px; margin-bottom: 50px">
			<table border="0" align="center">
				
				<tr>
					<td colspan="2"><h1>Đăng kí tài khoản</h1></td>
				</tr>	
				<tr>
					<td>Tên đăng nhập <b>(*)</b>:</td>
					<td><input type="text" id="username" name="username" size="50" style="margin: 15px"></td>
				</tr>
				<tr>
					<td>Mật khẩu <b>(*)</b>:</td>
					<td><input type="password" id="pass" name="password" size="50" style="margin: 15px; ma"></td>
				</tr>
				<tr>
					<td>Nhập lại mật khẩu <b>(*)</b>:</td>
					<td><input type="password" id="passcheck" name="passwordcheck" size="50" style="margin: 15px; ma"></td>
				</tr>
				<tr>
					<td>Họ và tên: <b>(*)</b></td>
					<td><input type="text" id="name" name="name" size="50" style="margin: 15px"></td>
				</tr>
				<tr>
					<td>Email: <b>(*)</b></td>
					<td><input type="text" id="email" name="email" size="50" style="margin: 15px"></td>
				</tr>
				<tr>
					<td nowrap="nowrap" style="color: red">Bạn phải nhập các trường có gắn dấu <b>(*)</b></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Đăng kí">
						<input type="reset" class="btn btn-outline-secondary" value="Đặt lại">
					</td>
				</tr>

			</table>
			
		</form>

<?php include "application/views/layout/footer.php" ?>