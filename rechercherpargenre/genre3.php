<?php

if (isset($_POST['formulaire'])) { 


    if (isset($_POST['genre'])){

         genre(); 
        
    }

    if (isset($_POST['title'])){

            title();
                
    }

    if (isset($_POST['resum'])){

                allfromfilm(); 
                
    }

    if (isset($_POST['historique1']) && isset($_POST['historique2'])){

        historique();
    }

    if (isset($_POST['date1']) && isset($_POST['date2'])){

        datefilm();
    }

    if (isset($_POST['name'])){

        name();

    }


    if (isset($_POST['firstname'])){

        firstname();
                
    }

    if (isset($_POST['distrib'])){

        allfromdistrib(); 
                
    }

    if (isset($_POST['formulaire'])) { 


        if (isset($_POST['fullname1']) && isset($_POST['fullname2'])){

            fullname();
        }
    }

}

?> 