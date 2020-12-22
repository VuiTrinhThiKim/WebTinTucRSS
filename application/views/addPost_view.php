<?php
    $this->load->view('layout/header.php');
?>

<body>
    <div id='addPost_form'>
		<form action='<?php echo base_url();?>index.php/addPost/process' method='POST' name='process' style="margin-top:50px; margin-bottom: 100px">
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
					<td nowrap="nowrap">Public? :</td>
					<td>
						<input type="checkbox" id="isPublic" name="isPublic" value="1" style="margin: 10px"">Public
					</td>
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
    </div>
</body>
<?php
$this->load->view('layout/footer.php');
?>