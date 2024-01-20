<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Gudang ku</title>
</head>

<body>
    <div class="container">
        <div class="card mx-auto shadow px-3 mt-5 py-4" style="width:400px">
            <h2 class="text-center">Login</h2>
            @if (session('pesan'))
                {{ session('pesan') }}
            @endif
            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control"placeholder="username" name="username">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control"placeholder="password" name="password">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-sm px-5 btn-primary d-block mx-auto" value="Login">
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
