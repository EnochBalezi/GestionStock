<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="eleve&index">Home </a>/ Elèves</h2>
    </div>
</div>

<?php
if (isset($message)) {
    echo $message;
}
?>

<div class="card">
    <div class="card-body">
        <div class="float-right">
            <a href="index.php?controller=eleve&task=create" class="btn btn-add"> <i class="fa fa-plus-circle"></i> </a>
        </div>
        <h2>Listes des élèves</h2>
        <table width="100%">
            <thead>
                <tr>
                    <td>Nom</td>
                    <td>PostNom</td>
                    <td>Prenom</td>
                    <td>Genre</td>
                    <td>LieuN</td>
                    <td>DateNaiss</td>
                    <td>Territoire</td>
                    <td>Chéfferie</td>
                    <td>Nationalite</td>
                    <td>Image</td>
                    <td colspan="3" width="5%">Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eleves as $key => $value) { ?>
                    <tr>
                        <td><?= $value['Nom'] ?></td>
                        <td><?= $value['Postnom'] ?></td>
                        <td><?= $value['Prenom'] ?></td>
                        <td><?= $value['Genre'] ?></td>
                        <td><?= $value['LieuNaiss'] ?></td>
                        <td><?= $value['DateNaiss'] ?></td>
                        <td><?= $value['Territoire'] ?></td>
                        <td><?= $value['Chefferie'] ?></td>
                        <td><?= $value['Nationalite'] ?></td>
                        <td> <img src="public/img/<?= $value["Image"] ?>" width="50px" height="50px" alt=""></td>
                        <td><a href="index.php?controller=eleve&task=show&id=<?= $value['Id'] ?>" class="btn btn-secondary"><i class="fa fa-tablet"></i></a></td>
                        <td><a href="index.php?controller=eleve&task=edit&id=<?= $value['Id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                        <td><a href="index.php?controller=eleve&task=delete&id=<?= $value['Id'] ?>" onclick=" event.preventDefault();confirm('Est-vous sur de vouloir supprimer cette élèment?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>