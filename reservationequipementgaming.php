<!DOCTYPE html>
<html>
  <head>
    <title>Reservation d'equipements</title>
    <link rel="stylesheet" type="text/css" href="reservationequipementgaming.css">
  </head>
  <header>
    <?php include 'navbarre.html'; ?>
  </header>
  <body>
    <h1>Reservation d'equipements</h1>
    <form>
      <div class="form-group">
        <label for="equipement">Equipement :</label>
        <select id="equipement" name="equipement">
          <option value="manette">Manette</option>
          <option value="clavier">Clavier</option>
          <option value="souris">Souris</option>
          <option value="ecran">Ecran</option>
          <option value="casque">Casque gaming</option>
        </select>
      </div>
      <div class="form-group">
        <label for="date-retour">Date de retour :</label>
        <input type="date" id="date-retour" name="date-retour">
      </div>
      <div class="form-group">
        <input type="submit" value="Reserver">
      </div>
    </form>
  </body>
</html>
