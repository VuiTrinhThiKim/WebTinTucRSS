<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Signup_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        
    public function validate(){
        require_once("application/views/layout/connection.php");
        if(isset($_POST["btnSubmit"])) {
            //Lấy thông tin btnSubmit Đăng kí 
            $username = $_POST["username"];
            $password = $_POST["password"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            //Kiểm tra dữ liệu trong input không được rỗng
            if($username == "" || $password == "" || $_POST["passwordcheck"] == "" || $name == "" || $email == "") {
                echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Bạn vui lòng nhập đầy đủ thông tin! <a href='javascript: history.go(-1)'>Trở lại</a></h5></div>";
            }
            else{
                //Kiểm tra tên đăng nhập đã tồn tại?
                if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM users WHERE username='$username'")) > 0){
                    echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Tên đăng nhập đã tồn tại. Vui lòng chọn tên khác. <a href='javascript: history.go(-1)'>Trở lại</a></h5></div>";
                    exit;
                } 
                //Kiểm tra định dạng email (vd: email@example.com)
                if (!(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/", $email)))
                {
                    echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Email không hợp lệ! Vui lòng nhập lại <a href='javascript: history.go(-1)'>Trở lại</a></h5></div>";
                    exit;
                }
                //Kiểm tra email đã có người dùng chưa
                if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM users WHERE email='$email'")) > 0)
                {
                    echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Email đã tồn tại! Vui lòng nhập email khác <a href='javascript: history.go(-1)'>Trở lại</a></h5></div>";
                    exit;
                }
                //Kiểm tra dữ liệu $password và $passwordcheck
                if($password == $_POST["passwordcheck"]){
                    $password = md5($password);
                    //Thêm dữ liệu đã điền vào csdl
                    $sqlInsert = "INSERT INTO users(username, password, fullname, email, signupDate)
                    VALUES ('$username', '$password', '$name', '$email', now())";
                    //Thực thi câu query $sqlInsert với $conn lấy từ file connection
                    mysqli_query($conn, $sqlInsert);
                    echo "<h5 style='text-align: center; color: blue'>Chúc mừng! Bạn đã đăng ký thành công!!!</h5>";
                    mysqli_close($conn);
                }
                else{
                    echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Nhập lại mật khẩu sai, vui lòng nhập lại! <a href='javascript: history.go(-1)'>Trở lại</a></h5></div>";
                    exit;
                }
            }
        }
        }
    }
?>