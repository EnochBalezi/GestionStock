<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="Classe&index">Home </a>/ catégories</h2>
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
            <a href="index.php?controller=classe&task=create" class="btn btn-add"> <i class="fa fa-plus-circle"></i> </a>
        </div>
        <h2>Listes des catégories</h2>
        <table width="100%">
            <thead>
                <tr>
                    <td>#</td>
                    <td>Intituler</td>
                    <td>Place</td>
                    <td colspan="3" width="5%">Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($classes as $key => $value) { ?>
                    <tr>
                        <td><?= $value['Id'] ?></td>
                        <td><?= $value['Intituler'] ?></td>
                        <td><?= $value['Place'] ?></td>
                        <td><a href="index.php?controller=Classe&task=show&id=<?= $value['Id'] ?>" class="btn btn-secondary"><i class="fa fa-tablet"></i></a></td>
                        <td><a href="index.php?controller=Classe&task=edit&id=<?= $value['Id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                        <td><a href="index.php?controller=Classe&task=delete&id=<?= $value['Id'] ?>" onclick=" event.preventDefault();confirm('Est-vous sur de vouloir supprimer cette élèment?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
</div>