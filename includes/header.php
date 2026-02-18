<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>REGIDESO BURUNDI</title>
</head>
<body>
   <header class="main-header">
    <div class="container banner-content">
        <div class="logo">
            <img src="assets/image/regideso.jpg" alt="Logo REGIDESO">
        </div>

        <div class="header-text">
            <h1 class="red-title">REGIDESO BURUNDI</h1>
            <div class="separator"></div>
            <p class="blue-sub">Régie de Production et de Distribution d'Eau Et d'Electricité du Burundi</p>
        </div>

        <div class="flag">
            <img src="assets/image/burundi.png" alt="Drapeau Burundi">
        </div>
    </div>
</header>

<nav class="black-nav">
    <div class="container">
        <button class="hamburger" id="hamburger" aria-label="Menu" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul id="nav-menu">
            <li><a href="index.php" class="active">ACCUEIL</a></li>
            <li><a href="login.php">CONNEXION</a></li>
        </ul>
    </div>
</nav>

<script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');

    hamburger.addEventListener('click', function () {
        const isOpen = navMenu.classList.toggle('nav-open');
        hamburger.classList.toggle('open', isOpen);
        hamburger.setAttribute('aria-expanded', isOpen);
    });

    // Fermer le menu quand on clique sur un lien
    navMenu.querySelectorAll('a').forEach(function(link) {
        link.addEventListener('click', function() {
            navMenu.classList.remove('nav-open');
            hamburger.classList.remove('open');
            hamburger.setAttribute('aria-expanded', 'false');
        });
    });
</script>