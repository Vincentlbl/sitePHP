<?php include __DIR__ . '/partials/header.php'; ?>


<main>
    <h2>Catalogue</h2>
    <section class="product-grid">
        <?php foreach ($products as $product): ?>
            <div class="product">
                <a href="product.php">
                    <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <p><?= htmlspecialchars($product['name']) ?> - <?= number_format($product['price'], 2) ?>€</p>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
