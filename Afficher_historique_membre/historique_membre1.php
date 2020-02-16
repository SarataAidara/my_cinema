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
      <form method="post" action="historique_membre1.php">
         <p>
         <div id = "label">
            <label for="historique"> Choisissez un membre :</label><br/>
         </div>
         <label class = "membre" for="historique1"> Nom : </label>      
         <input type="text" id="historique1" name="historique1" required
            minlength="1" maxlength="20" size="10">
         <label class = "membre"  for="historique2"> Prénom : </label>      
         <input type="text" id="historique2" name="historique2" required
            minlength="1" maxlength="20" size="10">
         <input type="submit" name="historiquemembre" value="Valider" />
         <input type="text" name="formulaire" class="none" value="afficherhistorique">
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
      <h2> Historique du membre : </h2>
      <div>
         <?php
            include "../rechercherpargenre/genre3.php";
            ?>
      </div>
   </body>
</html>