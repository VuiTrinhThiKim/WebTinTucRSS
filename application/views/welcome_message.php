
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<?php 
	//Load trang header
	$this->load->view('layout/header');
?> 
	<div class="container" style="margin-top:30px; margin-left:10px">
		<?php
			//Load trang main
				$this->load->view('layout/simplexmlload');
			?> 
	</div>
<?php
	//Load trang footer
	$this->load->view('layout/footer');
?> 
