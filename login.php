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
<div style="color: red; text-align: center; margin-top: 20px;">
    <?php if(isset($error_message)) echo $error_message; ?>
</div>

   <form action="" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit" name="submit">login</button>
   </form>
<?php include 'includes/footer.php';?>
