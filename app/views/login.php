<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="<?=img('logo_proyek1.png')?>" type="image/icon type">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body style="background-color: blueviolet;">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li> -->
                </ul>
                <button class="btn btn-danger " type="submit">Login</button>
              </div>
            </div>
          </nav>
    </header>

    <div class="container-md border rounded bg-light mt-5 p-4" style="width: 35%;">
        <h1 class="text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
            Login
        </h1>
        <div class="container mx-auto" style="width: 55%;">
            <img src="<?=img('logo_proyek1.png')?>" alt="logo" width="200px">
        </div>
        <form class="mx-4" method='POST' action='<?= url('login/login') ?>'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name='password' type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lupa Password</label>
            </div> -->
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" style="border-radius: 20px;">Login</button>
            </div>
        </form>
    </div>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>