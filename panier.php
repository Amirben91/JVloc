<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
  </head>
  <body>
    <h1>Mon Panier</h1>
    <table id="cart">
      <thead>
        <tr>
          <th>Article</th>
          <th>Prix</th>
          <th>Quantité</th>
          <th>Supprimer</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <br><br>
    <button id="clear-cart">Vider le panier</button>
    <script>
      const cart = [];

      // Ajouter un article au panier
      function addToCart(name, price) {
        const item = { name, price, quantity: 1 };
        let found = false;

        for (let i in cart) {
          if (cart[i].name === item.name) {
            cart[i].quantity++;
            found = true;
            break;
          }
        }

        if (!found) {
          cart.push(item);
        }

        updateCart();
      }

      // Supprimer un article du panier
      function removeFromCart(name) {
        for (let i in cart) {
          if (cart[i].name === name) {
            cart.splice(i, 1);
            break;
          }
        }

        updateCart();
      }

      // Vider le panier
      function clearCart() {
        cart.length = 0;
        updateCart();
      }

      // Mettre à jour l'affichage du panier
      function updateCart() {
        const tbody = document.querySelector("#cart tbody");
        tbody.innerHTML = "";

        for (let i in cart) {
          const item = cart[i];
          const row = `
            <tr>
              <td>${item.name}</td>
              <td>${item.price}</td>
              <td>${item.quantity}</td>
              <td><button onclick="removeFromCart('${item.name}')">Supprimer</button></td>
            </tr>
          `;
          tbody.innerHTML += row;
        }
      }

      // Ajouter des écouteurs d'événements
      document.querySelector("#clear-cart").addEventListener("click", clearCart);
    </script>
  </body>
</html>
