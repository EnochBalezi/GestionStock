<?php

if (!$classe == null) {
    foreach ($classe as $key => $value) {
?>
        <div class="card">
            <div class="card-body">
                <h2 class="text"><a href="Classe&index">Home </a>/ Détails de la classe <?= $value['Intituler'] ?></h2>
            </div>
        </div>

        <div class="details">
            <div class="detail-desc">
                <h2><?= $value['Intituler'] ?></h2>
                <small>Date : <?= $value['created_at'] ?></small><br>
                <span>Place : <?= $value['Place'] ?>$</span>
                <a href="index.php?controller=Classe&task=edit&id=<?= $value['Id'] ?>" class="btn btn-block"> <i class="fa fa-edit fa-lg"></i> Modifier</a>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <div class="card">
        <div class="card-body">
            <h2 class="text"><a href="produit&index">Home </a>/ Détails du produit</h2>
        </div>
    </div>

    <div class="message message-info">
        <h4>Pas d'information possible</h4>
    </div>
<?php
} ?>