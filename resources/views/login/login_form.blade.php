<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <title>ログインフォーム</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">
  <main class="form-signin">
    <form action="{{ Route('login') }}" method="POST">
    @csrf
      <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
  </form>
</main>


    
  </body>
</html>