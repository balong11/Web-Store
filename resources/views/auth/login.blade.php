<?php
// session_start();

if(isset($_GET['login'])){
    // session_destroy();
    $taikhoan->name = $_GET['name'];
    $matkhau->password = $_GET['password'];

    if($count>0){
        $_SESSION['login'] = $taikhoan;
        header("location:master");
    // var_dump($taikhoan,$matkhau);die;
    }else{
        echo '<scrip>alert("tài khoản hoặc mật khẩu không đúng,vui lòng thử lại.");</scrip>';
        header("location:login");

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG NHẬP ADMIN</title>
    <style type="text/css">
        body{
            background: #f2f2f2;
        }
        .wrapper-login {
            width: 20%;
            margin: 0 auto;
        }
        table.tabe-login {
            width: 100%;
        }
        table.tabe-login tr td {
            padding: 5px;
        }
    </style>
</head>
<body>
<div class="wrapper-login">
<form method="get" action="/admincp/a" autocomplete="off">
    <table border="1" class="tabe-login" style="text-align: center; border-collapse:collapse">
    <tr>
        <td colspan="2" ><h3>đăng nhập admin</h3></td>
    </tr>
    <tr>
        <td>tài khoản</td>
        <td><input type="text" size="30" name="name"></td>
    </tr>
    <tr>
        <td>mật khẩu</td>
        <td><input type="text" size="30" name="password"></td>
        
    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="login" value="đăng nhập"></td>
    </tr>
    </table>
</form>
</div>
<script type="text/javascrip" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>   
</body>
</html>
