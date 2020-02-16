<div>
   <?php
      include "../affichageresumer/resumer2.php";
      $distrib = distrib();
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
      <form method="post" action="distrib2.php">
         <p>
            <label for="distrib"> Rechercher films par distributeur </label><br />
         <div id = "select">
            <select name="distrib" id="distrib">
            <?php 
               foreach ($distrib as $key => $value) {
                   echo "<option value=" . $value['id_distrib'] . ">" . $value['nom'] . "</option>";
               }
               
               ?>
            </select>
         </div>
         <input type="submit" value="Valider" />
         <input type="text" name="formulaire" class="none" value="filmspargenre">
         </p>
         <p>Selectionner le nombre de résultats:</p>
         <div>
            <input type="radio" id="resultats5" name="resultats5" value="resultats5"
               checked>
            <label for="resultats5">5 résultats</label>
         </div>
         <div>
            <input type="radio" id="resultats10" name="resultats10" value="resultats10">
            <label for="resultats10">10 résultats</label>
         </div>
         <div>
            <input type="radio" id="resultats15" name="resultats15" value="resultats15">
            <label for="resultats15"> 15 résultats</label>
         </div>
      </form>
      <h2> Films disponibles : </h2>
      <div>
         <?php
            include "../rechercherpargenre/genre3.php";
            ?>
      </div>
      </div>
   </body>
</html>