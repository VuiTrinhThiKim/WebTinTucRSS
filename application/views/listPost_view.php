<?php
    $this->load->view('layout/header.php');
?>

<div class="col-sm-12" style="width: 70%; margin: 30px">
<?php
	echo "<h1>DANH SÁCH BÀI VIẾT</h1>";
	$i = 0;

	$lPost = $result->num_rows();
		//in kq
		if($lPost > 0)
		{
			echo "<h3 style='color:red'>Tin bạn đã đăng không public</h3>";
			foreach($resultUser->result_array() as $row){
					$titleP = $row['title'];
					$contentP = $row['content'];
					$contentP100 = substr($contentP, 0, 100);
					$href = site_url('ListPost/viewPost/'.$row['id']);
					$url = "<a href='".$href."'>Xem Thêm</a>";
					echo "<div style='border: 1px solid gray'>
					<h3>$titleP</h3>
					<p>$contentP100...</p>
					<p>$url</p>
				</div>";
			}
			echo "<h3 style='color: blue'>Tin tự đăng public</h3>";
			foreach($result->result_array() as $row){
				$titleP = $row['title'];
				$contentP = $row['content'];
				$contentP100 = substr($contentP, 0, 100);
				$href = site_url('ListPost/viewPost/'.$row['id']);
				$url = "<a href='".$href."'>Xem Thêm</a>";
				//$linkP = $row['link'];
				echo "<div style='border: 1px solid gray'>
					<h3>$titleP</h3>
					<p>$contentP100...</p>
					<p>$url</p>
				</div>";
				$i++;
			}
		}
	if($i == 0){echo "  Không tìm thấy bài viết nào!!!. <br>";}
?>
</div>
<?php
    $this->load->view('layout/footer.php');
?>
