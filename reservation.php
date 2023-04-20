<!DOCTYPE html>
<html lang="en">
  <link rel="stylesheet" href="reservation.css">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Réservation de jeu vidéo</title>
  <link rel="stylesheet" href="style.css">
  <?php include 'navbarre.html'; ?>
</head>
<body>
  <header>
    <h1>Réservation de jeu vidéo</h1>
  </header>

  <main>
    <form action="submit.php" method="post">
      <div>
        <label for="game">Jeu vidéo :</label>
        <select id="game" name="game">
          <option value="god-of-war">God of War</option>
          <option value="fifa-23">FIFA 23</option>
          <option value="assassins-creed-valhalla">Assassin's Creed Valhalla</option>
          <option value="fifa-23">Call of Duty : Modern Warfare 2 (2022)</option>
          <option value="fifa-23">Overwatch 2</option>
          <option value="fifa-23">Red Dead Redemption 2</option>
          <option value="fifa-23">Horizon Forbidden West </option>
          <option value="fifa-23">One Piece Odyssey</option>
          <option value="fifa-23">NBA 2K23</option>
        </select>
      </div>
      <div>
        <label for="start-date">Date de début :</label>
        <input type="date" id="start-date" name="start-date">
      </div>
      <div>
        <label for="return-date">Date de retour :</label>
        <input type="date" id="return-date" name="return-date">
      </div>
      <button type="submit">Réserver</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2023 - Tous droits réservés</p>
  </footer>
</body>
</html>
