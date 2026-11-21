<?php
$pageTitle = 'Inscription - AgriTech';
$currentPage = 'register';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php require_once __DIR__ . '/includes/head.php'; ?>
  </head>
  <body>
    <?php require_once __DIR__ . '/includes/navbar.php'; ?>

    <main class="small">
      <div class="auth-bg" aria-hidden="true">
        <svg width="0" height="0" style="position:absolute"><symbol id="leaf" viewBox="0 0 24 24"><path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.5 19 2c1 2 2 4.2 2 8 0 5.5-4.8 10-10 10Z"/></symbol></svg>
        <svg class="leaf gold" style="left:8%;animation-delay:0s;animation-duration:14s" viewBox="0 0 24 24" aria-hidden="true"><use href="#leaf"/></svg>
        <svg class="leaf green" style="left:30%;animation-delay:-5s;animation-duration:16s" viewBox="0 0 24 24" aria-hidden="true"><use href="#leaf"/></svg>
        <svg class="leaf gold" style="left:62%;animation-delay:-9s;animation-duration:13s" viewBox="0 0 24 24" aria-hidden="true"><use href="#leaf"/></svg>
        <svg class="leaf green" style="left:84%;animation-delay:-3s;animation-duration:15s" viewBox="0 0 24 24" aria-hidden="true"><use href="#leaf"/></svg>
      </div>
      <section class="auth-card">
        <h1>Inscription</h1>
        <p class="lead">Rejoignez la plateforme AgriTech.</p>
        <form action="login.php">
          <label>Nom complet <input type="text" name="nom" required></label>
          <label>Email <input type="email" name="email" required></label>
          <label>Mot de passe <input type="password" name="password" required></label>
          <label>Confirmer le mot de passe <input type="password" name="password2" required></label>
          <button type="submit">Créer le compte</button>
        </form>
        <p class="alt">Déjà inscrit ? <a href="login.php">Connexion</a></p>
      </section>
    </main>
    <?php require_once __DIR__ . '/includes/footer.php'; ?>
  </body>
</html>
