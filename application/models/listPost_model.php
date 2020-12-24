<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class ListPost_model extends CI_Model{
        function __construct(){
            parent::__construct();
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
        public function viewAllPostPublic(){

            $que = $this->db->query("SELECT * FROM posts WHERE isPublic = 1");
            return $que;
        }
        public function userPostNotPublic($userID)
        {
            $que = $this->db->query("SELECT * FROM posts WHERE userID = $userID AND isPublic = 0");
            return $que;
        }
        public function userPostPublic($userID)
        {
            $que = $this->db->query("SELECT * FROM posts WHERE userID = $userID AND isPublic = 1");
            return $que;
        }
        public function viewPost($id){

			$que = $this->db->query("SELECT * FROM posts WHERE id = $id");
			return $que;
        }
    }
