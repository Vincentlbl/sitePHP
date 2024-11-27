<?php include __DIR__ . '/partials/header.php'; ?>

<main class="product-detail">
    <div class="product-container">
        <img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="product-image">
        <div class="product-info">
            <h2><?= htmlspecialchars($product['name']) ?></h2>
            <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
            <p class="product-price">Prix : <?= number_format($product['price'], 2) ?>€</p>
            <form action="/cart/add" method="POST">
                <input type="hidden" name="product_id" value="<?= htmlspecialchars($product['id']) ?>">
                <button type="submit" class="add-to-cart">Ajouter au panier</button>