@extends('layouts.layout')
@section('title')
	@yield('title', 'Register')
@endsection
@section('content')
    <div class = "container-fluid">
        <div class = "row justify-content-center">
            <div class="col-md-4 col-md-offset-4">
                <h4 style = "margin-top: 70px">Đăng Ký</h4>
                <form action = "{{route('register.custom')}}" method = "post">
                    
                    @csrf
                    <div class = "form-group mb-3">
                        <label for = "name">Tên Đăng Nhập</label>
                        <input type = "text" class = "form-control" placeholder="Nhập Họ Và Tên" name = "name" required autofocus>
                        
                    </div>
                    <div class = "form-group mb-3">
                        <label for = "email">Email</label>
                        <input type = "text" class = "form-control" placeholder="Nhập email" name = "email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class = "form-group mb-3">
                        <label for = "password">Mật Khẩu</label>
                        <input type = "password" class = "form-control" placeholder="Nhập Mật Khẩu" name = "password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class = "form-group mb-3">
                        <label for = "password">Xác Nhận Mật Khẩu</label>
                        <input type = "password" class = "form-control" placeholder = "Xác Nhận Mật Khẩu" name = "password_confirmation" required>
                    </div>
                    <div class="d-grid mx-auto">
                        <button style="margin-bottom: 30px;" type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                    </div>
                    
                    <p>Bạn đã có tài khoản rồi ?<a href="login" style=" text-decoration:none;"> Đăng Nhập</a></p>
                </form>
            </div>
        </div>
    </div>
@endsection
