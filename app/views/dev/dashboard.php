<?= view('templates/header') ?>

    <div class="mt-4 container border rounded">
      <div class="container mt-2">
        <h2>
          <strong id="api">API KEY : <?= $data['user']['api_key'] ?></strong>
          <img src="<?= img('copy.png') ?>" alt="" width="20px" class="ms-2 mb-3" onmouseleave="tooltip()">
          <span class="tooltip" id="myTooltip">Copy to clipboard</span>
        </h2>
      </div>
      <div class="row mx-2">
        <div class="container bg-lightp-2 border rounded border col-9">
          <div class="mb-3 mt-3 search-container">
            <form action="<?= url('dev') ?>" method="post" class="row g-3 search-box" autocomplete="off">
              <label for="search" class="form-label mb-0 mt-2">Cari User: </label>
              <div class="col-10">
                <input name="nama" type="text" class="form-control" id="search-input" placeholder="Nama">
                <div id="autocomplete-box" class="autocomplete-box"></div>
              </div>
              <div class="col-2">
                <button type="submit" class="mt-1 btn btn-primary">Cari</button>
              </div>
            </form>
          </div>
          <div class="mx-auto">
            <?php
              if(empty($data['target'])){
            ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4843.912325800699!2d108.28238979619805!3d-6.407115092115543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1730884652939!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <?php
              }else{
            ?>
            <iframe src="https://www.google.com/maps/embed/v1/place?q=<?= $data['target']['Longitude'].','.$data['target']['Latitude'] ?>&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            <?php
              }
            ?>
            
          </div>
        </div>
        <div class="col border rounded ms-2">
          Recent Search
        </div>
      </div>
    </div>
    
    <script>
      const searchInput = document.getElementById("search-input");
      const autocompleteBox = document.getElementById("autocomplete-box");
      
      // Daftar kata kunci contoh
      const suggestions = [
        <?php
          foreach ($data['users'] as $value) {
            echo '"'.$value['nama'].'",';
          }
          // "Apple", "Android", "Amazon", "Asus", 
          // "Bing", "Bluetooth", "Browser", "Bitcoin",
          // "ChatGPT", "Chrome", "Cloud", "Computer"
        ?>  
      ];
      
      // Fungsi untuk membuat elemen autocomplete
      function showSuggestions(keyword) {
          autocompleteBox.innerHTML = "";
          if (keyword.length === 0) {
              autocompleteBox.style.display = "none";
              return;
          }
      
          const filtered = suggestions.filter(item =>
              item.toLowerCase().includes(keyword.toLowerCase())
          );
      
          if (filtered.length === 0) {
              autocompleteBox.style.display = "none";
              return;
          }
      
          filtered.forEach(item => {
              const listItem = document.createElement("div");
              listItem.className = "autocomplete-item";
              listItem.innerHTML = highlightMatch(item, keyword);
              listItem.addEventListener("click", () => {
                  searchInput.value = item;
                  autocompleteBox.style.display = "none";
              });
              autocompleteBox.appendChild(listItem);
          });
      
          autocompleteBox.style.display = "block";
      }
      
      // Fungsi untuk menyorot teks yang cocok
      function highlightMatch(text, keyword) {
          const regex = new RegExp(`(${keyword})`, "gi");
          return text.replace(regex, '<span class="highlight">$1</span>');
      }
      
      // Event listener untuk input
      searchInput.addEventListener("input", () => {
          showSuggestions(searchInput.value);
      });
    </script>
<?= view('templates/footer') ?>