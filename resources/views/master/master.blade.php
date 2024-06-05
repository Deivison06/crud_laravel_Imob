<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaraDev: CRUD Imob</title>
    <meta name="author" content="freehtml5.co"/>

    <link rel="preconnect" href="https://fonts.googleapis.com"> <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <link href="https: //fonts.googleapis.com/css2?family=Miriam+Libre:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
