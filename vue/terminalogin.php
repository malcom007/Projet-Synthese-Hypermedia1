

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <!--Made with love by Mutiullah Samim -->
    <!-- Google Font   -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="./style/styleforLogin.css">
</head>
<body>
<?php

$msgError = (ISSET($_REQUEST['msg'])) ? $_REQUEST['msg']: "";

if ($msgError !==''){
    var_dump($msgError);
}



?>

<div class="container">
    <div class="d-flex justify-content-center h-100">



        <div class="card">




            <div class="card-header">
                <h3>Login Terminal</h3>

            </div>

            <div class="card-body">
                <form name="myForm" onsubmit="return validateForm()" method="post" action="">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" value="" class="form-control" placeholder="Votre nom au complet" id="username" name="fuser"  required>

                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                        </div>
                        <input class="form-control" value="" placeholder="mot de passe" name="fpwd" type="password"   required >
                    </div>




                    <div class="form-group ">
                        <input name="action" value="dashboardTerminal" type="hidden" />
                        <input type="submit" value="Login" class="btn float-right login_btn " onclick="check()" ">

                    </div>

                    <div class="form-group">
                        <a href="?action=default" class="text-white rtn">
                            <i class="fas fa-long-arrow-alt-left"></i>
                            <span class="rtn">retour</span>
                        </a>

                    </div>


                </form>
            </div>

        </div>
    </div>
</div>

<script>

    var myUser = {
        "users": {
            "username": "crosemont",
            "password": "crosemont"
        }
    }



    function validateForm() {
        msg = document.getElementById('message');

        var x = document.forms["myForm"]["fname"].value;
        var y = document.forms["myForm"]["fpwd"].value;


        if (x == "" || y == "") {
            msg.style.display = 'block';
            msg.innerHTML="<li>Veuillez remplir tout les champs</li>";
            return false;
        }else {
            msg.style.display = 'none';
        }

        if (myUser.users.username != x || myUser.users.password !=y){
            msg.style.display = 'block';
            msg.innerHTML="<li>Mot de passe ou username invalide</li>";
            return false;
        }






    }

</script>


</body>
</html>
