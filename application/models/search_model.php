<?php
class search_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function database_item($search)
	{
		$query = $this->db->query("SELECT * FROM tintuc WHERE titlerss LIKE '%$search%'");
		return $query;
	}
}
