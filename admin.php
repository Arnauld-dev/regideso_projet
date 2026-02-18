<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background-color: #1a1a1a; color: white;">
        <h1>Bienvenu sur la page d'administration</h1>
        <a href="logout.php" style="color: white; text-decoration: none; font-size: 1.2rem; margin-right: 20px; margin-left: 20px;">deconnexion</a>
    </div>
    
</body>
</html>