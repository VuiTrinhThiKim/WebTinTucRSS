<?php
    $this->load->view('layout/header.php');
?>
<body>
    <div id='signup_form'>
        <form action='<?php echo base_url();?>index.php/signup/process' method='POST' name='process' style="margin-top:50px; margin-bottom: 100px">
           
            <table border="0" align="center">
            <tr>
                <td colspan="2"><h1>Đăng kí tài khoản</h1></td>
            </tr>   
            <tr>
                <td>Tên đăng nhập <b>(*)</b>:</td>
                <td><input type="text" id="username" name="username" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td>Mật khẩu <b>(*)</b>:</td>
                <td><input type="password" id="pass" name="password" size="50" style="margin: 15px; ma"></td>
            </tr>
            <tr>
                <td>Nhập lại mật khẩu <b>(*)</b>:</td>
                <td><input type="password" id="passcheck" name="passwordcheck" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td>Họ và tên: <b>(*)</b></td>
                <td><input type="text" id="name" name="name" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td>Email: <b>(*)</b></td>
                <td><input type="text" id="email" name="email" size="50" style="margin: 15px"></td>
            </tr>
            <tr>
                <td nowrap="nowrap" style="color: red">Bạn phải nhập các trường có gắn dấu <b>(*)</b></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnSubmit" class="btn btn-outline-primary" value="Đăng kí">
                    <input type="reset" class="btn btn-outline-secondary" value="Đặt lại">
                </td>
            </tr>
        </table>     
        </form>
    </div>
</body>
<?php
    $this->load->view('layout/footer.php');
?>
