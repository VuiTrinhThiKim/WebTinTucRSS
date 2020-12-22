<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class AddPost_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        public function validate(){
            require_once("application/views/layout/connection.php");

            if ($_SERVER['REQUEST_METHOD'] == "POST") && isset($_POST["btnSubmit"])) {
				if($_POST["title"] == "" || $_POST["content"] == "") {
					echo "<div class='alert alert-warning' role='alert'><h5 style='text-align: center; color: red'>Bạn vui lòng nhập đầy đủ thông tin!</h5></div>";
				}
				else{
					//Lấy dữ liệu trong form
					$title = $_POST["title"];
					$content = $_POST["content"];
					
					//Xử lí ảnh

				    //Kiểm tra checkbox isPublic có được chọn?
				    $isPublic = 0;
					if (isset($_POST["isPublic"])) {
						$isPublic = $_POST["isPublic"];
					}

					$userID = $_SESSION["user_id"];

					$sqlInsert = "INSERT INTO posts(title, content, userID, imgPath, isPublic, createDate, updateDate ) VALUES ( '$title', '$content', '$userID', '$imgPath', '$isPublic', now(), now())";

					mysqli_query($conn,$sqlInsert);
					echo "<div class='alert alert-success' role='alert'><h5 style='text-align: center; color: blue'>Bài viết đã thêm thành công</h5></div>";

					return true;
				}
				return false;	
			}
        }
    }