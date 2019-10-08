<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styleForLoggin.css">
</head>
<body>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
        class="close" title="Close Modal">&times;</span>

    <h2>Se connecter</h2>

    <form action="/action_page.php" method="post">
        <div class="imgcontainer">

        </div>

        <div class="container">
            <label for="uname"><b>Cellulaire</b></label>
            <input type="text" placeholder="Enter Username" name="uname" onfocus="this.value=''" required>

            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="Enter Password" name="psw" onfocus="this.value=''" required>

            <button type="submit">Se connecter</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
</body>
</html>
