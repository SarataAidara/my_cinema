<div>
   <?php
      include "../affichageresumer/resumer2.php";
      ?>
</div>
<!DOCTYPE html>
<html lang ="fr">
   <head>
      <title>Cinéma</title>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="../recherche_par_prenom/my_cinema.css">
   </head>
   <body>
      <header>
         <nav>
            <ul class= nav__ul>
               <li class= nav__li><a class="nav__link" href="../rechercherpargenre/index.php">Recherche film par genre</a></li>
               <li class= nav__li><a class="nav__link" href="../recherchepardistrib/distrib2.php">Recherche film par distributeur</a></li>
               <li class= nav__li><a class="nav__link" href="../recherche_par_date/date1.php">Recherche film par date de projection</a></li>
               <li class= nav__li><a class="nav__link" href="../rechercher_par_titre/titre1.php">Recherche film par titre</a></li>
               <li class= nav__li><a class="nav__link" href="../recherche_par_nom/nom1.php">Recherche membre par nom</a></li>
               <li class= nav__li><a class="nav__link" href="../recherche_par_prenom/prenom1.php">Recherche membre par prénom</a></li>
               <li class= nav__li><a class="nav__link" href="../recherche_par_nom_et_prenom/completename.php">Recherche membre par nom et prénom </a></li>
               <li class= nav__li><a class="nav__link" href="../affichageresumer/resumer1.php">Afficher le resumé d'un film</a></li>
               <li class= nav__li><a class="nav__link" href="../Afficher_historique_membre/historique_membre1.php">Afficher l'historique d'un membre</a></li>
            </ul>
         </nav>
      </header>
      <h1> MY CINEMA </h1>
      <form method="post" action="prenom1.php">
         <p>
         <div id = "label">
            <label for="firstname"> Choisissez un prénom:</label><br/>
         </div>
         <input type="text" id="firstname" name="firstname" required
            minlength="1" maxlength="20" size="10">
         <input type="submit" name="prenom" value="Valider" />
         <input type="text" name="formulaire" class="none" value="filmspargenre">
         </p>
         <p>Selectionner le nombre de résultats:</p>
         <div>
            <input type="radio" id="5resultats" name="5resultats" value="5resultats"
               checked>
            <label for="5resultats">5 résultats</label>
         </div>
         <div>
            <input type="radio" id="10resultats" name="10resultats" value="10resultats">
            <label for="10resultats">10 résultats</label>
         </div>
         <div>
            <input type="radio" id="15resultats" name="15resultats" value="15resultats">
            <label for="15resultats"> 15 résultats</label>
         </div>
      </form>
      <h2> Information personnel du membre : </h2>
      <div>
         <?php
            include "../rechercherpargenre/genre3.php";
            ?>
      </div>
   </body>
</html>
