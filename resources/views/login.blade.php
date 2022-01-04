{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <!-- nav section -->
    <section id="navigation">
        <div class="navbar">
            <img class="logo" src="{{url('/assets/drake.jpg')}}" alt="drake">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">View</a></li>
                    <li><a href="/homeAdmin">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- body -->
    <section id="middle">
        <div class="middle-container">
            <div class="header-login">
                <h3>Login</h3>
            </div>
            <div class="login">
                <form>
                    <div class="input">
                        <label for="email">Email</label>
                        <input type="text" class="inputLength" id="email" placeholder="Enter your email" name="email">
                    </div>
                    <div class="input">
                        <label for="pw">Password</label>
                        <input type="password" class="inputLength" id="pw" placeholder="Enter your password" name="pw">
                    </div>

                    <div class="input2">
                        <input type="checkbox" id="cek" name="remember">
                        <label for="cek">Remember Me</label> 
                    </div>
                    <button class="btn">Login</button>
                </form>
            </div>
        </div>  
    </section>

    <!-- footer -->
    <section id="footer">
        <p class="footer-text">Copyright &copy; Bluejack 20-1</p>
    </section>

</body>
</html> --}}
@extends('layouts/main')
@section('container')
<div class="header-login">
    <h3>Login</h3>
</div>
<div class="login">
    <form>
        <div class="input">
            <label for="email">Email</label>
            <input type="text" class="inputLength" id="email" placeholder="Enter your email" name="email">
        </div>
        <div class="input">
            <label for="pw">Password</label>
            <input type="password" class="inputLength" id="pw" placeholder="Enter your password" name="pw">
        </div>

        <div class="input2">
            <input type="checkbox" id="cek" name="remember">
            <label for="cek">Remember Me</label> 
        </div>
        <button class="btn">Login</button>
    </form>
</div>
@endsection