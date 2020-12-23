<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('layout/header.php'); ?>
 
	<div class="container" style="margin-top:30px; margin-left:10px">
		<div class="row">
			<?php 
				//Load trang sidebar
				$this->load->view('layout/sidebar');
			?>
			<?php
			//Load trang main
				$this->load->view('layout/simplexmlload');
			?> 
		</div>
	</div>

	
<?php $this->load->view('layout/footer.php'); ?>
