<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Register | Hotel Hebat</title>
</head>

<body>

    <div class="content m-5 p-5">
        <div class="card text-center">
            <div class="card-header">
              Hotel Hebat
            </div>
            <form action="/register" method="post">
                @csrf
              <div class="card-body mt-5 ms-5 me-5 md-3">
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" name="name" placeholder="name@example.com" value="{{ old('name') }}">
                      <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <input type="hidden" name="role" class="form-control" value="user">
                  <button class="btn btn-primary mt-4" type="submit">Register</button>
              </div>
            </form>
            <small class="d-block text-center md-3"><a href="/login">Login!</a></small>
          </div>
    </div>

</body>
</html>