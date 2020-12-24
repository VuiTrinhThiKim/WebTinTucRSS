<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddPost extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        if(isset($_SESSION['username']))
        {
            //Load trang addPost_view
           $this->load->view('addPost_view');
        }
        else
        {
            $this->load->view('plsLogin');
        }
    }
    
    public function process(){
        //Load trang addPost_model
        $this->load->model('addPost_model');
        //Lấy kết quả của hàm validate trong addPost_model
        $result = $this->addPost_model->validate();
        
        if(!$result){
            //Trở lại trang đăng nhập
            $this->index();
        }else{
            //Chuyển hướng đến xem danh sách bài viết sau đăng bài thành công
            redirect('listPost');
        }        
    }
    
}
