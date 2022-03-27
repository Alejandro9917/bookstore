@extends('navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/estiloslogin.css">
    <link rel="stylesheet" href="/css/estilosindex.css">
    <link rel="stylesheet/less" type="text/css" href="/css/styles.less">
    <title>Login-Bookstore</title>
</head>
<body>
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card-body">
          Holo
          <form method="POST" action="{{ route('client.login') }}">
              @csrf

              <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">Ingresa el email</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control " name="email" required autocomplete="email" autofocus>
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="password" class="col-md-4 col-form-label text-md-end">Ingrese contraseña</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
                  </div>
              </div>

              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          Ingresar
                      </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
@include('footer')
<script src="https://cdn.jsdelivr.net/npm/less@4"></script>
<script src="https://kit.fontawesome.com/d57c23c747.js" crossorigin="anonymous"></script>
<script src="/js/login.js"></script>
</body>
</html>

@endsection