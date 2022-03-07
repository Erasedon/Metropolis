<div class="d-flex justify-content-center ">
    <FORM action="contact.php" method="post" class="w-50 p-3 ">
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Nom</label>
            <input type="text" class="form-control" placeholder="Entrez nom en majuscules" name="Nom" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Prenom</label>
            <input type="text" class="form-control" placeholder="Entrez prénom" name="Prenom" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Adresse Mail</label>
            <input id="mail1" type="email" class="form-control " placeholder="Entrez email" onchange="DoubleCheck()"
                name="Mail" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1 " class="text-white">Confirmer Adresse Mail</label>
            <input id="mail2" type="email" class="form-control" placeholder="Entrez email" onchange="DoubleCheck()"
                onpaste required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Téléphone(optionnel)</label>
            <input type="tel" class="form-control"
                placeholder="Entrez numéro de téléphone , Il sera utilsé pour des besoins urgents (stage, document manquant, etc)"
                name="Tel">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Mot de passe (minimum : 8 caractères, 1 majuscule, 1 minuscule, 1
                chiffre)</label>
            <input id="mdp1" type="password" class="form-control" placeholder="Entrez Mot de passe"
                onchange="DoubleCheck()" name="Mdp"
                pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1" class="text-white">Confirmer mot de passe</label>
            <input id="mdp2" type="password" class="form-control" placeholder="Entrez Mot de passe"
                onchange="DoubleCheck()" required>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label text-white" for="exampleCheck1">J'ai pris connaissance de mes droits d'accès de
                rectification et de suppression de mes données à caractère personnel</label>
        </div>

        <input type="Submit"  value="S'enregister" id="submit" disabled>
    </FORM>
</div>

