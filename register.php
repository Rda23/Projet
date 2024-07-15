<head>
   <link rel="stylesheet" href="style.css" />
   <title>Inscription</title>
</head>

<body>
   <nav>
      <h2>Accueil</h2>
      <ul>
         <li><a href="index.php">Connexion</a></li>
      </ul>
   </nav>


   <div class="box">
      <h2>Inscription</h2>
      <form action='register_verif.php' method="POST">
            <div class="case">
                <label for="login">Login:</label>
                <input type="text" id="login" name="login" required />
            </div>
            <div class="case">
                <label for="mail">Mail:</label>
                <input type="email" id="mail" name="mail" required />
            </div>
            <div class="case">
                <label for="motdepasse">MDP:</label>
                <input type="password" id="motdepasse" name="motdepasse" required />
            </div>
            <input class="envoyer" type="submit" value="Envoyer">
        </form>
   </div>
</body>
