<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="index.css" />
<title>S'inscrire</title>
</head>
<body>
<?php
require('config.php');

if (isset($_POST['submit'])) {
    $username = stripslashes($_POST['username']);
    $username = mysqli_real_escape_string($conn, $username);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($conn, $email);
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn, $password);
    $confirm_password = stripslashes($_POST['confirm_password']);
    $confirm_password = mysqli_real_escape_string($conn, $confirm_password);

    // Vérification du mot de passe avec une expression régulière
    if (!preg_match("/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$/", $password)) {
        echo "<div class='error'>
             <h3>Le mot de passe doit contenir au moins une majuscule, un chiffre et un signe de ponctuation.</h3>
             </div>";
    } elseif ($password != $confirm_password) {
       echo "<div class='error'>
           <h3>Les deux mots de passe ne correspondent pas.</h3>
           </div>";
    } else {
        $query = "INSERT into `users` (username, email, password)
          VALUES ('$username', '$email', '".password_hash($password, PASSWORD_DEFAULT)."')";

    
        $res = mysqli_query($conn, $query);
        if ($res) {
            echo "<div class='sucess'>
                 <h3>Vous êtes inscrit avec succès.</h3>
                 <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
             </div>";
        } else {
            echo "<div class='error'>
                 <h3>Une erreur s'est produite lors de l'inscription.</h3>
                 </div>";
        }
    }
}
    
?>
<form class="box" action="" method="post">
    
<h1 class="box-title">S'inscrire</h1>
    
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
    
<input type="text" class="box-input" name="email" placeholder="Email" required />
    
<input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    
<input type="password" class="box-input" name="confirm_password" placeholder="Confirmer le mot de passe" required />
    
<input type="submit" name="submit" value="S'inscrire" class="box-button" />
    
<p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
    
</form>
</body>
</html>