<?php
                                           
$tab = file_get_contents('../asset/json/lister.json');

     $objet = json_decode($tab, true);
   

    $temp=array();
//permet de ranger le score par ordre croissant                          
for ($i=0; $i < count($objet); $i++)
{ 
    for ($j=0; $j <$i ; $j++)
    { 
        if($objet[$i]['score']>$objet[$j]['score'])
        {
            $temp=$objet[$i];
            $objet[$i]=$objet[$j];
        $objet[$j]=$temp;
        }
    }
}

if(isset($objet))
{
    $total=sizeof($objet);
    $col=1;
    $lign=15;
    $elePag=($col*$lign);
    $nbrPage=ceil($total/$elePag);
    if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
    {
        $page_num=$_GET['page'];

    }
    else
     {
        $page_num=1;
     }



        echo'<table style="margin-left:1000px; margin-top: -600px; border-collapse: collapse;"><tr>';
        for($j=($page_num-1)*15;$j<$page_num*15;$j++)
        {
            if($j==$total )
            {
            break;
            }
            echo'<td  style="border: 2px solid black;">'. $objet[$j]['prenom'].'</td>';
            echo'<td  style="border: 2px solid black;">'. $objet[$j]['nom'].'</td>';
            echo'<td  style="border: 2px solid black;">'. $objet[$j]['score']."points".'</td>';
            echo '<br>';
            
                echo'</tr><tr>';
            
        } 
        echo'</tr></table>';

        for ($i=1; $i <=$nbrPage ; $i++) 
        {
            echo "<div style=\" position: relative; top: 100px; margin-right: 50%;\"><a href='listesjoueurs.php?lien=3&page=".$i."' >Page $i  </a></div>";
        }
    
}
?>

<html>

<head>

	<meta charset="utf-8">

	<link rel="stylesheet" href="../asset/css/admin.css" media="screen" type="text/css" />
</head>

<body>
	<div class="container">
		<div class="cadre">
			<div id="titre1">
				<div class="logo">
					<img class="imgLogo" src="../asset/img/logo.png">
					<h1>Le plaisir de jouer</h1>
				</div>
			</div>
			<div id="titre2">
				<h2>CREER ET PARAMETRER VOS QUIZZ</h2>
				<input class="submit" type="submit" value='Déconnexion'>

			</div>
			<div class "cadre1-2">

				<div class="cadre1">
					<img class="userImg">

					<ul>
						<li>
							<a href="?p=listesDesQuestion">Listes des Questions</a>
						</li>
						<label id="img2" for="">
							<img class="img2" src="../asset/img/img1.png" alt="">
						</label>
						<li>
							<a href="?p=creerAdmin">Créer Admin</a>
						</li>
						<label id="img2" for="">
							<img class="img1" src="../asset/img/img4.png" alt="">
						</label>
						<li>
							<a href="?p=listesJoueur">Listes Joueurs</a>
						</li>
						<label id="img2" for="">
							<img class="img2" src="../asset/img/img1.png" alt="">
						</label>
						<li>
							<a href="?p=creerQuestions">Créer Questions</a>
						</li>
						<label id="img2" for="">
							<img class="img1" src="../asset/img/img4.png" alt="">
						</label>
					</ul>
				</div>
			</div>
		</div>


</body>

</html> 