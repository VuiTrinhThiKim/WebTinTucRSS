<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListPost extends CI_Controller {
     function __construct()
     {
        parent::__construct();
        //Load trang listPost_model
        $this->load->Model("listPost_model"); 
    }
    public function index()
    {   
        if(isset($_SESSION['username']))
        {//lấy dữ liệu k public của user
            $id = $this->listPost_model->searchId();
            $id = $id->row()->id;
            $resultUser = $this->listPost_model->userPost($id);
            //Lấy dữ liệu trong listPost_model
            $result = $this->listPost_model->database_item();

            //Lưu dữ liệu vào biến data
            $data['result'] = $result;
            $data['resultUser'] = $resultUser;
            $this->load->view('listPost_view',$data);
        }
        else
        {
            $this->load->view('plsLogin');
        }
    }
    public function viewPost($id)
    {
        $result= $this->listPost_model->viewPost($id);
        $data['result'] = $result;
        $this->load->view('viewPost', $data);
    }
}
