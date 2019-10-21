<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>swipngo</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./assets/css/SwipDash.css?v=1.3.0"/>




</head>
<body>
<div class="wrapper">
    <!-sidebar>
    <div class="sidebar" data-color="orange">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">

            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                swipngo
            </a>
        </div>

        <div id="menu" class="sidebar-wrapper" id="sidebar-wrapper">


            <ul  class="nav">
                <li class="active">
                    <a class="nav-link" href="#" data-target="dash">
                        <i class="fa fa-home"></i>
                        <p>Acceuil</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#" data-target="achat">
                        <i class="fas fa-money-bill-alt"></i>
                        <p>Ajouter Terminal</p>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="#" data-target="ListTerminal">
                        <i class="fas fa-exchange-alt"></i>
                        <p>Liste des Entreprise </p>
                    </a>
                </li>
                <li >
                    <a class="nav-link" href="#" data-target="Historque">
                        <i class="fas fa-history"></i>
                        <p>Historique</p>
                    </a>
                </li>
                <li >
                    <a class="nav-link" href="#" data-target="support">
                        <i class="fas fa-envelope-open-text"></i>
                        <p>Message</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <nav class="navbar navbar-expand-lg  navbar-transparent bg-primary  navbar-absolute" data-color="black">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">Dashboard</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <form>
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <i class="fas fa-search "></i>

                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="far fa-bell"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Stats</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="far fa-envelope"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                            </a>
                        </li>
                        <li class="dropdown nav-item  ">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="true">
                                <i class="fas fa-user-circle"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>

                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#" >message</a>
                                <a  class="dropdown-item" href="#" >Drafts</a>
                                <a  class="dropdown-item" href="#" >Sent Items</a>

                                <a  class="dropdown-item" href="#" >deconnexion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- End Navbar -->
        <div class="panel-header2 panel-header-sm">
        </div>

        <div id="content" class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="panel-header panel-header-lg">
                            <canvas id='bigDashboardChart'></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-r">
                    <div class="cascading-admin-card card card-cascade">
                        <div class="admin-up">
                            <i class="primary-color fas fa-funnel-dollar"></i>
                            <div class="data">

                                <p>SOLDE DU CREDIT</p>
                                <strong>25</strong>


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                                     class="progress-bar bg-primary" style="width: 25%;">
                                </div>
                            </div>
                            <p class="card-text">Better than last week (25%)</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 mb-r">
                    <div class="cascading-admin-card card card-cascade">
                        <div class="admin-up">
                            <i class="primary-color fas fa-exchange-alt"></i>
                            <div class="data">

                                <p>CREDIT TRANSFERÉ</p>
                                <strong>3</strong>


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                                     class="progress-bar bg-primary" style="width: 3%;">
                                </div>
                            </div>
                            <p class="card-text">Better than last week (3%)</p>
                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-md-6 mb-r">
                    <div class="cascading-admin-card card card-cascade">
                        <div class="admin-up">
                            <i class="primary-color fas fa-download"></i>
                            <div class="data">

                                <p>CREDIT RECUS</p>
                                <strong>6</strong>


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="progress">
                                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" role="progressbar"
                                     class="progress-bar bg-primary" style="width: 10%;">
                                </div>
                            </div>
                            <p class="card-text">Better than last week (6%)</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy;
                    <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>
                    , Designed by
                    <a href="https://www.invisionapp.com" target="_blank">malcom</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">ruskov</a>.
                </div>
            </div>
        </footer>
        <!--   Core JS Files   -->
        <script src="./assets/js/core/jquery.min.js"></script>
        <!-- Chart JS -->
        <script src="./assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="./assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./assets/js/SwipDash.min.js?v=1.3.0" type="text/javascript"></script>
        <script src="./assets/dddddd.js"></script>


        <script type="text/javascript" >
            $('.nav').on('click','li',function () {
                $('.nav li.active').removeClass('active');
                $(this).addClass('active');

            })
        </script>

        <script>
            $(document).ready(function () {
                // Javascript method's body can be found in assets/js/ddddd.js
                dddddd.initDashboardPageCharts();

            });
        </script>


        <script>
            $(document).ready(function () {

                var trigger = $('#menu ul li a'),
                    container = $('#content');

                trigger.on('click', function () {
                    var $this = $(this),
                        target = $this.data('target');
                    console.log(target);

                    $(trigger).removeClass('active');
                    $(this).addClass('active');

                    container.load(target + '.html');
                    return false;


                });

            });

        </script>
        <script>
            $('.date-own').datepicker({
                minViewMode: 2,
                format: 'yyyy'
            });

        </script>
</body>
</html>

<?php
