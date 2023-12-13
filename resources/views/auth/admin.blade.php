@extends('master')
@section('title','trang quản trị Website')
@section('content')    
@endsection
<div>
    <p><b style="color: red">chào mừng đến trang quản trị website</b></p>
    {{-- @if(isset($_SESSION['admin']) && count($_SESSION['admin'])>0) --}}
    <p style="color:    blue">
        Xin Chào : {{ $_SESSION['admin'] }}
    </p>
        
    @endif
    <p>
        <a href="/logout">Thoát ra</a>
    </p>
</div>

