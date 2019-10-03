<!DOCTYPE html>
<html>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box
    }

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
        background-color: #ddd;
        outline: none;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity: 1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: #474e5d;
        padding-top: 50px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* Style the horizontal ruler */
    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        font-size: 40px;
        font-weight: bold;
        color: #f1f1f1;
    }

    .close:hover, .close:focus {
        color: #f44336;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<body>

<div id="myModal" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>


    <form action="/action_page.php" style="border:1px solid #ccc">
        <div class="container">
            <h1>S'inscrire</h1>
            <p>Veuillez renseigner ce formulaire pour vous creer un compte.</p>
            <hr>
            <input type="hidden" name="typeCompte" value="3">
            <label for="prenoms"><b>Prenoms *</b></label>
            <input type="text" placeholder="Entrez vos prenoms" name="prenoms" onfocus="this.value=''" required>

            <label for="nom"><b>Nom *</b></label>
            <input type="text" placeholder="Entrez votre nom" name="nom" onfocus="this.value=''" required>

            <label for="numCel"><b>Cellulaire *</b></label>
            <input type="text" placeholder="Entrez votre numero de cellulaire" name="numCel" onfocus="this.value=''"
                   required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Entrez votre Email" onfocus="this.value=''" name="email">

            <label for="psw"><b>Mot de passe *</b></label>
            <input type="password" placeholder="Entrez votre Password" name="psw" onfocus="this.value=''" required>

            <label for="psw-repeat"><b>Repeter votre mot de passe *</b></label>
            <input type="password" placeholder="Repetez votre Password" name="psw-repeat" onfocus="this.value=''"
                   required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>en creant un compte chez nous vous acceptez les termes de notre <a href="#" style="color:dodgerblue">contrat</a>.
            </p>

            <div class="clearfix">
                <button type="button" id="id01" class="cancelbtn" data-dismiss="modal">Annuler</button>
                <button type="submit" class="signupbtn">S'inscrire</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>

