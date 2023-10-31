<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body>
<button class="button"><a href="{{ route('client.index')}}">Quay lại Trang Chủ</a></button>
<img class="wave" src="{{asset('images/wave.png')}}">
<div class="container">
    <div class="img">
        <img src="{{asset('images/bg.jpg')}}">
    </div>
    <div class="login-content">
        <form action="{{route('staffs.loginProcess')}}" method="post">
            @csrf
            <img src="{{asset('images/avatar.jpg')}}">
            <h2 class="title">Welcome</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password">
                </div>
            </div>
            <input type="submit" class="btn" name="btn" value="Đăng Nhập">

        </form>

    </div>
</div>

<script>
    const inputs = document.querySelectorAll(".input");


    function addcl() {
        let parent = this.parentNode.parentNode;
        parent.classList.add("focus");
    }

    function remcl() {
        let parent = this.parentNode.parentNode;
        if (this.value == "") {
            parent.classList.remove("focus");
        }
    }
    inputs.forEach(input => {
        input.addEventListener("focus", addcl);
        input.addEventListener("blur", remcl);
    });
</script>
</body>
</html>
