<?php

function base(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponnible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query('SELECT * FROM genre');
    
    return $dataArray = $req->fetchAll(PDO:: FETCH_ASSOC);
}

$base = base();

function genre(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT titre FROM film WHERE id_genre = " . $_POST['genre']);
    $dataArray = $req->fetchAll( PDO::FETCH_COLUMN);

    foreach($dataArray as $key => $values){
        echo '<div>' . "Titre : " . $values . '</div>' . "<br>";
    }
}

function distrib(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponnible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query('SELECT * FROM distrib');
    
    return $dataArray = $req->fetchAll(PDO:: FETCH_ASSOC);
}

function fullname(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT * FROM fiche_personne WHERE nom LIKE '" . $_POST['fullname1'] . "' AND prenom LIKE '" . $_POST['fullname2'] . "'");
    $dataArray = $req->fetchAll( PDO::FETCH_BOTH);

    foreach($dataArray as $key => $values){
        echo $values["nom"]. "<br>" . $values["prenom"] . "<br>" . $values["date_naissance"] . "<br>" . $values["email"] . "<br/>" . $values["cpostal"] . "<br/>" . $values["ville"] . "<br/>" . "<br/>";
    }
}

function allfromdistrib(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT titre FROM film WHERE id_distrib = " . $_POST['distrib']);
    $dataArray = $req->fetchAll( PDO::FETCH_COLUMN);

    foreach($dataArray as $key => $values){
        echo "Titre : " .  $values . "<br>";
    }
}

function film(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponnible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query('SELECT * FROM film');
    
    return $dataArray = $req->fetchAll(PDO:: FETCH_ASSOC);
}

function allfromfilm(){
    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT resum FROM film WHERE id_film = " . $_POST['resum']);
    $dataArray = $req->fetchAll( PDO::FETCH_COLUMN);

    foreach($dataArray as $key => $values){
        echo "Résumé : " .$values . "<br>" . "<br>";
    }
}

function title(){

    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT * FROM film WHERE titre LIKE '" . "%" . $_POST['title'] . "%" . "'");
    $dataArray = $req->fetchAll( PDO::FETCH_BOTH);

    foreach($dataArray as $key => $values){
        echo 'Titre : ' . $values["titre"] . "<br/>" . "<br/>" . "Résumé : " 
                        . $values["resum"] . "<br/>" . "<br/>" . "Date de sortie : " 
                        . $values["date_debut_affiche"] . "<br/>" . "<br/>" . "Dernière diffusion : " 
                        . $values["date_fin_affiche"] . "<br/>" . "<br/>" . "Durée du film : " 
                        . $values["duree_min"] . " minutes" . "<br/>" . "<br/>" . "Année de production : " 
                        . $values["annee_prod"] . "<br/>" ."<br/>" ."<br/>" ."<br/>";
    }
}

function historique(){

    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT *  FROM historique_membre 
                       INNER JOIN film ON historique_membre.id_film = film.id_film 
                       INNER JOIN fiche_personne ON historique_membre.id_membre = fiche_personne.id_perso 
                       WHERE fiche_personne.prenom  = '" . $_POST['historique2'] . "' 
                       AND fiche_personne.nom  = '" . $_POST['historique1'] . "'");
    $dataArray = $req->fetchAll( PDO::FETCH_BOTH);

    foreach($dataArray as $key => $values){
        echo "Historique de films vus -> " . $values["titre"]. " film vu le " . $values['date'] . "<br>"  . "<br>";
    }
}

function datefilm(){

    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT * FROM film WHERE date_debut_affiche BETWEEN \"" . $_POST['date1'] . "\" AND \"" . $_POST['date2'] ."\"");
    
    while ($dataArray = $req->fetch()){
        echo "Titre : " . $dataArray["titre"] . "<br>" .  "<br>";
    }

    return $dataArray = $req->fetchAll(PDO:: FETCH_ASSOC);
}

function name(){

    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT * FROM fiche_personne WHERE nom LIKE '" . "%" . $_POST['name'] . "%" . "'");
    $dataArray = $req->fetchAll( PDO::FETCH_BOTH);

    foreach($dataArray as $key => $values){
        echo "Nom : " . $values["nom"]. "<br>" . "Prénom : " 
                      . $values["prenom"] . "<br>" . "Date de naissance : " 
                      . $values["date_naissance"] . "<br>" . "Email : " 
                      . $values["email"] . "<br/>" . "Code postal : " 
                      . $values["cpostal"] . "<br/>" . "Ville : " 
                      . $values["ville"] . "<br/>" . "<br/>";
    }
        
}

function firstname(){

    try{
        $DB = new PDO('mysql:host=localhost;dbname=epitech_tp;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //initialise le PDO
    }
    
    catch(PDOException $e){
        echo "La base de donnée est indisponible, merci de réesayer ulterieurement"; //Verifie la bonne connection à la base de  donnée
    }

    $req = $DB->query("SELECT * FROM fiche_personne WHERE prenom LIKE '" . "%". $_POST['firstname'] . "%" . "'");
    $dataArray = $req->fetchAll( PDO::FETCH_BOTH);

    foreach($dataArray as $key => $values){
        echo "Nom : " . $values["nom"]. "<br>" . "Prénom : " 
                      . $values["prenom"] . "<br>" . "Date de naissance : " 
                      . $values["date_naissance"] . "<br>" . "Email : " 
                      . $values["email"] . "<br/>" . "Code postal : " 
                      . $values["cpostal"] . "<br/>" . "Ville : " 
                      . $values["ville"] . "<br/>" . "<br/>";
    }
}

?>