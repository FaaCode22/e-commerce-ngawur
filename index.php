<?php include 'data/products.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GameStore LYNK</title>
  <link rel="stylesheet" href="style.css" />

 
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
</head>
<body>


  <nav class="navbar">
    <img src="assets/logo.png" alt="Logo" class="logo" />
    <h1 class="site-title">𝓕𝓪𝓪 𝓟𝓻𝓮𝓶𝓲𝓾𝓶 𝓢𝓽𝓸𝓻𝓮</h1>
  </nav>



  <div class="swiper banner-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="assets/banners/banner1.png" /></div>
      <div class="swiper-slide"><img src="assets/banners/banner22.png" /></div>
      <div class="swiper-slide"><img src="assets/banners/banner3.gif" /></div>
    </div>
  </div>


    <div class="kategori-list">
    <button class="kategori-btn active" data-kategori="all">Semua</button>
    <button class="kategori-btn" data-kategori="APP">APP</button>
    <button class="kategori-btn" data-kategori="BIMBINGAN">BIMBINGAN</button>
    <button class="kategori-btn" data-kategori="Voucher">Voucher</button>
  </div>


  <div class="produk-grid">
    <?php foreach ($products as $produk): ?>
      <div class="produk" data-kategori="<?= $produk['category']; ?>">
        <div class="nama-produk"><?= $produk['name']; ?></div>
        <div class="harga-produk"><?= $produk['price']; ?></div>
        <a href="<?= $produk['link']; ?>" target="_blank">
          <img src="<?= $produk['image']; ?>" alt="<?= $produk['name']; ?>" />
        </a>
      </div>
    <?php endforeach; ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper(".banner-swiper", {
      loop: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      speed: 800,
      grabCursor: true,
      spaceBetween: 20,
      slidesPerView: "auto",
    });
  </script>
 

  <script>
    const kategoriButtons = document.querySelectorAll(".kategori-btn");
    const produkItems = document.querySelectorAll(".produk");

    kategoriButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        kategoriButtons.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        const kategori = btn.getAttribute("data-kategori");

        produkItems.forEach(item => {
          const itemKategori = item.getAttribute("data-kategori");
          if (kategori === "all" || kategori === itemKategori) {
            item.style.display = "block";
          } else {
            item.style.display = "none";
          }
        });
      });
    });
  </script>

</body>
</html>
