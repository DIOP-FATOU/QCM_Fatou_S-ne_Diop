<?php
                include ('src/fonction.php');
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2){ 
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                }
                if(!empty($_POST['connexion'])){
                if(isset($_POST['password']) && isset($_POST['login'])){ 
                    $Password=$_POST['password'];
                    $Login=$_POST['login'];
                 if (verif($Login, $Password)) {
                   
                   if (role($Login, $Password)==1) {
                   header('Location: page/admin.php');
                   }
                   
                    else{ 
                    
                     header('Location: page/joueur.php'); 
                   
                 }
                }
            
                 else{
                     echo 'login ou mot de passe incorret ';
                 }
                    }
                }
               
            

                ?>
<html>

<head>

	<meta charset="utf-8">

	<link rel="stylesheet" href="asset/css/projet1.css" media="screen" type="text/css" />
</head>

<body>
	<div class="logo">

		<img class="imgLogo" src="asset/img/logo.png">


		<h2>Le plaisir de jouer</h2>
	</div>
	<div id="container">
		<div class="header_box">
			<h3>Login Form </h3>
		</div>

		<form action="" method="POST">

			</br>
			</br>
			<!-- <label><b>Nom d'utilisateur</b></label> -->
			<div>
				<input class="InputLogin" type="text" placeholder="Login" name="login" required>
			</div>
			</br>
			</br>
			<!--  <label><b>Mot de passe</b></label> -->
			<input class="InputPassword" type="password" placeholder="Password" name="password" required>
			</br>
			</br>
			<input class="submit" type="submit" value='connexion' name="connexion">
			<h4>S'inscrire pour jouer ?</h4>

		</form>
	</div>
</body>

</html>