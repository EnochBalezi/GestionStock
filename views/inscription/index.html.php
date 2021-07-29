<div class="card">
    <div class="card-body">
        <h2 class="text"><a href="Inscription&index">Home </a>/ Inscriptions</h2>
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
            <a href="index.php?controller=Inscription&task=create" class="btn btn-add"> <i class="fa fa-plus-circle"></i> </a>
        </div>
        <h2>Listes des Inscriptions</h2>
        <table width="100%">
            <thead>
                <tr>
                    <td>Date</td>
                    <td>Eleve</td>
                    <td>Option</td>
                    <td>Classe</td>
                    <td colspan="3" width="5%">Actions</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inscriptions as $key => $value) { ?>
                    <tr>
                        <td><?= $value['DateInsc'] ?></td>
                        <td><?= $value['Nom'] . ' ' . $value['Postnom'] ?></td>
                        <td><?= $value['Designation'] ?></td>
                        <td><?= $value['Intituler'] ?></td>
                        <td><a href="index.php?controller=Inscription&task=show&id=<?= $value['Id'] ?>" class="btn btn-secondary"><i class="fa fa-tablet"></i></a></td>
                        <td><a href="index.php?controller=Inscription&task=edit&id=<?= $value['Id'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                        <td><a href="index.php?controller=Inscription&task=delete&id=<?= $value['Id'] ?>" onclick=" event.preventDefault();confirm('Est-vous sur de vouloir supprimer cette élèment?')" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>