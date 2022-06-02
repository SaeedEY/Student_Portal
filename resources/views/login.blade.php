
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Maryam Gh>">
    <title>Student Portal - Login</title>

    <link rel="canonical" href="/MG/#">

    
    <link href="/bootstrap.min.css" rel="stylesheet">
    <script src="/bootstrap.bundle.min.js" ></script>
    
    <style>
        html,
            body {
            height: 100%;
            }

            body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
            }

            .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
            }

            .form-signin .checkbox {
            font-weight: 400;
            }

            .form-signin .form-floating:focus-within {
            z-index: 2;
            }

            .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            }

            .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            }
    </style>
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="/">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <!-- A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
      <!-- Failure Message Box -->
      @if (session('warning'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('warning') }}
            <!-- A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like. -->
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="form-floating">
      <input type="id" class="form-control" id="floatingInput" name="ID" placeholder="name@example.com">
      <label for="floatingInput">ID</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="NATCODE" placeholder="Password">
      <label for="floatingPassword">Nat Code</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 Mary GH</p>
  </form>
</main>


    
  </body>
</html>
