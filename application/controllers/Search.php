<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	 function __construct()
	 {
		parent::__construct();
		$this->load->Model("search_model");	
	}
	public function index()
	{	
		$search = $_GET['search-bar'];
		$result = $this->search_model->database_item($search);
		$data['result'] = $result;
		$this->load->view('search_view',$data);
	}
}
