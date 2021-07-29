<?php

if (!$eleve == null) {
    foreach ($eleve as $key => $value) {
?>
        <div class="card">
            <div class="card-body">
                <h2 class="text"><a href="eleve&index">Home </a>/ Détails de <?= $value['Nom'] . ' ' . $value['Postnom']  ?></h2>
            </div>
        </div>

        <div class="details">
            <div class="detail-img">
                <img src="public/img/<?= $value['Image'] ?>" alt="">
            </div>
            <div class="detail-desc">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="nav-list">
                            <div class="nav-header">
                                <h4>Identite de l'élève</h4>
                            </div>
                            <li class="nav-item">
                                <span>Nom</span>
                                <p><?= $value['Nom'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Postnom</span>
                                <p><?= $value['Postnom'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Prénom</span>
                                <p><?= $value['Prenom'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Genre</span>
                                <p><?php if ($value['Genre'] == 'M') {
                                        echo "Masculin";
                                    } else {
                                        echo "Féminin";
                                    }
                                    "" ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Lieu de Naissance</span>
                                <p><?= $value['LieuNaiss'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Date de Naissance</span>
                                <p><?= $value['DateNaiss'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Térritoire</span>
                                <p><?= $value['Territoire'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Chéfferie</span>
                                <p><?= $value['Chefferie'] ?></p>
                            </li>
                            <li class="nav-item">
                                <span>Nationalité</span>
                                <p><?= $value['Nationalite'] ?></p>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-5">
                        <p>Parcours de l'élève</p>
                    </div>
                </div>
                <a href="index.php?controller=eleve&task=edit&id=<?= $value['id'] ?>" class="btn btn-block"> <i class="fa fa-edit fa-lg"></i> Modifier</a>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <div class="card">
        <div class="card-body">
            <h2 class="text"><a href="eleve&index">Home </a>/ Détails du eleve</h2>
        </div>
    </div>

    <div class="message message-info">
        <h4>Pas d'information possible</h4>
    </div>
<?php
} ?>