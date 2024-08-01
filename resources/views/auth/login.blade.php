<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth/app.css')}}">

</head>
<body id="login-body">
    <div class="grid-login">
        <div class="img-login">
            <img src="{{ asset('img/auth/login-img.png')}}" class="login-img">
        </div>
        <div class="card" id="login-card">
            <div class="card-body">
                <h5 class="card-title">Login</h5>
                <span class="und-title">Login Akun Anda</span>

                <form action="/login-adm" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="form-login">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-input" id="username" name="username" placeholder="Masukkan Username Anda">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-login">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" id="password" class="form-input" name="password" placeholder="Masukkan Password Anda">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="btn-submit">
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
