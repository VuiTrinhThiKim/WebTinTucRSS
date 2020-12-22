<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Login_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function validate(){
            require_once("application/views/layout/connection.php");

            if (isset($_POST["btnSubmit"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                //Chỉ lấy dữ liệu text, loại bỏ các thẻ html, php, kí tự đặc biệt (nếu có)
                $username = addslashes($_POST['username']);
                $password = addslashes($_POST['password']);

                if ($username == "" || $password =="") {
                    echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red; margin: 20px'>Bạn phải nhập đủ thông tin tên đăng nhập và mật khẩu!</h5></div>";

                }
                else{
                    $passwordMD5 = md5($password);
                    //Kiểm tra thông tin đăng nhập trong csdl website
                    $sqlCheck = "SELECT * FROM users WHERE username = '$username' AND password = '$passwordMD5'";
                    $que = mysqli_query($conn,$sqlCheck);
                    $numRows = mysqli_num_rows($que); //Gán giá trị số lượng hàng trong $que vào $numRows
                    if ($numRows==0) { //Giá trị trong $numRows sẽ bằng 0 nếu nhập sai tên đăng nhập hoặc mật khẩu
                        echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red; margin: 20px'>Tên đăng nhập hoặc mật khẩu không đúng!</h5></div>";
                    }
                    else{
                        //Ghi thông tin user vào session
                        //Hàm mysqli_fetch_array() sẽ trả về 1 hàng kết quả từ $que
                        while($data = mysqli_fetch_array($que, MYSQLI_ASSOC)) { 
                            $_SESSION["user_id"] = $data["id"];
                            $_SESSION['username'] = $data["username"];
                            $_SESSION["email"] = $data["email"];
                            $_SESSION["fullname"] = $data["fullname"];
                        }
                        //Lưu cookie đăng nhập khi checkbox Ghi nhớ đăng nhập được chọn
                        if(isset($_POST['isCheck']))
                        {

                            setcookie('user',$username, time()+3600,"/",'',0,0);
                            setcookie('pass',$password, time()+3600,"/",'',0,0);
                        }
                        return true;

                    }
                    return false;
                }
            }
        }
    }
?>