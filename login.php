<?php
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'pass'){
        $_SESSION['admin'] = $username;
        $_SESSION['password'] = $password;
        if(isset($_SESSION['admin'])){
            header('Location: admin.php');
            exit();       
     }
        else{
            echo 'user is not set';
        }
        
    }else{
        $error_message='Invalid username or password';
    }

}
?>
<?php include 'includes/header.php';?>

<main class="main-content">
    <div class="container">
        <?php if(isset($error_message)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>

        <form action="" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur" required>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            <button type="submit" name="submit">Se connecter</button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php';?>
