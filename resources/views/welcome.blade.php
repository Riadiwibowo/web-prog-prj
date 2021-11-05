<!DOCTYPE html>
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
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
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
                        <label for="username">Email</label>
                        <input type="text" class="inputLength" id="username" placeholder="Enter your email">
                    </div>
                    <div class="input">
                        <label for="pw">Password</label>
                        <input type="password" class="inputLength" id="pw" placeholder="Enter your password">
                    </div>

                    <div class="input2">
                        <input type="checkbox" id="cek">
                        <label for="cek">Remember Me</label> 
                    </div>
                    
                    <input type="button" value="Login" id="btnLogin" class="btn">
                </form>
            </div>
        </div>  
    </section>

</body>
</html>