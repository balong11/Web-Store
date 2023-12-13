<?php

if(!isset($_SESSION['login'])){
    return view('auth.login');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <style type="text/css">
        body{
            .container {
                border: 1px solid#000;
                height: auto;
                width: 100%;
                margin: 0 auto;
                text-align: center;
            }

        }
    </style>
    <title>@yield('title')</title>
    <title>Document</title>
    
</head>
<body>
    
    <div class="container">
        @yield('content')
        <p><b style="color: red">WELCOME TO ADMIN</b></p>
        
        @if(session('notice'))
        <p style="color: red">
            {{ session('notice') }}
        </p>
        
        @endif 
    </div>
    <ul >
        <li><a href = "/admincp/cate">quản lý danh mục sản phẩm"</a></li>
        <li><a href = "#">quản lý sản phẩm"</a></li>
        <li><a href = "/admincp/pape">quản lý danh mục  bài viết"</a></li>
        <li><a href = "#">quản lý bài viết"</a></li>

    </ul>
    <a href="admincp/create">create paper</a> <hr> 
    <table  width="100%" style="border-collapse: collapse" border="1";>
        <tr>
            <th>id</th>
            <th>ten </th>
            <th>password</th>
            <th>quan ly</th>
        </tr>
        @foreach ($login as $logins)
        <tr>
            <td>{{ $logins->id }}</td>
            <td>{{ $logins->name }}</td>
            <td>{{ $logins->password }}</td>
            <td>
                <a href="/admincp/destroy/{{ $logins->id }}">xoa</a> | 
                <a href="/admincp/edit/{{ $logins->id }}">sua</a>
            </td>
        </tr>
            
        @endforeach
    </table>
    
</div>

{{-- <form method="POST" action="/login"> <hr>
    {{ csrf_field() }}
    <span>Tài khoản</span>
    <br/>
    <input type="text" name="name" placeholder="nhập tài khoản">
    <br/>
    <span>Mật khẩu</span>
    <br/>
    <input type="password" name="password" placeholder="nhập mật khẩu">
    <br/>
    <button type="submit" >đăng nhập</button>
</form> --}}
</body>
</html>