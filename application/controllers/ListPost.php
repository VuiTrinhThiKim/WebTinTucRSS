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
        {
            $id = $this->listPost_model->searchId();
            $id = $id->row()->id;
            
            //Lấy dữ liệu tất cả bài public trong listPost_model
            $result = $this->listPost_model->viewAllPostPublic();

            //Lưu dữ liệu vào biến data
            $data['result'] = $result;
            $this->load->view('listPost_view',$data);
        }
        else
        {
            $this->load->view('plsLogin');
        }
    }
    public function userPost($userID)
    {
        //Lấy dữ liệu k public của user
        $resultUserNotPublic = $this->listPost_model->userPostNotPublic($userID);
        //Lấy dữ liệu public của user
        $resultUserPublic = $this->listPost_model->userPostPublic($userID);

        $data['resultUserNotPublic'] = $resultUserNotPublic;
        $data['resultUserPublic'] = $resultUserPublic;
        $this->load->view('layout/viewUsersPost', $data);
    }
    public function viewPost($id)
    {
        $result= $this->listPost_model->viewPost($id);
        $data['result'] = $result;
        $this->load->view('layout/viewPost', $data);
    }
}
