<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ListPost_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function database_item(){
            $que = $this->db->query("SELECT * fROM posts WHERE isPublic = 1 order by createDate DESC LIMIT 15");

            return $que;
        }

        public function viewPost($id){
			$que = $this->db->query("SELECT * FROM posts WHERE id = $id");

			return $que;
        }
    }
