<?php
	// Initialiser la session
	session_start();
	
	// Détruire la session.
	if(session_destroy())
	{
		// Redirection vers la page de connexion
		header("Location: index1.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Se déconnecter</title>
</head>
<body>

</body>
</html>