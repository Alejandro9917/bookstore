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
  <div class="padre">
    <div class="hijo">
      <form class="login">
        <fieldset>
  	      <legend class="legend">Login</legend>
          <div class="input">
            <br>
            <label for="" id="lbl">Email</label>
    	      <input type="email" placeholder="example@example.com"/>
            <span><i class="fa-solid fa-user"></i></span>
          </div>
          <div class="input">
            <br>
            <label for="" id="lbl">Password</label>
    	      <input type="password" placeholder="*******"/>
            <span><i class="fa-solid fa-key"></i></span>
          </div>
          <br>
          <button type="submit" class="submit"><i class="fa fa-long-arrow-right"></i></button>
        </fieldset>
      </form>
      <br>
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