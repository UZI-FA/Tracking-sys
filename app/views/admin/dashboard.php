<?= view('templates/header') ?>

    <div class="mt-4 container">
        <div class="container bg-secondary row p-2">
          <div class="col-2">
            <img src="../imgs/android-logo.png" alt="logo" width="70px">
          </div>
          <div class="col">
            <p class="h2">Download Aplikasi Pemetaan Wifi</p>
            <button class="btn btn-primary">Download</button>
          </div>
        </div>

        <div class="container bg-light row p-2 rounded mt-3 border">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4843.912325800699!2d108.28238979619805!3d-6.407115092115543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1730884652939!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
<?= view('templates/footer') ?>