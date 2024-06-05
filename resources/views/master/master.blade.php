<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraDev: CRUD Imob</title>
    <meta name="author" content="freehtml5.co"/>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        html, body {
            height: 100%;
        }
        #page {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        #content {
            flex: 1;
        }
    </style>
</head>
<body>
    <div id="page">
        @include('includes.header')

        <main id="content">
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
    @vite('resources/js/app.js')
</body>
</html>
