<div class="content">
        <div class="NouveauJoueur">
            <div class="InscriptionJoueur">
                S'inscrire
            </div>
            <div class="Textejoueur">
                Pour tester votre niveau de culture générale
            </div>
            <hr class="hr">
            <form name="myForm" class="adminAdd" method="POST" onsubmit=" return isEmpty();"
                  enctype="multipart/form-data">
                <label class="labelJoueur"for="prenom">Prénom</label>
                <input class="inputJoueur" type="text" name="prenom">
        
                <label class="labelJoueur" for="nom">Nom</label>
                <input class="inputJoueur" type="text" id="nom" name="nom" value="">
             
                <label class="labelJoueur" for="login">Login</label>
                <input class="inputJoueur" type="text" id="login" name="login" value="">
           
                <label class="labelJoueur" for="password">Password</label>
            
                <span id="errorPassword" class="error"></span>
                <input class="inputJoueur" type="password" id="password" name="password">
                <label class="labelJoueur" for="cpassword">Confirm password</label>
                <input class="inputJoueur" type="password" id="cpassword" name="cpassword" value="">
                Avatar <input class="inputfile" type="file" id="file" name="file" onchange="previewFile()"
                              accept=".jpeg, .png">
                <input onclick="return isEmpty()" type="submit" name="submit" class="buttonValider"
                       value="Créer compte">
            </form>
            <img class="Imgjoueur" src="" alt="user">
            <div class="Avatar">avatar du joueur</div>
        </div>
    </div>