<?php
    $this->load->view('layout/header.php');
?>

	<div class="innertube">
	<?php
	$vPost = $result->num_rows();
		//in kq
		if($vPost > 0)
		{
			foreach($result->result_array() as $row){
				$titleP = $row['title'];
				$contentP = $row['content'];

				echo "<div style='border-bottom: 1px solid gray'>
					<h3>$titleP</h3>
					<i>Ngày tạo: $data['createdate']/i>
					<p>$contentP</p>
				</div>";
			}
		}
	?>
	</div>
</main>
<?php
    $this->load->view('layout/sidebar.php');
?>
<?php
    $this->load->view('layout/footer.php');
?>