<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi EscuelaApp</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/jquery-3.6.1.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
  <!-- Navbar content -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-12">
            @yield('contenido')
        </div>
    </div>
</div>

<footer>MiEscuelita &copy; 2022</footer>    
<script src="{{asset('js/bootstrap.js')}}"></script>

</body>
</html>