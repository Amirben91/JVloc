<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css" />
    <title>Se connecter</title>
</head>
<body>
<?php
require('config.php');
session_start();

if (isset($_POST['username'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE LOWER(username)='".strtolower($username)."'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            echo "<p>Connexion réussie.</p>";
            header("Location: index1.php");
            exit;
        } else {
            $message = "Nom d'utilisateur ou mot de passe incorrect.";
        }
    } else {
        $message = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

?>
<form class="box" action="" method="post" name="login">
    <h1 class="box-title">Connexion</h1>
    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion" name="submit" class="box-button">
    <p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
    <p class="box-register">Accueil<a href="index1.php">Acceuil</a></p>
    <?php if (! empty($message)) { ?>
        <p class="errorMessage"><?php echo $message; ?></p>
    <?php } ?>
</form>
</body>
</html>