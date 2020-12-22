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
        //Lấy dữ liệu trong listPost_model
        $result = $this->listPost_model->database_item();
        //Lưu dữ liệu vào biến data
        $data['result'] = $result;
        $this->load->view('listPost_view',$data);
    }
    public function viewPost($id)
    {
        $result= $this->listPost_model->viewPost($id);
        $data['result'] = $result;
        $this->load->view('layout/viewPost', $data);
    }
}
