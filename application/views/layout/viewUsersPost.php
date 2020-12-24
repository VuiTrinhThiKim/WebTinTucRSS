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
		$j = 0;
		$lPostNotPubic = $resultUserNotPublic->num_rows();
		$lPostPubic = $resultUserPublic->num_rows();
			//in kq
			if($lPostNotPubic > 0)
			{
				echo "<h3 style='color:red'>Tin bạn đã đăng không public</h3>";
				foreach($resultUserNotPublic->result_array() as $row){
						$titleP = $row['title'];
						$contentP = $row['content'];
						$contentP100 = substr($contentP, 0, 100);
						$href = site_url('ListPost/viewPost/'.$row['id']);
						$url = "<a href='".$href."'>Xem Thêm</a>";
						$createDate = $row['createDate'];
						$img = "../.".$row['imgPath'];
						echo "<div style='border: 1px solid gray'>
						<h3>$titleP</h3>
						<span style='font-size:14px; color: gray; letter-spacing:1px;'>$createDate</span>
						<img src='$img' width='700' height='400'>
						<p>$contentP100...</p>
						<p>$url</p>
					</div>";

				}
			}
			else {echo "  Không tìm thấy bài viết nào!!!. <br>";}
			if($lPostPubic > 0)
			{
				echo "<h3 style='color:red'>Tin bạn đã đăng public</h3>";
				foreach($resultUserPublic->result_array() as $row){
						$titleP = $row['title'];
						$contentP = $row['content'];
						$contentP100 = substr($contentP, 0, 100);
						$href = site_url('ListPost/viewPost/'.$row['id']);
						$url = "<a href='".$href."'>Xem Thêm</a>";
						$createDate = $row['createDate'];
						$img = "../.".$row['imgPath'];
						echo "<div style='border: 1px solid gray'>
						<h3>$titleP</h3>
						<span style='font-size:14px; color: gray; letter-spacing:1px;'>$createDate</span>
						<img src='$img' width='700' height='400'>
						<p>$contentP100...</p>
						<p>$url</p>
					</div>";

				}
			}
			else {echo "  Không tìm thấy bài viết nào!!!. <br>";}


		?>
	</div>
</div>
<?php
    $this->load->view('layout/footer.php');
?>
