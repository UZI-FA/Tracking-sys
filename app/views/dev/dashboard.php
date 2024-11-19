<?= view('templates/header') ?>

    <div class="mt-4 container border rounded">
      <div class="container mt-2">
        <h2>
          <strong id="api">API KEY : <?= $data['api_key'] ?></strong>
          <img src="<?= img('copy.png') ?>" alt="" width="20px" class="ms-2 mb-3" onmouseleave="tooltip()">
          <span class="tooltip" id="myTooltip">Copy to clipboard</span>
        </h2>
      </div>
      <div class="row mx-2">
        <div class="container bg-lightp-2 border rounded border col-9">
          <div class="mb-3">
            <label for="search" class="form-label">Cari : </label>
            <input type="text" class="form-control" id="search" placeholder="NIM/NIP">
          </div>
          <div class="mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4843.912325800699!2d108.28238979619805!3d-6.407115092115543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1730884652939!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
          </div>
        </div>
        <div class="col border rounded ms-2">
          Recent Search
        </div>
      </div>
    </div>

<?= view('templates/footer') ?>