<div id="pen-title">
    <h1>Changement de Mot de passe</h1>
</div>
<div class="container">
    <div class="card"></div>
    <div class="card">
        <h1 class="title">Voici la derniere étape pour réinitialiser votre Mot de passe</h1>
        <form method="post" action="assets/include/traitement_reset.php">
            <div class="input-container">
                <input type="password" id="mdp1" onchange="DoubleCheck()" name="mdp"
                    pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                <label for="#{label}">Mot de passe </label>
                <div class="bar"></div>
            </div>
            <div
                style=" align-items: center; display: flex; justify-content: center; color: red; margin: 0px 0 50px; font-size:16px;">
                (minimum : 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre)</div>
            <div class="input-container">
                <input type="password" id="mdp2" onchange="DoubleCheck()" name="mdp1" required="required" />
                <label for="#{label}"> Confirmer Mot de passe</label>
                <div class="bar"></div>
            </div>

            <div class="button-container">
                <button><span>confirmation</span></button>
            </div>
        </form>
    </div>


    <!-- Portfolio--><a id="portfolio" href="localhost/portfolio/" title="View my portfolio!"><i
            class="fa fa-link"></i></a>
    <!-- CodePen--><a id="codepen" href="#" title="Follow me!"><i class="fa fa-codepen"></i></a>