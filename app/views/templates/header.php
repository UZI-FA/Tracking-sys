<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="icon" href="<?=img('logo_proyek1.png')?>" type="image/icon type">
    <link rel="stylesheet" href="<?= asset('bootstrap-5.3.3-dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('style.css') ?>">
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
                <ul class="navbar-nav me-auto mx-auto mb-2 mb-lg-0">
                  <li class="nav-item px-4">
                    <a class="nav-link active" aria-current="page" href="<?= url('admin') ?>">Dashboard</a>
                  </li>
                  <?= SESSION::get('role')=='admin' ? 
                  '<li class="nav-item px-4">
                    <a class="nav-link active" aria-current="page" href="'. url('admin/kelola') .'">Kelola</a>
                  </li>' 
                  : ''?>
                </ul>
                <!-- <p class="text-end">End aligned text on all viewport sizes.</p> -->
                <?= SESSION::has('id') ? 
                '<a href="'.url('auth/logout').'" class="btn btn-danger " type="submit">Logout</a>' : 
                '<a href="'.url('auth').'" class="btn btn-danger " type="submit">Login</a>'?>
              </div>
            </div>
          </nav>
    </header>