<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        body{
            background: -o-linear-gradient(0deg, #055596, #1e4aa9);
            background: -webkit-linear-gradient(0deg, #1e7080, #1e20a9);
            min-height: 100%;
            display: flex;
            flex-direction: column;

        }
        html{
            height: 100%;
        }
        footer{
            margin-top: auto;
        }
        
      </style>
    
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/ ">Project-Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div   class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="/viewFurniture">View</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="/login">Login</a>
          </li>
          <li class="nav-item">
          <a class="nav-link " href="/register">Register</a>
          </li>
      </ul>
      </div>
  </div>
  </nav>

    <body>
        <div class="container mt-4" >
        @yield('container')
        </div>
    </body>
    <footer class="footer-area footer--light bg-primary d-flex justify-content-center text-white flex-shrink-0">
        <p>
            Place sticky footer content here.
        </p>
      </footer>
</html>

