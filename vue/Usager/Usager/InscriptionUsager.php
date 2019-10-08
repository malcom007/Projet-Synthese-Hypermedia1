<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styleForInscription.css">

<body>

<form id="regForm" action="/action_page.php">
    <h1>S'inscrire:</h1>
    <p>Veuillez renseigner ce formulaire pour vous creer un compte.</p>
    <p><input type="hidden" name="ftypeCompte" value="3"></p>
    <p id="message"></p>
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
        <label for="prenoms"><b>Prenoms *</b></label>
        <p><input type="text" placeholder="Mon prenom" oninput="this.className = ''" name="fprenoms" required
                  pattern="[a-zA-Z\s]{2,50}" title="entrez un prenom valide"></p>

        <label for="nom"><b>Nom *</b></label>
        <p><input type=text placeholder="mon nom" oninput="this.className = ''" name="fnom" required
                  pattern="[a-zA-Z\s]{2,50}" title="entrez un nom valide"></p>

    </div>

    <div class="tab">
        <label for="email"><b>Email</b></label>
        <p><input type="email" placeholder="email@valide.net" oninput="this.className = ''" name="femail"
                  title="entrez un email valide" required></p>
        <label for="numCel"><b>Cellulaire *</b></label>
        <p><input type="tel" placeholder=" 999 999 9999" oninput="this.className = ''" name="fphone"
                  title="entrez un telephone valide" required></p>
    </div>

    <div class="tab">
        <label for="psw"><b>Mot de passe *</b></label>
        <p><input type="password" placeholder="Aa&1abcde"
                  title="ce champ doit contenir au moins 8 caracteres avec au moins 1 chiffre, une majuscule et une miniscule"
                  oninput="this.className = ''" name="fpword" type="password" required
                  pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,20}"></p>
        <label for="psw-repeat"><b>Repeter votre mot de passe *</b></label>
        <p><input type="password" placeholder="Repetez votre mot de passe" oninput="this.className = ''"
                  name="fpsw-repeat" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,20}"></p>
    </div>
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>

    </div>
</form>

<script src="scriptforInscription.js">
</script>

</body>
</html>

