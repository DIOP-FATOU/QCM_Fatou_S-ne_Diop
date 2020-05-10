<?php
                 if(!empty($_POST['valider'])){ 
                    $reponses=[];
                    $question=$_POST['question'];
                    $nbreDepoint=$_POST['nbreDePoint'];
                    $choix=$_POST['choix'];
                    $inputGenerer=count($_POST)-4;
                    for ($i = 0; $i < $inputGenerer - 1; $i++) {
                        if ($_POST['choix'] === "multiple") {
                            if (isset($_POST['reponse' . ($i + 1) . '']) && $_POST['reponse' . ($i + 1) . ''] != "") {
                                if (isset($_POST["checkbox" . ($i + 1) . ""])) {
                                    $reponses[$i]['reponse'] = $_POST['reponse' . ($i + 1) . ''];
                                    $reponses[$i]['valide'] = "true";;
                                } else {
                                    if (isset($_POST['reponse' . ($i + 1) . ''])) {
                                        $reponses[$i]['reponse'] = $_POST['reponse' . ($i + 1) . ''];
                                        $reponses[$i]['valide'] = "false";
                                    }
                                }
                            }
                        }
                        if ($_POST['choix'] === "simple") {
                            if ($_POST['reponse' . ($i + 1) . ''] != "") {
                                if (!empty($_POST['radio'] == "reponse".($i + 1) . "")) {
                                    $reponses[$i]['reponse'] = $_POST['reponse' . ($i + 1) . ''];
                                    $reponses[$i]['valide'] = "true";;
                                } else {
                                    $reponses[$i]['reponse'] = $_POST['reponse' . ($i + 1) . ''];
                                    $reponses[$i]['valide'] = "false";;
                                }
                            }
                        }
                    }
                    if ($_POST['choix'] === "texte") {
                        $reponses[$i]['reponse'] = $_POST['reponseTexte'];
                        $reponses[$i]['valide'] = "true";;
                    }
                    var_dump($reponses);
                   /** $question['reponses'] = $reponses;
                    $files = '../../../assets/json/question.json';
                    $db = file_get_contents($files);
                    $db = json_decode($db, true);
                    array_push($db, $question);
                    $db = json_encode($db);
                    file_put_contents('../../../assets/json/question.json', $db);**/ 
                  
                    
                }  
                
?>

<form method="post" name="myForm" onSubmit="return vide();">
	<div>
		<label for="questions">Questions
			<span class="blue">
				<span></span>
		</label>
		<textarea class="question" type="text" name="question" cols="35" rows="5" required></textarea>
	</div>

	</br>

	<div>
		<label for="nbreDePoint">Nbres de points
			<span class="blue">
				<span></span>
		</label>
		<input class="nbre" type="number" name="nbreDePoint" required>
	</div>
	</br>

	<div id="inputs" class="Gn">
		<label for="Type de réponse">Type de réponse
			<span class="blue">
				<span></span>
		</label>

		<select style="height:35px; widh:160px;" placeholder="Donner le type réponse" name="choix" id="choix" required>
			<option value="simple"> réponse à choix simple</option>
			<option value="multiple"> réponse à choix multiple</option>
			<option value="texte"> texte</option>
		</select>
		<button class="bouton" id="btn-first" class="btn-first" onClick="genere()" ;>+</button>
		</br>

		<input class="bouton" type="submit" name="valider" value="Enregistrer" style="background-color:#3addd5">
	</div>
</form>
<script>
	// FONCTION qui permet de generer des inputs
	var indice = 0;
	var nbr = 0;

	function genere() {
		nbr++;
		indice++;
		// recup de l'id select
		var choix = document.getElementById("choix").value;
		//divinputs est le div parent
		var divinputs = document.getElementById("inputs");
		//nous crreeons un div
		var newinput = document.createElement("div");
		//on veut agreger a notre div les attributs suivants
		newinput.setAttribute('class', 'new');
		// newinput.setAttribute("type","text");
		newinput.setAttribute("id", "reponse_" + nbr);

		if (choix === "simple") {
			var nb = 0;
			//pour desactiver le bouton    
			document.getElementById("btn-first").disabled = false;
			newinput.innerHTML =
				`
                         <input type="text" name="reponse${indice}" class="new">
                         <input type="radio" value="reponse${indice}" name="radio" class="radio">
                         <button type="button" class="new_btn" onclick= "sup(${nbr})">X</button>                      
                    `;
		} else if (choix === "multiple") {
			document.getElementById("btn-first").disabled = false;
			newinput.innerHTML =
				`
                         <input type="text" name="reponse${indice}" class="new">
                         <input type="checkbox"  name="checkbox${nbr}" class="radio">
                         <button type="button" class="new_btn" onclick= "sup(${nbr})">X</button>  
                    `;
		} else if (choix === "texte") {
			//pour activer le bouton
			document.getElementById("btn-first").disabled = true;
			newinput.innerHTML =
				`
                         <input type="text" name="reponseTexte"  class="new">
                         <button type="button" class="new_btn" onclick= "sup(${nbr})">X</button>                     
                    `;
		}
		divinputs.appendChild(newinput);

	}

	//  function pour supprimer un input
	function sup(n) {
		var target = document.getElementById('reponse_' + n);
		target.remove();
	}
	//validation des champs
	var text = document.getElementById('text');
	var points = document.getElementById('points');
	var new_input_text = document.getElementById('reponse');
	document.getElementById('soumet').addEventListener('click', function(e) {

		if (points.value == "") {
			e.preventDefault();
			// alert('ok')
			error.textContent = "*slate a mark*";
		} else if (textss.value == "") {
			e.preventDefault();
			// alert('ok')
			error.textContent = "*Ask a question*";
		}
		// else if(new_input_text.value == "") {
		//     e.preventDefault() ;
		//     // alert('ok')
		//     error.textContent = "*slate a answer*";                 
	})

	function vide() {
		var question = document.forms['myForm'].question.value;
		var nombreDeQuestion = document.forms['myForm'].nbrDeQuestion.value;
		var typeDeReponse = document.forms['myForm'].choix.value;
		if (!question.replace(/\s+/, '').length) {
			alert('Le champ question ne pas peut être vide');
			return false;
		}
		if (!nom.replace(/\s+/, '').length) {

			alert('Le champ nom ne peut être vide');
			return false;
		}
		if (!login.replace(/\s+/, '').length) {
			alert('Le champ login ne peut être vide');
			return false;
		}
		if (!password.replace(/\s+/, '').length) {
			alert('Le champ password ne peut être vide');
			return false;
		}
		if (!cpassword.replace(/\s+/, '').length) {
			alert('Le champ confirmation ne peut être vide');
			return false;
		}
		if (cpassword !== password) {
			alert(' les deux mot de passe ne conrrespondent  pas');
			return false;
		}
		var fileName = document.forms['myForm'].file.value;
		regex = new RegExp("(.*?)\.(gpeg|png)$");
		if (fileName === "") {
			alert(' Le champ avatar ne peut être vide');
			return false;
		}
		/*if(regex!=="png"){
		    alert("seul les formats  png  ou jpeg sont autorisé");
		    return false;

		}*/


	}
</script>