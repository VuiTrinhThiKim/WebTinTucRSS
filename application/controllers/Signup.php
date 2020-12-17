<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    public function index($msg = NULL){
        $data['msg'] = $msg;
        //Load trang signup_view
        $this->load->view('signup_view', $data);
    }
    
    public function process(){
        //Load trang signup_model
        $this->load->model('signup_model');
        //Lấy kết quả của hàm validate trong signup_model
        $result = $this->signup_model->validate();
        
        if(!$result){
            
            $msg = '<font color=red>Lỗi!</font><br />';
            $this->index($msg);
        }else{
            //Trả về trang chủ
            redirect('');
        }        
    }
}
?>