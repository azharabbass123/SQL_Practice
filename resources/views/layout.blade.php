<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- boostrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row text-center m-2 p-3 bg-info">
            <div class="col-12">
                <h4>@yield('title')<h44>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-2">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>