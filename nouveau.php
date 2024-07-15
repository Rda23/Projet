<head>
   <link rel="stylesheet" href="style.css" />
   <title>Nouveau produit</title>
</head>

<body>
   <nav>
      <h2>Nouveau produit</h2>
      <ul>
         <li><a href="produits.php">Produits</a></li>
        <li><a href="index.php">Déconnexion</a></li>
      </ul>
   </nav>


   <div class="box">
      <form action='verif.php' method="POST" class="case" >
         Nom : <input type="text" name="nom"/>
         prix : <input type="text" name="prix"/>
         quantité : <input type="text" name="quantite"/>
         date d'ajout : <input type="text" name="datedajout"/>
         date de modification : <input type="text" name="datedemodif"/>
         photo : <input type="text" name="photo"/>
         <br><br>
         <input class="envoyer" type="submit" value="Enregistrer">
      </form>
   </div>
</body>
