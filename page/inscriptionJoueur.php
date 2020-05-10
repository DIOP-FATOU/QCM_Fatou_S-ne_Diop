<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../asset/css/joueur.css" type="text/css" />
</head>

<body>

	<div class="container">
		<div class="cadre">
			<div id="titre1">
				<img class="imgLogo" src="../asset/img/logo.png">
				<h1>Le plaisir de jouer</h1>
			</div>
			<div id="titre2">
				<h2>CREER ET PARAMETRER VOS QUIZZ</h2>
				<input class="Déconnexion" type="submit" value='Déconnexion'>

			</div>
			<div class="cadre1">
                <div class="userImg"></div>
                <ul>
                        <li><a href="#listesQuestions">Listes des Questions</a></li>
                        <label id="img2" for=""><img class="img2" src="../asset/img/img1.png" alt=""></label>
                        <li><a href="#créerAdmin">Créer Admin</a></li>
                        <label id="img2" for=""> <img class="img1" src="../asset/img/img4.png" alt=""></label>
                        <li><a href="#listesJoueurs">Listes Joueurs</a></li>
                        <label id="img2" for=""><img class="img2" src="../asset/img/img1.png" alt=""></label>
                        <li><a href="#créerQuestions">Créer Questions</a></li>
                        <label id="img2" for=""> <img class="img1" src="../asset/img/img4.png" alt=""></label>
                    </ul>
			</div>

			<div class="cadre2">
				<div class="content">
					<div class="NouveauJoueur">
						<div class="InscriptionJoueur">
							S'inscrire
						</div>
						<div class="Textejoueur">
							Pour tester votre niveau de culture générale
						</div>
						<hr class="hr">
						<form name="myForm" class="adminAdd" method="POST" onsubmit=" return isEmpty();" enctype="multipart/form-data">
							<label class="labelJoueur" for="prenom">Prénom</label>
							<input class="inputJoueur" type="text" name="prenom">

							<label class="labelJoueur" for="nom">Nom</label>
							<input class="inputJoueur" type="text" id="nom" name="nom" value="">

							<label class="labelJoueur" for="login">Login</label>
							<input class="inputJoueur" type="text" id="login" name="login" value="">

							<label class="labelJoueur" for="password">Password</label>

							<span id="errorPassword" class="error"></span>
							<input class="inputJoueur" type="password" id="password" name="password">
							<label class="labelJoueur" for="cpassword">Confirm password</label>
							<input class="inputJoueur" type="password" id="cpassword" name="cpassword" value=""> Avatar
							<input class="inputfile" type="file" id="file" name="file" onchange="previewFile()" accept=".jpeg, .png">
							<input onclick="return isEmpty()" type="submit" name="submit" class="buttonValider" value="Créer compte">
						</form>
						<img class="Imgjoueur" src="" alt="user">
						<div class="Avatar">avatar du joueur</div>
					</div>
				</div>
			</div>
        </div>
   </div>
</body>

</html>