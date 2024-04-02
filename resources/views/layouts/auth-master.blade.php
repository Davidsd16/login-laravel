<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplicación de Login</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.main.css')}}">
    <style>
        .body {
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
        width: 300px; 
        margin: 50px auto 0; 
        }

        .form-control {
            width: 100%;
            max-width: 400px; 
            padding: 10px; 
        }

    </style>
</head>
<body>
    <main class="container">
        @yield('content')
    </main>
    <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>