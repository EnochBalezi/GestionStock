<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="Classe&index">Home </a>/ Classe</h2>
    </div>
</div>

<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3>Modification Classe</h3>
        </div>
        <div class="card-body">
            <?php
            if (!$classe == null) {
                foreach ($classe as $key => $value) {
            ?>
                    <form action="index.php?controller=classe&task=edit" method="post">
                        <div class="group">
                            <input type="hidden" value="<?= $value['Id'] ?>" name="id_classe" id="id_classe" class="form-control">
                        </div>
                        <div class="group">
                            <label for="intituler">Intituler</label>
                            <input type="text" value="<?= $value['Intituler'] ?>" name="intituler" id="intituler" class="form-control">
                        </div>
                        <div class="group">
                            <label for="intituler">Place</label>
                            <input type="numeric" value="<?= $value['Place'] ?>" name="place" id="place" class="form-control">
                        </div>
                        <div class="group">
                            <button type="submit" name="submit" class="btn btn-block"><i class="fa fa-edit fa-lg"></i> Modifier</button>
                        </div>
                    </form>
                <?php
                }
            } else {
                ?>
                <div class="card">
                    <div class="card-body">
                        <h2 class="text"><a href="produit&index">Home </a>/ Modification de la classe</h2>
                    </div>
                </div>

                <div class="message message-info">
                    <h4>Pas d'information possible</h4>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>