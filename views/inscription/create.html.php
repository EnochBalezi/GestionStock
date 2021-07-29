<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="Inscription&index">Home </a>/ Inscription</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-9 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Inscription de l'élève</h3>
            </div>
            <div class="card-body">
                <form action="index.php?controller=inscription&task=create" method="post" enctype="multipart/form-data">

                    <div class="group">
                        <label for="classe">Classe</label>
                        <select name="classe" id="classe" class="form-control">
                            <option value="">Selectionnner la classe</option>
                            <?php foreach ($classe as $key => $value) {
                            ?>
                                <option value="<?= $value['Id'] ?>"><?= $value['Intituler'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="option">Options</label>
                        <select name="option" id="option" class="form-control">
                            <option value="">Selectionnner l'option</option>
                            <?php foreach ($option as $key => $value) {
                            ?>
                                <option value="<?= $value['IdOptions'] ?>"><?= $value['Designation'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="eleve">Elève</label>
                        <select name="eleve" id="eleve" class="form-control">
                            <option value="">Selectionnner l'élève</option>
                            <?php foreach ($eleve as $key => $value) {
                            ?>
                                <option value="<?= $value['Id'] ?>"><?= $value['Nom'] . ' ' . $value['Postnom'] ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="">Date</label>
                        <input type="date" name="date" id="date" class="form-control">
                    </div>
                    <div class="group">
                        <button type="submit" name="submit" class="btn btn-block"><i class="fa fa-plus fa-lg"></i> Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-header">
                <h4>Informations de la classe</h4>
            </div>
            <div class="card-body">
                <div class="group">
                    <label for="place">Place disponible</label>
                    <input type="text" name="place" id="place" class="form-control">
                </div>
                <div class="group">
                    <label for="restant">Place restantes</label>
                    <input type="text" name="restant" id="restant" class="form-control">
                </div>
                <div class="group">
                    <label for="occupe">Place occupées</label>
                    <input type="text" name="occupe" id="occupe" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>