<?php
    $this->load->view('layout/header.php');
?>
<div class="row">
	<div class="col-sm-8" style="margin-top:30px; margin-left:30px; margin-bottom: 30px">
		<?php
		foreach($result->result_array() as $row){
					$titleP = $row['title'];
					$contentP = $row['content'];
					$createDate = $row['createDate'];
					echo "<div style='border-bottom: 1px solid gray'>
						<h3>$titleP</h3>
						<i>Ngày tạo: $createDate</i>
						<p>$contentP</p>
					</div>";
				}
		?>
	</div>
<?php
		    $this->load->view('layout/sidebar.php');
		?>
</div>
<?php
    $this->load->view('layout/footer.php');
?>