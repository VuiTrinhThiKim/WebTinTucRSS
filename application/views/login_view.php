<?php
    $this->load->view('layout/header.php');
?>

<body>
    <div id='login_form'>
        <form action='<?php echo base_url();?>index.php/login/process' method='POST' name='process' style="margin-top:50px; margin-bottom: 100px">
           
            <table border="0" align="center">
            <tr>
                <td colspan="2"><h1>Đăng nhập</h1></td>
            </tr>
            <tr>
                <td>Tên đăng nhập <b>(*)</b>:</td>
                <td><input type="text" name="username" value="<?php if (isset($_COOKIE['user'])) echo $_COOKIE['user']; ?>" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td>Mật khẩu <b>(*)</b>:</td>
                <td><input type="password" name="password" value="<?php if (isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td nowrap="nowrap">Ghi nhớ đăng nhập</td>
                <td><input type="checkbox" name="isCheck" value="<?php if (isset($_COOKIE['user'])) echo "checked"; ?>" style="margin: 15px""></td>
            </tr>
            <tr>
                <td nowrap="nowrap" style="color: red">Bạn phải nhập các trường có gắn dấu <b>(*)</b></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Đăng nhập" style="margin: 10px">
                    <input type="reset" class="btn btn-outline-secondary" value="Hủy">
                </td>
            </tr>
        </table>     
        </form>
    </div>
</body>
<?php
    $this->load->view('layout/footer.php');
?>