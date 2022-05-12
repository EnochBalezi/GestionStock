<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="eleve&index">Home </a>/ Produits</h2>
    </div>
</div>

<?php
$title = "Produits";
if (isset($message)) {
    echo $message;
}
?>

<div class="card">
    <div class="card-body">
        <div class="float-right">
            <button class="btn btn-add">
                <a href="index.php?controller=eleve&task=create"> <i class="fa fa-plus-circle"></i> </a>
            </button>
        </div>
        <table class="table">
            <thead class="thead-dark">
                <th>Image</th>
                <th>Intituler</th>
                <th>Prix</td>
                <th>Prenom</th>
                <th colspan="2" width="5%">Actions</th>
            </thead>
            <tbody>
                <?php foreach ($produits as $key => $value) { ?>
                    <tr>
                        <td> <img src="public/img/<?= $value["image"] ?>" width="50px" height="50px" alt=""></td>
                        <td><?= $value['intitule'] ?></td>
                        <td><?= $value['prix'] ?></td>
                        <td><?= $value['image'] ?></td>
                        <td><a href="produit&task=edit&id=<?= $value['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a></td>
                        <td><a href="produit&task=delete&id=<?= $value['id'] ?>" onclick=" event.preventDefault();confirm('Est-vous sur de vouloir supprimer cette élèment?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>