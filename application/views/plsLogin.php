<?php 
	$this->load->view('layout/header.php');
?>
<div class='container'style="margin-top:150px; margin-bottom: 150px">
<h1>Hãy đăng nhập/đăng kí để sử dụng chức năng này</h1>
<a href="<?php echo base_url();?>index.php/login" class="btn btn-outline-primary margin-left">Đăng nhập</a>
						<a href="<?php echo base_url();?>index.php/signup" class="btn btn-outline-danger margin-left">Đăng kí</a>
</div>
<?php
	$this->load->view('layout/footer.php');
?>
