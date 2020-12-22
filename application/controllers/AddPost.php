<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddPost extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        //Load trang addPost_view
        $this->load->view('addPost_view');
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
            //Chuyển hướng đến trang chủ sau khi đăng nhập thành công
            redirect('');
        }        
    }

}