<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion-Stock | <?= $title ?></title>

    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggler">
    <div class="side-bar">
        <h1><i class="fa fa-pied-piper"></i> <span>Shine Tech</span></h1>
        <ul>
            <li><a href="Home" class="active">
                    <i class="fa fa-home"></i><span>Accueil</span> </a></li>
            <li><a href="produit&index">
                    <i class="fa fa-truck"></i><span>Prodiuts</span> </a></li>
            <!-- <li><a href="Eleve&index">
                    <i class="fa fa-user-circle"></i><span>Elèves</span> </a></li>
            <li><a href="Inscription&index">
                    <i class="fa fa-edit"></i><span>Inscriptions</span></a></li>
            <li><a href="">
                    <i class="fa fa-shopping-bag"></i><span>Ventes</span></a></li>
            <li><a href="">
                    <i class="fa fa-sort-amount-asc"></i><span>Dépenses</span> </a></li>
            <li><a href="">
                    <i class="fa fa-sort-amount-desc"></i><span>Pertes</span> </a></li>
            <li><a href="">
                    <i class="fa fa-book"></i><span>Rapports</span> </a></li> -->
            <div class="admin">
                <hr>
                <li><a href="">
                        <i class="fa fa-user-circle-o"></i><span>Comptes</span> </a></li>
                <li><a href="">
                        <i class="fa fa-gears"></i><span>Parametres</span> </a></li>
                <li><a href="">
                        <i class="fa fa-question"></i><span>A propos</span> </a></li>
            </div>

        </ul>
    </div>

    <div class="main-content">
        <div class="header">
            <div class="logo">
                <label for="nav-toggler">
                    <i class="fa fa-navicon"></i></label>
                <h3> Dashbord</h3>
            </div>

            <div class="user-wrap">
                <img src="public/img/avatar5.png" width="50px" height="50px" alt="">
                <div>
                    <h4>Enoch Balezi</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </div>

        <div class="main">
            <?= $container ?>
        </div>


    </div>
    <script src="public/js/jquery.js"></script>
    <script src="public/js/script.js"></script>

    <script> </script>
</body>

</html>