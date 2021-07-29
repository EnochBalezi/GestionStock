<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="produit&index">Home </a>/ Classe</h2>
    </div>
</div>

<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3>Nouveau Classe</h3>
        </div>
        <div class="card-body">
            <form action="index.php?controller=classe&task=create" method="post">
                <div class="group">
                    <label for="intituler">Intituler</label>
                    <input type="text" name="intituler" id="intituler" class="form-control">
                </div>
                <div class="group">
                    <label for="intituler">Place</label>
                    <input type="numeric" name="place" id="place" class="form-control">
                </div>
                <div class="group">
                    <button type="submit" name="submit" class="btn btn-block"><i class="fa fa-plus fa-lg"></i> Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>