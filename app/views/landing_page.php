<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking</title>
    <link rel="icon" href="<?=img('logo_proyek1.png')?>" type="image/icon type">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?=url()?>">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li> -->
                </ul>
                <?php SESSION::start() ?>
                <?= SESSION::has('id') ? 
                '<a href="'.url('auth/logout').'" class="btn btn-danger " type="submit">Logout</a>' : 
                '<a href="'.url('auth').'" class="btn btn-danger " type="submit">Login</a>'?>
              </div>
            </div>
          </nav>
    </header>

    <div class="container mt-4">
        <h1>
            Sistem Tracking Mahasiswa Dosen <br>
            API Sevices
        </h1>

        <p class="h6 mt-4">
            API Services ini dibuat untuk mendapatkan informasi lokasi dari <br>
            Mahasiswa dan dosen
        </p>

        <a href="<?= url('auth') ?>" class="btn btn-warning btn-lg px-4 m-3">Login</a>
        <a href="<?= url('docs') ?>" class="btn btn-success btn-lg px-4 m-3">Docs</a>

        <img 
        style="width: 600px; position: absolute; margin-top: -100px; margin-left: 240px; z-index: -2;box-shadow: 0px 5px 30px grey;"
        src="<?= img('API-1.png') ?>" alt="API">
    </div>
    <div class="rounded-top p-4" style="background-color: #E79057;margin-top: 120px;">
        <div class="container mt-5 mx-auto" style="width: 400px;">
            <p class="h1 text-center">
                <b>
                    Efficiency starts with the right tools
                </b>
            </p>
            <p class="h4 text-center">
                awgabgaowigbknxoaiwbfa
                iwbgoicoaibaigbknsaoiwanvoaiw
            </p>
            <div class="mt-4 mx-auto" style="width: 200px;">
                <button type="button" class="btn btn-dark rounded btn-lg" style="width: 200px;">Get Started Now</button>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>