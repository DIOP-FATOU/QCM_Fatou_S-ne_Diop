<html>
    <head>
    
       <meta charset="utf-8">
       
        <link rel="stylesheet" href="../asset/css/projet2.css" media="screen" type="text/css" />
    </head>
    <body>
    <body>
    <div class ="container">
                <div class ="cadre">
                    <div id="titre1">
                    <img class="imgLogo" src="../asset/img/logo.png">
                        <h1>Le plaisir de jouer</h1>
                    <div id="titre2">
                          <h2>CREER ET PARAMETRER VOS QUIZZ</h2> 
                         <input class="submit" type="submit" value='Déconnexion' >
                        
                    </div> 
                    <div class="cadre2">
                    <h3>S'INSCRIRE</h3>
                    <h5>Pour proposer des quizz</h5>

                   <div >
                    <label for="firstname">Prenom<span class="blue"> <span></span></label>
                    <input class="Prénom" type="text" placeholder="Jooo" name="Prénom" required>
                 </div>  
                </br>
               
                <div >
                    <label for="name">nom<span class="blue"> <span></span></label>
                    <input class="Nom" type="Nom" placeholder="WWW" name="Nom" required>
                </div> 
                </br>
               
                <div >
                    <label for="Login">Login<span class="blue"> <span></span></label>
                    <input class="Login" type="Login" placeholder="jow" name="Login" required>
                </div> 
                </br>
                
                <div >
                    <label for=" Password"> Password<span class="blue"> <span></span></label>
                    <input class=" Password" type=" Password" placeholder=".........." name=" Password" required>
                </div> 
                </br>
                
                <div >
                    <label for="Confirmer Password">Confirmer Password<span class="blue"> <span></span></label>
                    <input class="Confirmer Password" type="Confirmer Password" placeholder=".........." name="Confirmer Password" required>
                </div> 
                </br>
               
               <h4>Avatar</h4>
               <input class="submit" type="submit" value='Choisir un fichier' >
               <input class="submit" type="submit" value='Créer compte' >
               </div> 
               <div >
        </div> 
                <?php
                include ('fonction.php');
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2){ 
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                }
                if(isset($_POST['valider'])){
                    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['pwd']) && !empty($_POST['login']) && !empty($_POST['conf_pass'])){ 
                    $nom=$_POST['nom'];
                    $prenom=$_POST['prenom'];
                    $pwd=$_POST['pwd'];
                    $login=$_POST['login'];
                    $conf_pass=$_POST['conf_pass'];
                    }
                }
                ?>
            </form>
        </div>
    </body>
</html>