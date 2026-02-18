<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Administration — REGIDESO</title>
</head>
<body>
    <div class="admin-header">
        <h1>Bienvenu sur la page d'administration</h1>
        <a href="logout.php" class="admin-logout">Déconnexion</a>
    </div>
</body>
</html>