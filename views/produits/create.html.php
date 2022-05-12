<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="eleve&index">Home </a>/ Elève</h2>
    </div>
</div>


<div class="col-md-9 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3>Nouveau Elève</h3>
        </div>
        <div class="card-body">
            <form action="index.php?controller=eleve&task=create" method="post" enctype="multipart/form-data">

                <div class="group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <div class="group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="group">
                            <label for="postnom">Post-Nom</label>
                            <input type="text" name="postnom" id="postnom" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <div class="group">
                            <label for="prenom">Prénom</label>
                            <input type="text" name="prenom" id="prenom" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="group">
                            <label for="genre">Genre</label>
                            <select name="genre" id="genre" class="form-control">
                                <option value="">Séléctionner le genre</option>
                                <option value="M">Masculin</option>
                                <option value="F">Féminin</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <div class="group">
                            <label for="lieuNaiss">Lieu de Naissance</label>
                            <input type="text" name="lieuNaiss" id="lieuNaiss" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="group">
                            <label for="dateNaiss">Date de Naissance</label>
                            <input type="date" name="dateNaiss" id="dateNaiss" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-6">
                        <div class="group">
                            <label for="territoire">Térritoire</label>
                            <input type="text" name="territoire" id="territoire" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="group">
                            <label for="chefferie">Chéfferie</label>
                            <input type="text" name="chefferie" id="chefferie" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="group">
                    <label for="nationnalite">Nationnalité</label>
                    <input type="text" name="nationalite" id="nationnalite" class="form-control">
                </div>
                <div class="group">
                    <button type="submit" name="submit" class="btn btn-block"><i class="fa fa-plus fa-lg"></i> Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>