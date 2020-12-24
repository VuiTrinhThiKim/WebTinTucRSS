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
		$i = 0;

		$lPost = $result->num_rows();
			//in kq
			if($lPost > 0)
			{
				foreach($result->result_array() as $row){
					$titleP = $row['title'];
					$contentP = $row['content'];
					$contentP100 = substr($contentP, 0, 100);
					$href = site_url('ListPost/viewPost/'.$row['id']);
					$url = "<a href='".$href."'>Xem Thêm</a>";
					$createDate = $row['createDate'];
					$img = "../../.".$row['imgPath'];

					echo "<div style='border: 1px solid gray'>
						<h3>$titleP</h3>
						<span style='font-size:14px; color: gray; letter-spacing:1px;'>$createDate</span>
						<img src='$img' width='800' height='500'>
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
