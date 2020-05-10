<?php

$p=isset($_GET['p'])?$_GET['p']:'listesJoueur';
?>
<html>
    <head>
    
       <meta charset="utf-8">
      
        <link rel="stylesheet" href="../asset/css/admin.css" media="screen" type="text/css" />
    </head>
    <body>
           <div class ="container">
                <div class ="cadre">
                    <div id="titre1">
                        <div class="logo">
                            <img class="imgLogo"src="../asset/img/logo.png">
                            <h1>Le plaisir de jouer</h1>
                        </div>         
                    </div>  
                    <div id="titre2">
                          <h2>CREER ET PARAMETRER VOS QUIZZ</h2> 
                        <input class="submit" type="submit" value='Déconnexion'>
                        
                    </div> 
                  <div class "cadre1-2">
            
                    <div class="cadre1">
                   <img  class="userImg">
                    
                   <ul>
                        <li><a href="?p=listesDesQuestion">Listes des Questions</a></li>
                        <label id="img2" for=""><img class="img2" src="../asset/img/img1.png" alt=""></label>
                        <li><a href="?p=creerAdmin">Créer Admin</a></li>
                        <label id="img2" for=""> <img class="img1" src="../asset/img/img4.png" alt=""></label>
                        <li><a href="?p=listesJoueur">Listes Joueurs</a></li>
                        <label id="img2" for=""><img class="img2" src="../asset/img/img1.png" alt=""></label>
                        <li><a href="?p=creerQuestions">Créer Questions</a></li>
                        <label id="img2" for=""> <img class="img1" src="../asset/img/img4.png" alt=""></label>
                    </ul>
                    </div> 
                    
                    <div class="cadre2">
                    
                    <div class="cadreTtableau">
                    <!-- <div class="admin">  -->
                     <?php
                     require_once ("$p.php"); 
                     ?>
                     </div>
                     </div>
                       
                     </div>
                  
                    </div>
                    </div>
                   
                </div>
            </div>   
    </body>
</html> 