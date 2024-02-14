<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-puss</title>
    @include('part.link')
</head>

<body>
    <div id="app">
        @include('layout.sidebar')
        <div id="main">
            @yield('konten')
            @include('layout.footer')
        </div>
    </div>
    @include('part.script')
</body>

</html>
