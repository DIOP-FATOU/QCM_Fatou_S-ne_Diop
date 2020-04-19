<?php
function verif($login, $pwd ) { 
    $tab = file_get_contents('./asset/json/utilisateur.json');
    $objet = json_decode($tab, true);

    $teste = false;
    for ($i = 0; $i < count($objet); $i++) {

        if ($login == $objet[$i]['login'] && $pwd == $objet[$i]['password']) {
           $teste=true;
           break;
        }
    }
    if($teste==true)
    {
        return 1;
    }
    else{
        return 0  ;  }
   

   
}
function role($login, $pwd ) { 
    $tab = file_get_contents('./asset/json/utilisateur.json');
    $objet = json_decode($tab, true);
    $teste = false;
    for ($i = 0; $i < count($objet); $i++) {

        if ($login == $objet[$i]['login'] && $pwd == $objet[$i]['password']&& "admin" == $objet[$i]['role']) {
          return 1;
          
        }   
    }
    return 0;
   
   

   
}

?>