<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject</title>
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
</head>
<body>
    <!-- nav section -->
    <section id="navigation">
        <div class="navbar">
            <img class="logo" src="{{url('/assets/drake.jpg')}}" alt="drake">
            <nav>
                <ul>
                    <li><a href="/home">Home</a></li>
                    <li><a href="/">View</a></li>
                    <li><a href="/">Profile</a></li>
                    <li><a href="/add">Add Furniture</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- body -->
    <section id="middle">
        <div class="middle-container">
            <div class="header-login">
                <h3>Update Furniture</h3>
            </div>
            <div class="login">
                <form action="{{ url('update',$pr->id) }}" method="POST" enctype="multipart/form-data"> 
                    @csrf
                    <div class="input">
                        <label for="name">Name</label>
                        <input type="text" class="inputLength" id="name" placeholder="Enter furniture's name" name="name" value="{{$pr->name}}">
                    </div>
                    <div class="input">
                        <label for="price">Price</label>
                        <input type="number" class="inputLength" id="price" placeholder="Enter furniture's price" name="price" value="{{$pr->price}}">
                    </div>
                    <div class="input">
                        <label for="type">Type</label>
                        <select name="type" id="type" value="{{$pr->type}}">
                            <option value="table">table</option>
                            <option value="chair">chair</option>
                            <option value="lamp">lamp</option>
                        </select>
                    </div>
                    <div class="input">
                        <label for="color">Color</label>
                        <select name="color" id="color" value="{{$pr->color}}">
                            <option value="white">white</option>
                            <option value="black">black</option>
                        </select>
                    </div>
                    <label for="image">Gambar</label>
                    <input type="file" name="image" id="image" value="{{$pr->image}}">
                    <button class="btn">Update Furniture</button>
                </form>
            </div>
        </div>  
    </section>

    <!-- footer -->
    <section id="footer">
        <p class="footer-text">Copyright &copy; Bluejack 20-1</p>
    </section>

</body>
</html>