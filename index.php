<?php
session_start();
				include ('src/fonction.php');
				$_SESSION['pageCourant']=1;
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
					if( $result=role($Login,$Password)){

						if($result=="admin"){
						//    $_SESSION['user']=user($login,$pwd);
					 
								  header("location:page/admin.php");
						   } 
							if($result=="jeux"){
									//   $_SESSION['user']=user($login,$pwd);
									  header("location:page/joueur.php");
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

	<link rel="stylesheet" href="asset/css/quizz.css" media="screen" type="text/css" />
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

		<form action="" method="POST" id="form-connexion">

			</br>
			</br>
			<!-- <label><b>Nom d'utilisateur</b></label> -->
			<div>
				<input class="InputLogin" type="text" error="error-1" placeholder="Login" name="login" required>
				<div class="error-form" id=error-1></div>
			</div>
			</br>
			</br>
			<!--  <label><b>Mot de passe</b></label> -->
			<input class="InputPassword" type="password" error="error-2" placeholder="Password" name="password" required>
			<div class="error-form" id=error-2></div>
			</br>
			</br>
			<input class="submit" type="submit" value='connexion' name="connexion">
			<h4>S'inscrire pour jouer ?</h4>

		</form>
	</div>
</body>

</html>
<script>
const inputs= document.getElementsByTagName("input");
for(input of inputs){
	input.addEventListener("keyup",function(e)){
		if(e.target.hasAttribute("error")){
			var idDivError=e.target.getAttribute("error");
			document.getElementById(idDivError).innerTexte=""
		}
	}
}

document.getElementById("form-connexion ").addEventListener("submit",function(e)){
// verification des champs input
const inputs= document.getElementsByTagName("input");
var error=false;
	for(input of inputs){
		if(input.hasAttribute("error")){
			var idDivError=input.getAttribute("error");
			if(!input.value){
				document.getElementById(idDivError).innerTexte="ce champ est obligatoire"
			}
			error= true
		}
	})
}

</script>