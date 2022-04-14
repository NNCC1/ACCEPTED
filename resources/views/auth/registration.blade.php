<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class = "container">
        <div class = "row">
            <div class="col-md-4 col-md-offset-4">
                <h4 style = "margin-top: 20px">Đăng Ký</h4>
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
                    
                    <p>Bạn đã có tài khoản rồi ?<a href="login" style=" text-decoration:none;">Đăng Nhập</a></p>
                </form>


            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>