
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Perpustakaan</title>
    <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    


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

      body {
       background-image: url('../src/Login.png');
       background-repeat: no-repeat;
       background-size: cover;
    }
    </style>
  
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center"> 
<main class="form-signin" style="font-family: Arial">
  <form action="proses_login.php" method="POST" class="position-absolute top-50 start-50 translate-middle" style="width:400 ">
    <img class="mb-4" src="../src/logo.png"  width="190">
    <h1 class="h3 mb-3 fw-normal" style="color: white; font-weight: bold !important;">Perpustakaan</h1>

    <div class="form-floating" style="padding-bottom: 8px">
      <input  class="form-control" id="floatingInput" placeholder="name@example.com" name="username">
      <label for="floatingInput" >Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div><br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" style="color: white; font-weight: bold !important;">Login</button>
    <p class="mt-5 mb-3 text-light">&copy; 2020–2021</p>
  </form>
</main>   
  </body>
  <footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </footer>
</html>