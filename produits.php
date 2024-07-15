<head>
   <link rel="stylesheet" href="produits.css" />
   <title>Produits</title>
</head>

 <?php
   
 ?>
<body>
   <nav>
      <h2>Produits</h2>
      <ul>
         <li><a href="index.php">Déconnexion</a></li>
      </ul>
   </nav>

   <?php
   $medicament = array(
      "nom" => "Doliprane",
      "prix" => 14,
      "quantite" => 16,
      "date" => "17/06/2024",
      "photo" => "https://www.pharmashopi.com/images/Image/doliprane-1000mg-effervescent-1372663055.png"
      
   );
   ?>
   <table class="tableau"> 
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Date d'ajout</th>
            <th>Photo</th>
            <?php
                if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] == 0) {
                    echo "<th>Action</th>";
                }
            ?>
        </tr>
    </thead>
    <tbody class="tableau">
      <tr>
      <?php
      echo "<td class='tableau'>" . $medicament["nom"] . "</td>";
      echo "<td class='tableau'>" . $medicament["prix"] . "</td>";
      echo "<td class='tableau'>" . $medicament["quantite"] . "</td>";
      echo "<td class='tableau'>" . $medicament["date"] . "</td>";
      echo "<td class='tableau'>" . $medicament["photo"] . "</td>";
      ?>
      </tr>
   </tbody>
</table>

<div class="button">
<a href="nouveau.php" class="nouveau">Nouveau produit</a></li>
</div>

    
</body>
