
<?php //Tạo session
	//Nếu nhập đúng thông tin sẽ ghi lại dữ liệu trong csdl vào sesion để đăng nhập
	session_start();
?>

<?php include "application/views/layout/header.php" ?>
<?php
	//Gọi file connection
	require_once("application/views/layout/connection.php");
	// Kiểm tra btnSubmit Đăng nhập và chỉ xử lí khi btnSubmit được click
	if (isset($_POST["btnSubmit"])) {
		//Lấy thông tin đăng nhập đã nhập
		$username = $_POST["username"];
		$password = $_POST["password"];
		//Chỉ lấy dữ liệu text, loại bỏ các thẻ html, php, kí tự đặc biệt (nếu có)
		$username = strip_tags($username);
		$password = strip_tags($password);

		if ($username == "" || $password =="") {
			echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red; margin: 20px'>Bạn phải nhập đủ thông tin tên đăng nhập và mật khẩu!</h5></div>";

		}
		else{
			//Kiểm tra thông tin đăng nhập trong csdl website
			$sqlCheck = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
			$que = mysqli_query($conn,$sqlCheck);
			$numRows = mysqli_num_rows($que); //Gán giá trị số lượng hàng trong $que vào $numRows
			if ($numRows==0) { //Giá trị trong $numRows sẽ bằng 0 nếu nhập sai tên đăng nhập hoặc mật khẩu
				echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red; margin: 20px'>Tên đăng nhập hoặc mật khẩu không đúng!</h5></div>";
			}
			else{
				//Ghi thông tin user vào session
				//Hàm mysqli_fetch_array() sẽ trả về 1 hàng kết quả từ $que
				while($data = mysqli_fetch_array($query)) { 
		    		$_SESSION["user_id"] = $data["id"];
					$_SESSION['username'] = $data["username"];
					$_SESSION["email"] = $data["email"];
					$_SESSION["fullname"] = $data["fullname"];
		    	}
				//Chuyển hướng đến trang chủ sau khi đăng nhập thành công
				
				header('Location: index.php');
			}
		}
	}
?>

	<form action="login.php" method="POST" style="margin-top:50px; margin-bottom: 50px">
		<table border="0" align="center">
			<tr>
				<td colspan="2"><h1>Đăng nhập</h1></td>
			</tr>
			<tr>
				<td>Tên đăng nhập <b>(*)</b>:</td>
				<td><input type="text" name="username" size="50" style="margin: 15px"></td>
			</tr>
			<tr>
				<td>Mật khẩu <b>(*)</b>:</td>
				<td><input type="password" name="password" size="50" style="margin: 15px"></td>
			</tr>
			<tr>
				<td nowrap="nowrap" style="color: red">Bạn phải nhập các trường có gắn dấu <b>(*)</b></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Đăng nhập" style="margin: 10px">
					<input type="reset" class="btn btn-outline-secondary" value="Hủy">
				</td>
			</tr>
		</table>
	</form>

<?php include "application/views/layout/footer.php" ?>