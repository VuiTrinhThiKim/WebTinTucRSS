<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        //Load trang login_view
        $this->load->view('login_view');
    }
    
    public function process(){
        //Load trang model
        $this->load->model('login_model');
        //Lấy kết quả của hàm validate trong login_model
        $result = $this->login_model->validate();
        
        if(!$result){
            //Tải lại trang đăng nhập
            $this->index();
        }else{
            //Chuyển hướng đến trang chủ sau khi đăng nhập thành công
            redirect('');
        }        
    }

    public function logout(){

        if (isset($_SESSION['username'])){
            unset($_SESSION['username']); // xóa session Đăng nhập
        }

        //Chuyển hướng đến trang chủ sau khi đăng xuất thành công
        redirect('');
    }
}
?>