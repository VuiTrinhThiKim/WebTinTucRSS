<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ListPost_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function database_item(){
            $que = $this->db->query("SELECT * FROM posts WHERE isPublic = 1 order by createDate DESC LIMIT 15");
            return $que;
        }
        public function searchId()
        {
            if(isset($_SESSION['username']))
            {
                $name = $_SESSION['username'];
            }
            
            $queId = $this->db->query("SELECT id FROM users WHERE username = '$name'");
            return $queId;
        }
        public function userPost($userID)
        {
            $que = $this->db->query("SELECT * FROM posts WHERE user_id = $userID AND isPublic = 0");
            return $que;
        }
        public function viewPost($id){

			$que = $this->db->query("SELECT * FROM posts WHERE id = $id");
			return $que;
        }
    }
