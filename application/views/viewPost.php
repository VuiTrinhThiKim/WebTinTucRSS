<?php
    $this->load->view('layout/header.php');
?>
<div class="row">
	<?php $this->load->view('layout/sidebar.php'); ?>
	<div class="col-sm-8" style="margin-top:30px; margin-left:30px; margin-bottom: 30px">
		<div class="container" style="margin-top:30px; margin-left:10px">
				
				<?php
				foreach($result->result_array() as $row){
							$titleP = $row['title'];
							$contentP = $row['content'];
							$createDate = $row['createDate'];
							$img = "../../.".$row['imgPath'];
							echo "<div class='post' style='border: 1px solid gray;padding: 5px;border-radius:3px;margin-top:15px'>
							<div class='post-head' style='font-size:14px; color: gray; letter-spacing:1px;'>
								<h2><a class='feed_title' href='#'>$titleP</a></h2>
									<span style='font-size:14px; color: gray; letter-spacing:1px;'>$createDate</span>
								</div>
									<div class='post-content' style='font-size: 18px; color:black'>
									<img src='$img' width='800' height='500'>
								<h4><a class='feed_description' style='font-size:8px width:small height:small' >$contentP </a></h4>
								</div>
							</div>";
				}
				?>
		</div>
	</div>
		    
</div>
<?php
    $this->load->view('layout/footer.php');
?>
