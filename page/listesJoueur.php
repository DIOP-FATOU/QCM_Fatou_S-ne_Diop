


			<table>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Score</th>
	

		<tr>
			<td>DIATTA</td>
			<td>Ibou</td>
			<td>1022 pts</td>
		</tr>
		<tr>
			<td>NIANG</td>
			<td>Aly</td>
			<td>963 pts</td>
		</tr>
		<tr>
			<td>MBAYE</td>
			<td>Saliou</td>
			<td>877 pts</td>
		</tr>
		<tr>
			<td>DIOUF</td>
			<td>Khady</td>
			<td>875 pts</td>
		</tr>
		<tr>
			<td>SOW</td>
			<td>Moussa</td>
			<td>870 pts</td>
		</tr>
		<tr>
			<td>MBOUP</td>
			<td>Youssou</td>
			<td>816 pts</td>
		</tr>
		<tr>
			<td>NIANG</td>
			<td>Djiby</td>
			<td>816 pts</td>
		</tr>
		<tr>
			<td>DIENG</td>
			<td>Astou</td>
			<td>800 pts</td>
		</tr>
		<tr>
			<td>SAMB</td>
			<td>Ibrahima</td>
			<td>797 pts</td>
		</tr>
		<tr>
			<td>GUEYE</td>
			<td>Léna</td>
			<td>763 pts</td>
		</tr>
		<tr>
			<td>BEYE</td>
			<td>Aminata</td>
			<td>760 pts</td>
		</tr>
		<tr>
			<td>MANE</td>
			<td>Lamine</td>
			<td>759 pts</td>
		</tr>
		<tr>
			<td>MENDES</td>
			<td>Serges</td>
			<td>730 pts</td>
		</tr>
		<tr>
			<td>NDECKY</td>
			<td>Estelle</td>
			<td>723 pts</td>
		</tr>
		<tr>
			<td>DIALLO</td>
			<td>Moustapha</td>
			<td>720 pts</td>
		</tr>
		<tr>
			<td>NDOUR</td>
			<td>Abba</td>
			<td>716 pts</td>
		</tr>
		</table>

		<input class="suivant" type="submit" value='Suivant'>

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
            {
                echo'</tr><tr>';
            }
        } 
        echo'</tr></table>';

        for ($i=1; $i <=$nbrPage ; $i++) 
        {
            // echo "<div style=\" position: relative; top: 100px; margin-right: 50%;\"><a href='listesjoueurs.php?lien=3&page=".$i."' >Page $i  </a></div>";

        }

} 

