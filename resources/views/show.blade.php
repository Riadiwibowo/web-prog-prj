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
                    <li><a href="/">Home</a></li>
                    <li><a href="/">View</a></li>
                    <li><a href="/">Profile</a></li>
                    <li><a href="/">Add Furniture</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- body -->
    <section id="middle">
    <h2>List dari product yang telah diupload</h2>
    @foreach($pr as $p)
    <div class="mobil">
        <img src="{{ Storage::url($p->path) }}" alt="">
        <h3> {{ $p->name }} </h3>
        <p> {{ $p->price }} </p>
        <p> {{ $p->type }} </p>
        <p> {{ $p->color }} </p>
    </div>
    @endforeach
    </section>

    <!-- footer -->
    <section id="footer">
        <p class="footer-text">Copyright &copy; Bluejack 20-1</p>
    </section>
</body>
</html>