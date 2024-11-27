<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <h2>Votre panier</h2>
    <?php if (!empty($cart)): ?>
        <table>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Quantité</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td><?= number_format($item['price'], 2) ?>€</td>
                        <td><?= htmlspecialchars($item['quantity']) ?></td>
                        <td><?= number_format($item['price'] * $item['quantity'], 2) ?>€</td>
                        <td>
                            <a href="/cart/remove?id=<?= $item['id'] ?>" class="remove-button">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/checkout" class="checkout-button">Passer à la caisse</a>
    <?php else: ?>
        <p>Votre panier est vide.</p>
    <?php endif; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
