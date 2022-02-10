<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <h1>@yield('h1')</h1>
        </div>
    </header>
    <main class="container mt-3">
        @yield('pageContent')
    </main>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>