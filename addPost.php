<?php
	session_start();
	include "application/views/layout/header.php"
?>
<?php
	require_once("application/views/layout/connection.php");
	//Kiểm tra btnSubmit Đăng bài viết và chỉ xử lí khi btnSubmit được click
	if (isset($_POST["btnSubmit"])) {
		if($title == "" || $content == "") {
			echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Bạn vui lòng nhập đầy đủ thông tin!</h5></div>";
		}
		else{
			//Lấy dữ liệu trong form
			$title = $_POST["title"];
			$content = $_POST["content"];
			$isPublic = 0;
			if (isset($_POST["isPublic"])) {
				$is_public = $_POST["isPublic"];
			}
			
			$userID = $_SESSION["userID"];

			$sqlInsert = "INSERT INTO posts(title, content, userID, isPublic, createDate, updateDate ) VALUES ( '$title', '$content', '$userID', '$isPublic', now(), now())";

			mysqli_query($conn,$sqlInsert);
			echo "<div class='alert alert-success' role='alert'><h5 style='text-align: center; color: blue'>Bài viết đã thêm thành công</h5></div>";
		}	
	}

?>
<form action="addPost.php" method="POST" style="margin-top:50px; margin-bottom: 50px">
		<table align="center">
			<tr>
				<td colspan="2"><h3 style="color: blue">Thêm bài viết mới</h3></td>
			</tr>	
			<tr>
				<td nowrap="nowrap">Tiêu đề bài viết <b>(*)</b>:</td>
				<td><input type="text" id="title" name="title" size="75" style="margin: 10px"></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Nội dung <b>(*)</b>:</td>
				<td><textarea name="content" id="content" rows="12" cols="100" style="margin: 10px"></textarea></td>
			</tr>
			<tr>
				<td nowrap="nowrap">Public:</td>
				<td><input type="checkbox" id="isPublic" name="isPublic" value="1" style="margin: 10px""> public</td>
			</tr>
			<tr>
				<td nowrap="nowrap" style="color: red">Bạn phải nhập các trường có gắn dấu <b>(*)</b></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Thêm bài viết">
					<input type="reset" class="btn btn-outline-secondary" value="Hủy">
				</td>
			</tr>
		</table>	
	</form>
<?php include "application/views/layout/footer.php" ?>