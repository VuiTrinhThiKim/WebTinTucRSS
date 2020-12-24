<?php
    $this->load->view('layout/header.php');
?>
<div class="container" style="margin-top:30px; margin-left:10px">
	<div class="row">
		<?php 
			//Load trang sidebar
			$this->load->view('layout/sidebar');
		?>
	<div class="col-sm-8" style="width: 70%; margin:auto">
	<?php
		echo "<h1>DANH SÁCH BÀI VIẾT</h1>";

		//Xử lí hiện danh sách bài viết
		$i = 0;
		//Đếm số dòng trả về
		$lPost = $result->num_rows();
			if($lPost > 0)
			{
				foreach($result->result_array() as $row){
					$titleP = $row['title']; //Lấy tiêu đề bài viết
					$contentP = $row['content']; //Nội dung bài viết
					$contentP100 = substr($contentP, 0, 100); //100 kí tự đầu của nọi dung
					$href = site_url('ListPost/viewPost/'.$row['id']); //đường dẫn đến id bài viết
					$url = "<a href='".$href."'>Xem Thêm</a>"; //Link xem thêm chứa id bài viết
					$createDate = $row['createDate']; //Ngày tạo
					$img = ".".$row['imgPath']; //Địa chỉ hình ảnh

					echo "<div style='border: 1px solid gray'>
						<h3>$titleP</h3>
						<span style='font-size:14px; color: gray; letter-spacing:1px;'>$createDate</span>
						<img src='$img' width='700' height='400'>
						<p>$contentP100...</p>
						<p>$url</p>
					</div>";
					$i++;
				}
			}
		if($i == 0){echo "  Không tìm thấy bài viết nào!!!. <br>";}
		?>
	</div>
</div>
<?php
    $this->load->view('layout/footer.php');
?>
