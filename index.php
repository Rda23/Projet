<head>
   <link rel="stylesheet" href="style.css" />
   <title>Login</title>
</head>

<body>
   <nav>
      <h2>Accueil</h2>
      <ul>
         <li><a href="inscription.php">Inscription</a></li>
      </ul>
   </nav>

   <div class="box">
      <h2>Login</h2>
      <form action='login_verif.php' method="GET" class="case">
         Login: <input type="text" name="nom"/><br><br>
         MDP: <input type="text" name="motdepasse"/>
         <br><br>
         <input class="envoyer" type="submit" value="Connexion">
      </form>
      <form action='register.php' method="GET" >
         <input class="envoyer" type="submit" value="Créer un compte">
      </form>
   </div>
</body>
