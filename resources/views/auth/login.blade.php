@extends('layouts.layout')
@section('title')
	@yield('title', 'Login')
@endsection
    
@section('content')
    <div class="container-fluid">
        <div class = "row  justify-content-center" >
            <div class="col-md-4 col-md-offset-4">
                <h4 style = "margin-top: 70px">Đăng Nhập</h4>
                <form action = "{{route('login.custom')}}" method = "post">
                    @csrf
                    <div class = "form-group mb-3">
                        <label for = "email">Email</label>
                        <input type = "text" class = "form-control" placeholder="Nhập email" name = "email" required auto focus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                        
                    <div class = "form-group mb-3">
                        <label for = "password">Mật Khẩu</label>
                        <input type = "password" class = "form-control" placeholder="Nhập mật khẩu" name = "password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="d-grid mx-auto">
                        <button style = "margin-bottom: 30px" type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                    </div>
                    <a href="registration" style = "text-decoration:none;">Nếu chưa có tài khoản, đăng ký ở đây</a>
                </form>
            </div>
        </div>
    </div>
@endsection
    