<?php
if (!empty($_POST['deconnexion'])) {
    session_destroy();
    header('Location: ../index.php');

}
?>

<html>
    <head>
    
       <meta charset="utf-8">
       
        <link rel="stylesheet" href="../asset/css/projet3.css" media="screen" type="text/css" />
    </head>
    <body>
           <div class ="container">
                <div class ="cadre">
                    <div id="titre1">
                        <div class="logo">
                            <img class="imgLogo" src="../asset/img/logo.png">
                            <h1>Le plaisir de jouer</h1>
                        </div>         
                    </div>  
                    <div id="titre2">
                          page joueur
                          <form action="" method="post">
                          <input class="submit" type="submit" value='Déconnexion' name="deconnexion" >
                        </form>
                    </div>        
                </div>
            </div>   
    </body>
</html> 