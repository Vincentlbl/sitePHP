<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="site/public/assets/css/">

<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <h1>Bienvenue sur notre site e-commerce</h1>
    <p>Découvrez nos produits de qualité et nos offres spéciales !</p>

<!-- Section Carrousel -->
    <section class="carousel">
      <div class="carousel-track" id="carousel">
        <img src="/public/assets/images/andrey-zvyagintsev-2HCVNKMZtVk-unsplash.jpg " width="500px" alt="Produit 1"
          class="carousel-image">
        <img src="/public/assets/images/andrey-zvyagintsev-HiDFZMT8Z5s-unsplash.jpg" width="500px"alt="Produit 2"
          class="carousel-image">
        <img src="/public/assets/images//cesar-la-rosa-HbAddptme1Q-unsplash.jpg"width="500px" alt="Produit 3" class="carousel-image">

        <img src="/public/assets/images/cesar-la-rosa-HbAddptme1Q-unsplash.jpg" width="500px" alt="Produit 4" class="carousel-image">

        <img src="/public/assets/images//andrey-zvyagintsev-HiDFZMT8Z5s-unsplash.jpg" width="500px" alt="Produit 5" class="carousel-image">
      

      </div>



    </section>

    <script>
      const carousel = document.getElementById('carousel');
      let index = 0;

      function moveCarousel() {
        const images = document.querySelectorAll('.carousel-image');
        index++;
        if (index >= images.length) {
          index = 0;
        }
        const translateValue = -index * 100;
        carousel.style.transform = `translateX(${translateValue}%)`;
      }

      setInterval(moveCarousel, 3000);
    </script>
</main>



<?php include __DIR__ . '/partials/footer.php'; ?>
