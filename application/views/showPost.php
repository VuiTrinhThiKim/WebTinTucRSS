<?php
    $this->load->view('layout/header.php');
?>
<div class="container" style="margin-top:30px; margin-left:10px">
	<div class="row">
		<?php 
			$this->load->view('layout/sidebar.php');
		?>
		<?php
		$vPost = $result->num_rows();
			//in kq
			if($vPost > 0)
			{
				foreach($result->result_array() as $row){
					$title = $row['title'];
					$description = $row['content'];

					echo "<div class='col-sm-8' style='margin-top:30px; margin-bottom: 30px'
					<div class='post' style='border: 1px solid gray;padding: 5px;border-radius:3px;margin-top:15px'>
						<div class='post-head' style='font-size:14px; color: gray; letter-spacing:1px;'>
							<h2><a class='feed_title' href='#'>$title</a></h2>
								<span style='font-size:14px; color: gray; letter-spacing:1px;'>$pubDate</span>
							</div>
								<div class='post-content' style='font-size: 18px; color:black'>
								<img src=$srcImage width='700' height='400'>
							<h4><a class='feed_description' style='font-size:8px width:small height:small' >$description </a></h4>
							</div>
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
