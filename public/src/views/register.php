<?php include __DIR__ . '/partials/header.php'; ?>

<main>
    <h2>Inscription</h2>
    <form action="/register" method="POST">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">S'inscrire</button>
    </form>
    
    <?php if (!empty($error)): ?>
        <p class="error-message"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>
